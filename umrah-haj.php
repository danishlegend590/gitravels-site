<?php
$pageTitle = 'Umrah & Haj Packages | Gravity Immigration & Travels';
$pageDescription = 'Umrah and Haj packages with visa, flights, accommodation and guided support.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Umrah &amp; Haj Packages</h1>
        <p>Guided, respectful support for your pilgrimage journey.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Umrah &amp; Haj</div></div>

<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items:center;">
            <div>
                <h2>What's included</h2>
                <p>Our Umrah and Haj packages are organised around comfort and clarity, so you can focus on the pilgrimage itself.</p>
                <ul style="color:var(--slate); line-height:1.9;">
                    <li>Visa processing and documentation</li>
                    <li>Flight booking</li>
                    <li>Hotel accommodation near the Haramain</li>
                    <li>Ground transportation and transfers</li>
                    <li>Guided group support</li>
                </ul>
            </div>
            <div class="grid" style="gap:16px;">
                <div class="package-card">
                    <div class="package-media"></div>
                    <div class="package-body">
                        <h3>Umrah Package</h3>
                        <p>Flexible duration options with hotel stays close to the Haram.</p>
                    </div>
                </div>
                <div class="package-card">
                    <div class="package-media"></div>
                    <div class="package-body">
                        <h3>Haj Package</h3>
                        <p>Seasonal packages — enquire early as slots and dates are limited.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Enquire about Umrah or Haj</h2>
            <p>Let us know your preferred dates and group size.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Talk to an Expert';
            $formSourcePage = 'umrah_haj_page';
            $formServiceDefault = 'Umrah & Haj Package';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
