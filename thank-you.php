<?php
require_once __DIR__ . '/includes/bootstrap.php';

$page_title = 'Thank You | Brocus IT Solutions';
$page_desc  = 'Thank you for reaching out to Brocus IT Solutions. Your request has been received and an advisor will contact you shortly.';

require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<section style="min-height: 70vh; display: flex; align-items: center; justify-content: center; padding: 6rem 1.5rem; background: linear-gradient(160deg, #fdfcff 0%, #f5f0ff 50%, #eff6ff 100%); position: relative; overflow: hidden;">
    <!-- Background accents -->
    <div style="position: absolute; top: -120px; right: -120px; width: 500px; height: 500px; border-radius: 50%; background: radial-gradient(circle, #f0ebff 0%, transparent 70%); pointer-events: none;"></div>
    <div style="position: absolute; bottom: -80px; left: -80px; width: 360px; height: 360px; border-radius: 50%; background: radial-gradient(circle, #ebf5ff 0%, transparent 70%); pointer-events: none;"></div>

    <div style="background: #fff; border: 1px solid #E2E8F0; box-shadow: 0 20px 40px rgba(15,23,42,.06); border-radius: 24px; padding: 4rem 2rem; max-width: 600px; width: 100%; text-align: center; position: relative; z-index: 1;">
        
        <!-- Success Icon -->
        <div style="width: 80px; height: 80px; background: rgba(16, 185, 129, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
            <i class="fas fa-check" style="font-size: 2.5rem; color: #10B981;"></i>
        </div>

        <h1 style="font-family: var(--font-display); font-size: 2.5rem; font-weight: 800; color: #0F172A; margin-bottom: 1rem; line-height: 1.2;">
            Thank You!
        </h1>
        
        <p style="font-size: 1.1rem; color: #475569; margin-bottom: 2rem; line-height: 1.6;">
            Your request has been successfully received. One of our independent advisors will review your details and get back to you within <strong>one business day</strong>.
        </p>

        <div style="background: rgba(124, 58, 237, 0.05); border: 1px solid rgba(124, 58, 237, 0.1); border-radius: 12px; padding: 1.5rem; margin-bottom: 2.5rem; text-align: left;">
            <h3 style="font-size: .95rem; font-weight: 700; color: #6D28D9; margin-bottom: .75rem;">What happens next?</h3>
            <div style="display: flex; align-items: flex-start; gap: .75rem; margin-bottom: .5rem; font-size: .9rem; color: #475569;">
                <i class="fas fa-phone" style="color: #7C3AED; font-size: .8rem; margin-top: .25rem;"></i>
                <span>We will reach out to the phone number or email you provided.</span>
            </div>
            <div style="display: flex; align-items: flex-start; gap: .75rem; font-size: .9rem; color: #475569;">
                <i class="fas fa-shield-alt" style="color: #7C3AED; font-size: .8rem; margin-top: .25rem;"></i>
                <span>We'll discuss your needs, answer your questions, and offer honest, zero-pressure advice.</span>
            </div>
        </div>

        <a href="<?= url() ?>" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: .75rem; padding: 1rem 2rem; font-size: 1rem; border-radius: 12px; background: linear-gradient(135deg, #7C3AED, #4F46E5); box-shadow: 0 8px 20px rgba(124, 58, 237, 0.25); text-decoration: none;">
            <i class="fas fa-home"></i> Return to Homepage
        </a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
