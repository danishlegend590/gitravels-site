<?php
$pageTitle = 'Flights & Hotels | Gravity Immigration & Travels';
$pageDescription = 'Domestic and international flight booking, hotel booking, travel insurance and airport transfers.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Flights &amp; Hotels</h1>
        <p>Booking support and the small details that make travel smoother.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Flights &amp; Hotels</div></div>

<section class="section">
    <div class="container">
        <div class="grid grid-4">
            <?php
            $items = [
                'Domestic & International Flight Booking', 'Hotel Booking', 'Travel Insurance', 'Passport Assistance',
                'Forex / Currency Assistance', 'Railway & Bus Booking', 'Airport Transfers', 'Corporate Travel',
            ];
            foreach ($items as $item): ?>
                <div class="service-card">
                    <h3 style="font-size:1rem;"><?= e($item) ?></h3>
                    <a href="#enquiry" class="card-link">Get a Quote</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Get a flight or hotel quote</h2>
            <p>Share your travel dates and destination — we'll get back with competitive options.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Get Flight & Hotel Quote';
            $formSourcePage = 'flights_hotels_page';
            $formServiceDefault = 'Flights & Hotels';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
