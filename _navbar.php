<?php
$activePage = $activePage ?? '';
$navFixed = $navFixed ?? false;

if (!function_exists('rrda_nav_active')) {
    function rrda_nav_active($target, $activePage) {
        return $target === $activePage ? ' active' : '';
    }
}

$servicesActive = in_array($activePage, ['services', 'field-services'], true);
$dataActive = in_array($activePage, ['data', 'economic-insights'], true);
$systemsActive = in_array($activePage, ['systems'], true);
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-3 px-lg-4 py-3 py-lg-0<?= $navFixed ? ' fixed-top' : '' ?>">
    <a href="index.php" class="navbar-brand p-0">
        <h1 class="text-uppercase rrda-brand-title">Rudder Research and Data Analytics LTD</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link<?= rrda_nav_active('home', $activePage) ?>">Home</a>
            <a href="about.php" class="nav-item nav-link<?= rrda_nav_active('about', $activePage) ?>">About</a>
            <div class="nav-item dropdown">
                <a href="services.php" class="nav-link dropdown-toggle<?= $servicesActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="services.php" class="dropdown-item">All Services</a>
                    <a href="field-research-agency-services-kenya.php" class="dropdown-item">Field Research</a>
                    <a href="market-research-company-kenya.php" class="dropdown-item">Market Research</a>
                    <a href="focus-group-discussions-kenya.php" class="dropdown-item">Focus Group Discussions</a>
                    <a href="data-analytics-company-kenya.php" class="dropdown-item">Data Analytics</a>
                    <a href="on-demand-field-enumerators-capi-odk-kenya.php" class="dropdown-item">Enumerators & CAPI/ODK</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="data.php" class="nav-link dropdown-toggle<?= $dataActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="data.php" class="dropdown-item">Data Dashboard</a>
                    <a href="data.php#products" class="dropdown-item">Data Products</a>
                    <a href="data.php#county" class="dropdown-item">County Profiles</a>
                    <a href="data.php#trade" class="dropdown-item">Import & Export Data</a>
                    <a href="data.php#data-pools" class="dropdown-item">Rankings & Directories</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="services.php#ruddertrack" class="nav-link dropdown-toggle<?= $systemsActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Systems</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="pos-system-kenya.php" class="dropdown-item">POS & Inventory</a>
                    <a href="loan-management-system-kenya.php" class="dropdown-item">Loan Management</a>
                    <a href="hospital-management-system-kenya.php" class="dropdown-item">Hospital & Clinic System</a>
                    <a href="school-management-system-kenya.php" class="dropdown-item">School Management</a>
                    <a href="services.php#ruddertrack" class="dropdown-item">View All Systems</a>
                </div>
            </div>
            <a href="blog.php" class="nav-item nav-link<?= rrda_nav_active('blog', $activePage) ?>">Blog</a>
            <a href="jobs.php" class="nav-item nav-link<?= rrda_nav_active('jobs', $activePage) ?>">Careers</a>
            <a href="contact.php" class="nav-item nav-link<?= rrda_nav_active('contact', $activePage) ?>">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
