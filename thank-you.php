<?php
$pageTitle = 'Thank You | Gravity Immigration & Travels';
require_once __DIR__ . '/includes/header.php';
$flash = get_flash();
?>

<section class="section" style="text-align:center; padding-top:100px; padding-bottom:100px;">
    <div class="container">
        <div class="hero-eyebrow-line" style="margin:0 auto 22px; background:var(--gold);"></div>
        <h1>Thank You</h1>
        <?php if ($flash): ?>
            <p style="font-size:1.15rem; max-width:52ch; margin:0 auto 30px; color:var(--slate);"><?= e($flash['message']) ?></p>
        <?php else: ?>
            <p style="font-size:1.15rem; max-width:52ch; margin:0 auto 30px; color:var(--slate);">Your enquiry has been received. Our team will get back to you shortly.</p>
        <?php endif; ?>
        <div class="hero-actions" style="justify-content:center;">
            <a href="/index.php" class="btn btn-navy">Back to Home</a>
            <a href="<?= e(whatsapp_link('Hi Gravity, I just submitted an enquiry on your website.')) ?>" target="_blank" rel="noopener" class="btn btn-gold">Chat on WhatsApp</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
