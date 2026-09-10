<?php
$pageTitle = 'Immigration Guidance | Gravity Immigration & Travels';
$pageDescription = 'Structured guidance on PR and long-term immigration pathways based on your profile and goals.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Immigration Guidance</h1>
        <p>Practical, honest guidance on PR and long-term immigration pathways.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Immigration</div></div>

<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items:center;">
            <div>
                <h2>Is immigration the right path for you?</h2>
                <p>Immigration pathways vary widely by country, occupation, age and family situation. Rather than a one-size-fits-all promise, we assess your profile honestly and lay out which pathways are realistically open to you, and what each requires.</p>
                <p>This includes points-based skilled migration programs, family sponsorship routes, and employer-sponsored pathways where applicable, in destinations we actively track.</p>
                <div class="disclaimer-box">
                    Immigration rules change frequently and vary by country. Final decisions are made solely by the relevant government authority. Gravity provides guidance and application support and does not guarantee any outcome.
                </div>
            </div>
            <div>
                <div class="grid" style="gap:16px;">
                    <div class="service-card">
                        <h3>Profile Evaluation</h3>
                        <p>An honest read of which pathways suit your education, work experience and family situation.</p>
                    </div>
                    <div class="service-card">
                        <h3>Documentation Support</h3>
                        <p>Help organising and preparing the paperwork each pathway requires.</p>
                    </div>
                    <div class="service-card">
                        <h3>Ongoing Case Support</h3>
                        <p>Updates and support through each stage of a long-running application.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Talk to an immigration counsellor</h2>
            <p>Share your background and goal country — we'll tell you honestly what pathways are realistic for you.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Talk to an Expert';
            $formSourcePage = 'immigration_page';
            $formServiceDefault = 'PR / Immigration Pathways';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
