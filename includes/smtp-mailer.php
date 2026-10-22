<?php
/**
 * Dehradun Defence College - Direct Native SMTP Mailer
 * 
 * Secure, zero-dependency SMTP client for transactional admission emails
 * Supports Gmail / Google Workspace (Port 465 SSL & Port 587 TLS),
 * cPanel Exim, and standard cloud SMTP relays.
 */

if (!defined('SMTP_HOST')) {
    if (file_exists(__DIR__ . '/../config.php')) {
        require_once __DIR__ . '/../config.php';
    } else {
        define('SMTP_ENABLED', true);
        define('SMTP_HOST', 'smtp.gmail.com');
        define('SMTP_PORT', 465);
        define('SMTP_SECURE', 'ssl');
        define('SMTP_USERNAME', 'dehradundefencecollege@gmail.com');
        define('SMTP_PASSWORD', 'owspotavnlkavvxp');
        define('SMTP_FROM_EMAIL', 'dehradundefencecollege@gmail.com');
        define('SMTP_FROM_NAME', 'Dehradun Defence College Admissions');
    }
}

/**
 * Send an HTML email via authenticated SMTP
 *
 * @param string $to Recipient email address
 * @param string $subject Email subject line
 * @param string $htmlBody HTML email content
 * @param string $replyToEmail Optional reply-to email address
 * @param string $replyToName Optional reply-to person name
 * @param array &$errorLog Array by reference to receive debug logs on failure
 * @return bool True if delivered to SMTP server successfully, False otherwise
 */
