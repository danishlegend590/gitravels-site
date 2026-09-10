<?php
$pageTitle = 'Gravity Immigration & Travels | Visa, Study Abroad, Immigration & Tours';
$pageDescription = 'Your one-stop destination for Visa Assistance, Study Abroad, Immigration Guidance and Travel Services.';
require_once __DIR__ . '/includes/header.php';

$formHeading = 'Free Consultation';
$formNote = 'Share a few details and our expert will call you back.';
$formSourcePage = 'homepage_hero';
?>

<section class="hero">
    <div class="container hero-grid">
        <div>
            <div class="hero-eyebrow-line"></div>
            <h1>Your Journey.<br><em>Our Expertise.</em></h1>
            <p class="hero-sub">Visa&nbsp;|&nbsp;Study Abroad&nbsp;|&nbsp;Tours&nbsp;|&nbsp;Flights &amp; Hotels</p>
            <p class="hero-support">Complete immigration, education and travel solutions under one roof — from your first counselling session to the day you land.</p>

            <div class="hero-actions">
                <a href="#enquiry" class="btn btn-gold">Free Consultation</a>
                <a href="/visa-services.php" class="btn btn-outline">Explore Services</a>
            </div>

            <div class="hero-stats">
                <div>
                    <div class="hero-stat-num">10+</div>
                    <div class="hero-stat-label">Visa &amp; Study Categories</div>
                </div>
                <div>
                    <div class="hero-stat-num">15+</div>
                    <div class="hero-stat-label">Study Destinations</div>
                </div>
                <div>
                    <div class="hero-stat-num">1</div>
                    <div class="hero-stat-label">Trusted Desk for Everything</div>
                </div>
            </div>
        </div>

        <div id="enquiry">
            <?php require __DIR__ . '/includes/enquiry-form.php'; ?>
        </div>
    </div>
</section>

<!-- Quick service cards -->
<section class="section">
    <div class="container">
        <div class="section-head-center">
            <div class="hero-eyebrow-line"></div>
            <h2>Everything you need for your next move</h2>
            <p>Whether you're travelling, studying, working or relocating abroad, Gravity brings visa guidance, education counselling and travel planning together.</p>
        </div>

        <div class="grid grid-4">
            <div class="service-card">
                <div class="icon-badge">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 9h18"/></svg>
                </div>
                <h3>Visa Services</h3>
                <p>Tourist, business, student, work, family and PR pathway guidance.</p>
                <a href="/visa-services.php" class="card-link">View Visa Services</a>
            </div>
            <div class="service-card">
                <div class="icon-badge">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19V6a2 2 0 012-2h6l2 2h6v13"/></svg>
                </div>
                <h3>Study Abroad</h3>
                <p>University selection, applications, SOPs, scholarships and student visas.</p>
                <a href="/study-abroad.php" class="card-link">Explore Study Abroad</a>
            </div>
            <div class="service-card">
                <div class="icon-badge">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 4 6 4 9s-1.5 6.3-4 9c-2.5-2.7-4-6-4-9s1.5-6.3 4-9z"/></svg>
                </div>
                <h3>Immigration</h3>
                <p>Structured guidance on PR and long-term immigration pathways.</p>
                <a href="/immigration.php" class="card-link">See Immigration Options</a>
            </div>
            <div class="service-card">
                <div class="icon-badge">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12l18-8-8 18-2-8-8-2z"/></svg>
                </div>
                <h3>Tours &amp; Travel</h3>
                <p>Domestic and international packages, flights, hotels and more.</p>
                <a href="/tour-packages.php" class="card-link">Browse Packages</a>
            </div>
        </div>
    </div>
</section>

<!-- Visa categories -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>Visa categories we assist with</h2>
        </div>
        <div class="grid grid-4">
            <?php
            $visaCategories = [
                'Tourist / Visitor Visa', 'Business Visa', 'Student Visa', 'Work Visa',
                'Family / Dependent Visa', 'Transit Visa', 'PR / Immigration Pathways', 'Visa Refusal Re-application',
            ];
            foreach ($visaCategories as $cat): ?>
                <div class="service-card">
                    <h3 style="font-size:1rem;"><?= e($cat) ?></h3>
                    <a href="/visa-services.php" class="card-link">Learn more</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="disclaimer-box" style="margin-top:30px;">
            Final visa decisions are made solely by the relevant government / embassy authority. Gravity provides guidance and documentation support and does not guarantee visa approval.
        </div>
    </div>
</section>

<!-- Study abroad countries -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>Study abroad destinations</h2>
            <p>Profile assessment, university shortlisting, applications, scholarships and visa guidance for every destination.</p>
        </div>
        <div class="grid grid-4">
            <?php
            $countries = ['UK', 'USA', 'Canada', 'Australia', 'Germany', 'France / Europe', 'Dubai / UAE', 'Ireland', 'New Zealand', 'MBBS Abroad'];
            foreach ($countries as $country): ?>
                <div class="country-card">
                    <div>
                        <div class="country-name"><?= e($country) ?></div>
                        <div class="country-tag">Study &amp; Visa Guidance</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="margin-top:30px;">
            <a href="/study-abroad.php" class="btn btn-navy">View Full Study Abroad Services</a>
        </div>
    </div>
