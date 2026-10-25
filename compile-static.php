<?php
/**
 * Static HTML Generator for Vercel Deployment
 * Compiles dynamic PHP templates into static UTF-8 HTML files
 * and rewrites internal .php links to clean URLs for static hosting
 */
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['SCRIPT_NAME'] = '/index.php';

$pages = [
    'index.php'                  => 'index.html',
    'about.php'                  => 'about.html',
    'director.php'               => 'director.html',
    'courses.php'                => 'courses.html',
    'course-detail.php'          => 'course-detail.html',
    'online-registration-form.php' => 'online-registration-form.html',
    'online-payment.php'         => 'online-payment.html',
    'faculty-facilities.php'     => 'faculty-facilities.html',
    'career-advisors.php'        => 'career-advisors.html',
    'college-activity.php'       => 'college-activity.html',
    'gallery.php'                => 'gallery.html',
    'results.php'                => 'results.html',
    'blog.php'                   => 'blog.html',
    'blog-single.php'            => 'blog-single.html',
    'contact.php'                => 'contact.html',
    'privacy-policy.php'         => 'privacy-policy.html',
    'terms.php'                  => 'terms.html',
    '404.php'                    => '404.html'
];

$dir = __DIR__;

function clean_static_links($html) {
    // 1. Home link
    $html = preg_replace('/href="index\.php"/', 'href="./"', $html);
    $html = preg_replace('/href="index\.php#([^"]*)"/', 'href="./#$1"', $html);
    
    // 2. Course detail & blog single with query string
    $html = preg_replace('/href="course-detail\.php\?course=([^"]*)"/', 'href="course-detail?course=$1"', $html);
    $html = preg_replace('/href="course-detail\.php"/', 'href="course-detail"', $html);
    $html = preg_replace('/href="blog-single\.php\?post=([^"]*)"/', 'href="blog-single?post=$1"', $html);
    $html = preg_replace('/href="blog-single\.php"/', 'href="blog-single"', $html);

    // 3. Other internal pages
    $staticPages = [
        'about', 'director', 'courses', 'course-detail', 'online-registration-form', 'online-payment',
        'faculty-facilities', 'career-advisors', 'college-activity', 'gallery',
        'results', 'blog', 'blog-single', 'contact',
        'privacy-policy', 'terms', '404'
    ];
    foreach ($staticPages as $p) {
        $html = preg_replace('/href="' . $p . '\.php"/', 'href="' . $p . '"', $html);
        $html = preg_replace('/href="' . $p . '\.php#([^"]*)"/', 'href="' . $p . '#$1"', $html);
        $html = preg_replace('/href="\/' . $p . '\.php"/', 'href="/' . $p . '"', $html);
        $html = preg_replace('/href="\/' . $p . '\.php#([^"]*)"/', 'href="/' . $p . '#$1"', $html);
    }

    // 4. Clean canonical & og:url from .php
    $html = preg_replace('/([a-zA-Z0-9_-]+)\.php(?="|\/|#)/', '$1', $html);

    return $html;
}

foreach ($pages as $phpFile => $htmlFile) {
    $cmd = '"C:\\xampp\\php\\php.exe" "' . $dir . DIRECTORY_SEPARATOR . $phpFile . '"';
    $output = shell_exec($cmd);
    if ($output !== null && strlen($output) > 100) {
        $cleanHtml = clean_static_links($output);
        file_put_contents($dir . DIRECTORY_SEPARATOR . $htmlFile, $cleanHtml);
        echo "Compiled {$phpFile} -> {$htmlFile} (" . strlen($cleanHtml) . " bytes, clean URLs)\n";
    } else {
        echo "WARNING: Failed or empty output for {$phpFile}\n";
    }
}
