<?php
/**
 * Floating Widgets Template - Dehradun Defence College
 * Floating WhatsApp, Scroll To Top, Live Enroll Popups & Mobile Sticky Action Bar
 */
require_once __DIR__ . '/../config.php';
?>

<!-- 1. Floating WhatsApp Button with Eye-Catching Pulse -->
<a href="<?php echo WHATSAPP_LINK; ?>" class="floating-whatsapp" target="_blank" rel="noopener" aria-label="Chat with Admissions on WhatsApp" title="Chat on WhatsApp">
    <span class="whatsapp-pulse-ring"></span>
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
    </svg>
</a>

<!-- 2. Scroll to Top Floating Button -->
<button type="button" class="scroll-to-top" aria-label="Scroll to Top of Page" title="Back to Top">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</button>

<!-- 3. Eye-Catching Recent Enrollment Live Popups ("Side Enroll Popups") -->
<div id="liveEnrollPopup" class="live-enroll-popup" role="status" aria-live="polite">
    <div class="live-enroll-card">
        <button type="button" class="live-enroll-close" id="closeEnrollPopup" aria-label="Dismiss Notification">&times;</button>
        <div class="live-enroll-avatar-wrap">
            <div class="live-enroll-avatar" id="enrollAvatar">🎖️</div>
            <span class="live-pulse-dot"></span>
        </div>
        <div class="live-enroll-info">
            <div class="live-enroll-header">
                <span class="live-enroll-status">Verified Admission</span>
                <span class="live-enroll-time" id="enrollTime">Just now</span>
            </div>
            <div class="live-enroll-name" id="enrollName">Aman Sharma (Dehradun)</div>
            <div class="live-enroll-action" id="enrollAction">Enrolled in NDA Foundation 2026 Batch</div>
        </div>
    </div>
</div>

<!-- 4. Mobile Bottom Sticky Action Bar with 3 Quick Actions -->
<div class="mobile-sticky-bar" id="mobileStickyBar" aria-label="Mobile Contact Bar">
    <div class="mobile-sticky-buttons">
        <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="mobile-btn-call" aria-label="Call Admissions Desk">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>Call</span>
        </a>
        <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener" class="mobile-btn-whatsapp" aria-label="Chat on WhatsApp">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            <span>WhatsApp</span>
        </a>
        <button type="button" class="mobile-btn-enquire open-enquiry-modal" data-course="Mobile Sticky Enquiry" aria-label="Register for Admission">
            <span>Enquire</span>
        </button>
    </div>
</div>
