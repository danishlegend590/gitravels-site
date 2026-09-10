<?php
$pageTitle = 'Visa Services | Gravity Immigration & Travels';
$pageDescription = 'Tourist, business, student, work, family and PR visa guidance — documentation, applications and interview preparation.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Visa Services</h1>
        <p>Structured guidance across every major visa category, with honest advice at every step.</p>
    </div>
</div>
<div class="breadcrumb"><div class="container"><a href="/index.php">Home</a> / Visa Services</div></div>

<section class="section">
    <div class="container">
        <div class="grid grid-3">
            <?php
            $visaTypes = [
                ['Tourist / Visitor Visa', 'For leisure travel, family visits and short personal trips.'],
                ['Business Visa', 'For meetings, conferences, trade visits and business travel.'],
                ['Student Visa', 'Backed by our Study Abroad team for applications, SOPs and interviews.'],
                ['Work Visa', 'Guidance on employer-sponsored and skilled work visa categories.'],
                ['Family / Dependent Visa', 'For spouses, children and dependents joining family abroad.'],
                ['Transit Visa', 'Support for short stopovers en route to your final destination.'],
                ['PR / Immigration Pathways', 'Long-term pathways evaluated against your profile and goals.'],
                ['Medical / Special Purpose Visa', 'Where applicable, guidance for medical travel and special cases.'],
                ['Visa Refusal / Re-application', 'Review of past refusals and a stronger plan for re-application.'],
            ];
            foreach ($visaTypes as [$title, $desc]): ?>
                <div class="service-card">
                    <h3><?= e($title) ?></h3>
                    <p><?= e($desc) ?></p>
                    <a href="#enquiry" class="card-link">Check Eligibility</a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="disclaimer-box" style="margin-top:36px;">
            Country-specific requirements and fees change from time to time. We share accurate, up-to-date information at the time of consultation. Final visa decisions are made solely by the relevant government / embassy authority — Gravity does not guarantee approval.
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container hero-grid" style="align-items:center;">
        <div>
            <h2>Not sure which visa fits your plan?</h2>
            <p>Share a few details about your travel, work or study goal and our counsellor will recommend the right category and next steps.</p>
        </div>
        <div id="enquiry">
            <?php
            $formHeading = 'Check Visa Eligibility';
            $formNote = 'Free, no-obligation assessment.';
            $formSourcePage = 'visa_services_page';
            require __DIR__ . '/includes/enquiry-form.php';
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
