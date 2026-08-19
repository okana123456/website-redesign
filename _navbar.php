<?php
$activePage = $activePage ?? '';
$navFixed = $navFixed ?? false;

if (!function_exists('rrda_nav_active')) {
    function rrda_nav_active($target, $activePage) {
        return $target === $activePage ? ' active' : '';
    }
}

$researchActive = in_array($activePage, ['services', 'field-services'], true);
$insightsActive = in_array($activePage, ['data', 'economic-insights'], true);
$systemsActive = in_array($activePage, ['systems'], true);
$companyActive = in_array($activePage, ['about', 'jobs', 'contact'], true);
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-4 px-lg-5 py-3 py-lg-0<?= $navFixed ? ' fixed-top' : '' ?>">
    <a href="index.php" class="navbar-brand p-0">
        <h1 class="text-uppercase text-primary">Rudder Research & Data Analytics</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="index.php" class="nav-item nav-link<?= rrda_nav_active('home', $activePage) ?>">Home</a>
            <div class="nav-item dropdown">
                <a href="services.php" class="nav-link dropdown-toggle<?= $researchActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Research Services</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="services.php" class="dropdown-item">All Research Services</a>
                    <a href="field-research-agency-services-kenya.php" class="dropdown-item">Field Research & Agency Services</a>
                    <a href="market-research-company-kenya.php" class="dropdown-item">Market Research</a>
                    <a href="focus-group-discussions-kenya.php" class="dropdown-item">Focus Group Discussions</a>
                    <a href="on-demand-field-enumerators-capi-odk-kenya.php" class="dropdown-item">Field Enumerators & CAPI/ODK</a>
                    <a href="mystery-shopping-store-audits-kenya.php" class="dropdown-item">Mystery Shopping & Store Audits</a>
                    <a href="retail-competitor-price-intelligence-kenya.php" class="dropdown-item">Retail Price Intelligence</a>
                    <a href="data-analytics-company-kenya.php" class="dropdown-item">Data Analytics</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="data.php" class="nav-link dropdown-toggle<?= $insightsActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Economic Insights</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="data.php" class="dropdown-item">Economic Data Dashboard</a>
                    <a href="data.php#county" class="dropdown-item">County Market Profiles</a>
                    <a href="data.php#trade" class="dropdown-item">Trade & Import Intelligence</a>
                    <a href="data.php#prices" class="dropdown-item">Retail Price Intelligence</a>
                    <a href="data.php#data-pools" class="dropdown-item">Published Data Pools</a>
                    <a href="contact.php" class="dropdown-item">Request Custom Data</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="services.php#ruddertrack" class="nav-link dropdown-toggle<?= $systemsActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">RudderTrack Systems</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="pos-system-kenya.php" class="dropdown-item">Point of Sale & Inventory</a>
                    <a href="loan-management-system-kenya.php" class="dropdown-item">Loan Management System</a>
                    <a href="hospital-management-system-kenya.php" class="dropdown-item">Hospital Management System</a>
                    <a href="school-management-system-kenya.php" class="dropdown-item">School Management System</a>
                    <a href="services.php#ruddertrack" class="dropdown-item">View All Systems</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="services.php#industries" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Industries</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="services.php#industries" class="dropdown-item">SACCOs & Microfinance</a>
                    <a href="services.php#industries" class="dropdown-item">NGOs & Development Partners</a>
                    <a href="services.php#industries" class="dropdown-item">Retail & Distribution</a>
                    <a href="services.php#industries" class="dropdown-item">Schools & Training Institutions</a>
                    <a href="services.php#industries" class="dropdown-item">Healthcare Providers</a>
                    <a href="services.php#industries" class="dropdown-item">Agriculture & Cooperatives</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="blog.php" class="nav-link dropdown-toggle<?= rrda_nav_active('blog', $activePage) ?>" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="blog.php" class="dropdown-item">Research Blog</a>
                    <a href="data.php" class="dropdown-item">Data Tools & Rankings</a>
                    <a href="blog-sitemap.php" class="dropdown-item">Blog Sitemap</a>
                    <a href="contact.php" class="dropdown-item">FAQs & Enquiries</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="about.php" class="nav-link dropdown-toggle<?= $companyActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="about.php" class="dropdown-item">About Rudder</a>
                    <a href="jobs.php" class="dropdown-item">Careers</a>
                    <a href="contact.php" class="dropdown-item">Contact</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link nav-quote">Request a Quote</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
