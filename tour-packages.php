<?php
$pageTitle = 'Tour Packages | Gravity Immigration & Travels';
$pageDescription = 'Domestic and international tour packages with itinerary, hotel category, transfers and sightseeing included.';
require_once __DIR__ . '/includes/header.php';

$pdo = getDB();
$domesticPackages = $pdo->query("SELECT * FROM packages WHERE category='domestic' AND status='active' ORDER BY sort_order ASC, created_at DESC")->fetchAll();
$internationalPackages = $pdo->query("SELECT * FROM packages WHERE category='international' AND status='active' ORDER BY sort_order ASC, created_at DESC")->fetchAll();

function render_package_card(array $pkg): void
{
    ?>
    <div class="package-card">
        <?php if (!empty($pkg['image_path'])): ?>
            <div class="package-media" style="background-image:url('/<?= e($pkg['image_path']) ?>'); background-size:cover; background-position:center;"></div>
        <?php else: ?>
            <div class="package-media"></div>
        <?php endif; ?>
        <div class="package-body">
            <h3><?= e($pkg['title']) ?></h3>
            <div class="package-meta">
                <span><?= e($pkg['duration']) ?></span>
                <span><?= e($pkg['hotel_category'] ?: ucfirst($pkg['category'])) ?></span>
            </div>
            <p><?= e($pkg['short_description'] ?: $pkg['destination']) ?></p>
            <?php if ($pkg['price'] !== null): ?>
                <p style="color:var(--navy); font-weight:700; margin-bottom:10px;">Starting ₹<?= number_format((float) $pkg['price']) ?> / person</p>
            <?php endif; ?>
            <a href="#enquiry" class="card-link">Enquire Now</a>
        </div>
    </div>
    <?php
}
?>

<div class="page-hero">
    <div class="container">
        <h1>Tour Packages</h1>
        <p>Thoughtfully planned domestic and international holidays.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Tour Packages</div></div>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>Domestic tours</h2>
        </div>
        <?php if (empty($domesticPackages)): ?>
            <p>Domestic packages are being updated. Please check back soon, or <a href="#enquiry">enquire directly</a> and our team will share current options.</p>
        <?php else: ?>
            <div class="grid grid-3">
                <?php foreach ($domesticPackages as $pkg) render_package_card($pkg); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>International tours</h2>
        </div>
        <?php if (empty($internationalPackages)): ?>
            <p>International packages are being updated. Please check back soon, or <a href="#enquiry">enquire directly</a> and our team will share current options.</p>
        <?php else: ?>
            <div class="grid grid-3">
                <?php foreach ($internationalPackages as $pkg) render_package_card($pkg); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="section">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Plan your trip with us</h2>
            <p>Tell us your destination, dates and group size — we'll send a custom quote.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Plan My Trip';
            $formSourcePage = 'tour_packages_page';
            $formServiceDefault = 'Tour Package';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