function ddc_send_smtp_email($to, $subject, $htmlBody, $replyToEmail = '', $replyToName = '', &$errorLog = [], $attachments = []) {
    $errorLog = [];
    $hasAttachments = !empty($attachments) && is_array($attachments);

    // If SMTP is disabled, fallback to standard mail()
    if (!defined('SMTP_ENABLED') || !SMTP_ENABLED) {
        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=UTF-8',
            'From: ' . SMTP_FROM_NAME . ' <' . SMTP_FROM_EMAIL . '>',
            'X-Mailer: PHP/' . phpversion()
        ];
        if (!empty($replyToEmail)) {
            $headers[] = 'Reply-To: ' . (!empty($replyToName) ? $replyToName . ' ' : '') . '<' . $replyToEmail . '>';
        }
        return @mail($to, $subject, $htmlBody, implode("\r\n", $headers));
    }

    $host       = SMTP_HOST;
    $port       = (int)SMTP_PORT;
    $secure     = strtolower(SMTP_SECURE);
    $username   = SMTP_USERNAME;
    $password   = SMTP_PASSWORD;
    $fromEmail  = SMTP_FROM_EMAIL;
    $fromName   = SMTP_FROM_NAME;
    $timeout    = 20;

    // Determine connection protocol prefix
    $connectionPrefix = '';
    if ($secure === 'ssl' || $port === 465) {
        $connectionPrefix = 'ssl://';
    } elseif ($secure === 'tls' || $port === 587) {
        $connectionPrefix = 'tcp://';
    }

    $context = stream_context_create([
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true
        ]
    ]);

    $socket = @stream_socket_client(
        $connectionPrefix . $host . ':' . $port,
        $errno,
        $errstr,
        $timeout,
        STREAM_CLIENT_CONNECT,
        $context
    );

    if (!$socket) {
        $errorLog[] = "Socket connection failed to {$host}:{$port} - {$errstr} ({$errno})";
        return false;
    }

    stream_set_timeout($socket, $timeout);

    $readResponse = function() use ($socket, &$errorLog) {
        $data = '';
        while ($line = fgets($socket, 515)) {
            $data .= $line;
            if (substr($line, 3, 1) === ' ') {
                break;
            }
        }
        return $data;
    };

    $sendCommand = function($cmd, $expectedCode) use ($socket, $readResponse, &$errorLog) {
        fputs($socket, $cmd . "\r\n");
        $response = $readResponse();
        $code = substr($response, 0, 3);
        if ($code !== (string)$expectedCode) {
            $errorLog[] = "Command [{$cmd}] failed with response: {$response}";
            return false;
        }
        return true;
    };

    // 1. Initial Greeting
    $greeting = $readResponse();
    if (substr($greeting, 0, 3) !== '220') {
        $errorLog[] = "Unexpected greeting: {$greeting}";
        fclose($socket);
        return false;
    }

    // 2. EHLO
    fputs($socket, "EHLO " . gethostname() . "\r\n");
    $ehloResponse = $readResponse();

    // 3. STARTTLS if on port 587
    if ($connectionPrefix === 'tcp://' && ($secure === 'tls' || $port === 587)) {
        if (!$sendCommand('STARTTLS', 220)) {
            fclose($socket);
            return false;
        }
        $cryptoOk = @stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        if (!$cryptoOk) {
            $errorLog[] = "TLS encryption handshake failed.";
            fclose($socket);
            return false;
        }
        // Repeat EHLO after TLS handshake
        fputs($socket, "EHLO " . gethostname() . "\r\n");
        $readResponse();
    }

    // 4. Authenticate
    if (!empty($username) && !empty($password)) {
        if (!$sendCommand('AUTH LOGIN', 334)) {
            fclose($socket);
            return false;
        }
        if (!$sendCommand(base64_encode($username), 334)) {
            fclose($socket);
            return false;
        }
        if (!$sendCommand(base64_encode($password), 235)) {
            fclose($socket);
            return false;
        }
    }

    // 5. MAIL FROM
    if (!$sendCommand("MAIL FROM:<{$fromEmail}>", 250)) {
        fclose($socket);
        return false;
    }

    // 6. RCPT TO
    if (!$sendCommand("RCPT TO:<{$to}>", 250)) {
        fclose($socket);
        return false;
    }

    // 7. DATA
    if (!$sendCommand("DATA", 354)) {
        fclose($socket);
        return false;
    }

    // 8. Headers & Body Construction
    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $encodedFromName = '=?UTF-8?B?' . base64_encode($fromName) . '?=';

    if ($hasAttachments) {
        $boundary = "==DDC_Multipart_" . md5(uniqid((string)microtime(true), true));
        $headers = [
            "From: {$encodedFromName} <{$fromEmail}>",
            "To: <{$to}>",
            "Subject: {$encodedSubject}",
            "Date: " . date('r'),
            "MIME-Version: 1.0",
            "Content-Type: multipart/mixed; boundary=\"{$boundary}\"",
            "X-Mailer: Dehradun Defence College Admission Engine v2026"
        ];

        if (!empty($replyToEmail)) {
            if (!empty($replyToName)) {
                $encodedReplyName = '=?UTF-8?B?' . base64_encode($replyToName) . '?=';
                $headers[] = "Reply-To: {$encodedReplyName} <{$replyToEmail}>";
            } else {
                $headers[] = "Reply-To: <{$replyToEmail}>";
            }
        }

        $bodyParts = [];

        // HTML Body Part
        $bodyParts[] = "--{$boundary}";
        $bodyParts[] = "Content-Type: text/html; charset=UTF-8";
        $bodyParts[] = "Content-Transfer-Encoding: base64\r\n";
        $bodyParts[] = chunk_split(base64_encode($htmlBody));

        // Attachment Parts
        foreach ($attachments as $att) {
            $filePath = is_array($att) ? ($att['path'] ?? '') : $att;
            $fileName = is_array($att) ? ($att['name'] ?? basename($filePath)) : basename($filePath);
            $fileMime = is_array($att) ? ($att['mime'] ?? 'application/octet-stream') : 'application/octet-stream';

            if (!empty($filePath) && file_exists($filePath) && is_readable($filePath)) {
                $fileContent = @file_get_contents($filePath);
                if ($fileContent !== false) {
                    $encodedFile = chunk_split(base64_encode($fileContent));
                    $safeFileName = preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $fileName);

                    $bodyParts[] = "--{$boundary}";
                    $bodyParts[] = "Content-Type: {$fileMime}; name=\"{$safeFileName}\"";
                    $bodyParts[] = "Content-Transfer-Encoding: base64";
                    $bodyParts[] = "Content-Disposition: attachment; filename=\"{$safeFileName}\"\r\n";
                    $bodyParts[] = $encodedFile;
                }
            }
        }

        $bodyParts[] = "--{$boundary}--";
        $messageData = implode("\r\n", $headers) . "\r\n\r\n" . implode("\r\n", $bodyParts) . "\r\n.\r\n";
    } else {
        $headers = [
            "From: {$encodedFromName} <{$fromEmail}>",
            "To: <{$to}>",
            "Subject: {$encodedSubject}",
            "Date: " . date('r'),
            "MIME-Version: 1.0",
            "Content-Type: text/html; charset=UTF-8",
            "Content-Transfer-Encoding: base64",
            "X-Mailer: Dehradun Defence College Admission Engine v2026"
        ];

        if (!empty($replyToEmail)) {
            if (!empty($replyToName)) {
                $encodedReplyName = '=?UTF-8?B?' . base64_encode($replyToName) . '?=';
                $headers[] = "Reply-To: {$encodedReplyName} <{$replyToEmail}>";
            } else {
                $headers[] = "Reply-To: <{$replyToEmail}>";
            }
        }

        $messageData = implode("\r\n", $headers) . "\r\n\r\n";
        $messageData .= chunk_split(base64_encode($htmlBody)) . "\r\n.\r\n";
    }

    fputs($socket, $messageData);
    $dataResponse = $readResponse();

    if (substr($dataResponse, 0, 3) !== '250') {
        $errorLog[] = "Data send failed: {$dataResponse}";
        fputs($socket, "QUIT\r\n");
        fclose($socket);
        return false;
    }

    // 9. QUIT
    fputs($socket, "QUIT\r\n");
    fclose($socket);

    return true;
}
