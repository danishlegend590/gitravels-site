<?php
$pageTitle = 'Contact Us | Gravity Immigration & Travels';
$pageDescription = 'Get in touch with Gravity Immigration & Travels for visa, study abroad, immigration and travel enquiries.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We'd love to help plan your next step.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Contact Us</div></div>

<section class="section">
    <div class="container hero-grid" style="align-items:start;">
        <div>
            <h2>Get in touch</h2>
            <p>Call, WhatsApp or drop by — whichever is easiest for you.</p>

            <div style="margin-top:28px;">
                <h3 style="font-size:1rem;">Phone</h3>
                <p><a href="tel:<?= e(SITE_PHONE) ?>"><?= e(SITE_PHONE) ?></a> / <a href="tel:<?= e(SITE_PHONE_ALT) ?>"><?= e(SITE_PHONE_ALT) ?></a></p>
            </div>
            <div>
                <h3 style="font-size:1rem;">Email</h3>
                <p><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></p>
            </div>
            <div>
                <h3 style="font-size:1rem;">WhatsApp</h3>
                <p><a href="<?= e(whatsapp_link('Hi Gravity, I would like to enquire about your services.')) ?>" target="_blank" rel="noopener">Chat with us instantly</a></p>
            </div>
            <div>
                <h3 style="font-size:1rem;">Office Address</h3>
                <p><?= e(SITE_ADDRESS) ?></p>
            </div>

            <div class="disclaimer-box" style="margin-top:24px;">
                For visa-specific queries, please share your target country and travel purpose so our counsellor can prepare before calling you back.
            </div>
        </div>

        <div id="enquiry">
            <?php
            $formHeading = 'Send Us a Message';
            $formNote = 'Fill this out and our team will reach out shortly.';
            $formSourcePage = 'contact_page';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