</section>

<!-- Popular tour packages -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>Popular tour packages</h2>
        </div>
        <?php
        $featuredPackages = getDB()->query("SELECT * FROM packages WHERE is_featured=1 AND status='active' ORDER BY sort_order ASC, created_at DESC LIMIT 3")->fetchAll();
        ?>
        <?php if (empty($featuredPackages)): ?>
            <p>Our featured packages are being updated. <a href="/tour-packages.php">View all tour packages &rarr;</a></p>
        <?php else: ?>
            <div class="grid grid-3">
                <?php foreach ($featuredPackages as $pkg): ?>
                    <div class="package-card">
                        <?php if (!empty($pkg['image_path'])): ?>
                            <div class="package-media" style="background-image:url('/<?= e($pkg['image_path']) ?>'); background-size:cover; background-position:center;"></div>
                        <?php else: ?>
                            <div class="package-media"></div>
                        <?php endif; ?>
                        <div class="package-body">
                            <h3><?= e($pkg['title']) ?></h3>
                            <div class="package-meta"><span><?= e($pkg['duration']) ?></span><span><?= e(ucfirst($pkg['category'])) ?></span></div>
                            <p><?= e($pkg['short_description'] ?: $pkg['destination']) ?></p>
                            <a href="/tour-packages.php" class="card-link">View Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div style="margin-top:30px;">
                <a href="/tour-packages.php" class="btn btn-navy">View All Packages</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Why choose us -->
<section class="section section-navy">
    <div class="container">
        <div class="section-head">
            <div class="hero-eyebrow-line"></div>
            <h2>Why choose Gravity</h2>
        </div>
        <div class="grid grid-4">
            <div class="pillar">
                <h3 style="color:var(--white);">Expert Guidance</h3>
                <p>Profile-based counselling and practical, honest support at every step.</p>
            </div>
            <div class="pillar">
                <h3 style="color:var(--white);">Transparent Process</h3>
                <p>Clear service scope, documentation checklists and open communication.</p>
            </div>
            <div class="pillar">
                <h3 style="color:var(--white);">End-to-End Support</h3>
                <p>From counselling and application to travel planning and departure.</p>
            </div>
            <div class="pillar">
                <h3 style="color:var(--white);">One Trusted Desk</h3>
                <p>Visa, education and travel support brought together in one place.</p>
            </div>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="section">
    <div class="container">
        <div class="section-head-center">
            <div class="hero-eyebrow-line"></div>
            <h2>How it works</h2>
        </div>
        <div class="grid grid-3">
            <div class="step">
                <div class="step-num">1</div>
                <div>
                    <h3>Tell us your plan</h3>
                    <p>Share your goal — visa, study, immigration or travel — through the enquiry form or WhatsApp.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-num">2</div>
                <div>
                    <h3>Get expert guidance</h3>
                    <p>Our counsellor reviews your profile and lays out the right options and documentation.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-num">3</div>
                <div>
                    <h3>Move forward with support</h3>
                    <p>We stay with you through application, travel booking and pre-departure preparation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head-center">
            <div class="hero-eyebrow-line"></div>
            <h2>What our clients say</h2>
        </div>
        <div class="grid grid-3">
            <div class="testimonial">
                <p>"The team explained every step of my student visa application clearly. I always knew what was happening."</p>
                <div class="name">Ritika Sharma, Student Visa Client</div>
            </div>
            <div class="testimonial">
                <p>"Booked our family trip to Kashmir through Gravity — well planned itinerary and smooth support throughout."</p>
                <div class="name">Amit Verma, Tour Package Client</div>
            </div>
            <div class="testimonial">
                <p>"Honest advice on my work visa options, without any false promises. That mattered a lot to me."</p>
                <div class="name">Farhan Ali, Work Visa Client</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
<section class="section">
    <div class="container" style="max-width:820px;">
        <div class="section-head-center">
            <div class="hero-eyebrow-line"></div>
            <h2>Frequently asked questions</h2>
        </div>

        <details class="faq-item">
            <summary>Can Gravity guarantee my visa will be approved?</summary>
            <div class="faq-answer">No agency can guarantee visa approval. Final decisions rest solely with the relevant government or embassy authority. We help you build the strongest possible application.</div>
        </details>
        <details class="faq-item">
            <summary>Do you help with both study abroad and PR pathways?</summary>
            <div class="faq-answer">Yes. We support student visas as well as longer-term PR and immigration pathways where applicable, depending on the destination country's current policy.</div>
        </details>
        <details class="faq-item">
            <summary>Can you also plan family or group holidays?</summary>
            <div class="faq-answer">Yes, alongside visa and immigration services we plan domestic and international tour packages, flights, hotels and group travel.</div>
        </details>
        <details class="faq-item">
            <summary>How quickly will someone contact me after I submit an enquiry?</summary>
            <div class="faq-answer">Our team typically responds within one business day. For faster contact, use the WhatsApp button on this page.</div>
        </details>
    </div>
</section>

<div class="cta-band">
    <div class="container">
        <h2>Ready to start your journey?</h2>
        <p>Talk to our team today — visa, study abroad or travel, we'll help you plan the next step.</p>
        <a href="#enquiry" class="btn btn-gold">Get Free Consultation</a>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
