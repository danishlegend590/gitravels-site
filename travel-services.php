<?php
$pageTitle = 'Travel Services | Gravity Immigration & Travels';
$pageDescription = 'Group and family travel, corporate travel management, and complete travel support.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Travel Services</h1>
        <p>Support for every kind of journey — solo, family, group or corporate.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Travel Services</div></div>

<section class="section">
    <div class="container">
        <div class="grid grid-3">
            <div class="service-card">
                <h3>Group / Family Travel</h3>
                <p>Custom itineraries and group rates for family trips, reunions and celebrations.</p>
            </div>
            <div class="service-card">
                <h3>Corporate Travel</h3>
                <p>Managed travel bookings and coordination for business trips and teams.</p>
            </div>
            <div class="service-card">
                <h3>Travel Insurance</h3>
                <p>Coverage options for domestic and international trips.</p>
            </div>
            <div class="service-card">
                <h3>Passport Assistance</h3>
                <p>Guidance on new passport applications, renewals and corrections.</p>
            </div>
            <div class="service-card">
                <h3>Forex / Currency Assistance</h3>
                <p>Help arranging foreign currency for your trip.</p>
            </div>
            <div class="service-card">
                <h3>Railway &amp; Bus Booking</h3>
                <p>Booking support for domestic rail and bus travel.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Need help planning your travel?</h2>
            <p>Tell us what you need and we'll take it from there.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Talk to an Expert';
            $formSourcePage = 'travel_services_page';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
