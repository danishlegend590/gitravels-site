<?php
$pageTitle = 'Study Abroad | Gravity Immigration & Travels';
$pageDescription = 'Profile assessment, university selection, applications, scholarships and student visa guidance for UK, USA, Canada, Australia and more.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Study Abroad</h1>
        <p>From profile assessment to pre-departure — a complete study abroad journey.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Study Abroad</div></div>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>Destinations we cover</h2>
        </div>
        <div class="grid grid-4">
            <?php
            $countries = ['UK', 'USA', 'Canada', 'Australia', 'Germany', 'France / Europe', 'Dubai / UAE', 'Ireland', 'New Zealand', 'MBBS Abroad'];
            foreach ($countries as $country): ?>
                <div class="country-card">
                    <div>
                        <div class="country-name"><?= e($country) ?></div>
                        <div class="country-tag">Universities &amp; Visa Guidance</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>What our study abroad service includes</h2>
        </div>
        <div class="grid grid-4">
            <?php
            $services = [
                'Profile Assessment', 'Course & University Selection', 'Application Support', 'SOP / Documentation Guidance',
                'Scholarship Guidance', 'Student Visa Guidance', 'Pre-departure Support', 'Flights & Accommodation Assistance',
            ];
            foreach ($services as $service): ?>
                <div class="service-card">
                    <h3 style="font-size:1rem;"><?= e($service) ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Start with a free profile assessment</h2>
            <p>Tell us your academic background and target country — we'll map out realistic university options and next steps.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Study Abroad Profile Assessment';
            $formNote = 'Get matched with the right universities.';
            $formSourcePage = 'study_abroad_page';
            $formServiceDefault = 'Study Abroad Counselling';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
