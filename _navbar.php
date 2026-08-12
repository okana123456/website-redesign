<?php
$activePage = $activePage ?? '';
$navFixed = $navFixed ?? false;

if (!function_exists('rrda_nav_active')) {
    function rrda_nav_active($target, $activePage) {
        return $target === $activePage ? ' active' : '';
    }
}

$servicesActive = in_array($activePage, ['services', 'field-services'], true);
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0<?= $navFixed ? ' fixed-top' : '' ?>">
    <a href="index.php" class="navbar-brand p-0">
        <h1 class="text-uppercase text-primary">Rudder Research & Data Analytics</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="index.php" class="nav-item nav-link<?= rrda_nav_active('home', $activePage) ?>">Home</a>
            <a href="about.php" class="nav-item nav-link<?= rrda_nav_active('about', $activePage) ?>">About</a>
            <div class="nav-item dropdown">
                <a href="services.php" class="nav-link dropdown-toggle<?= $servicesActive ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                <div class="dropdown-menu dropdown-menu-end rrda-services-menu">
                    <a href="services.php" class="dropdown-item">All Services</a>
                    <a href="field-research-agency-services-kenya.php" class="dropdown-item">Field Research & Agency Services</a>
                    <div class="dropdown-divider"></div>
                    <a href="focus-group-discussions-kenya.php" class="dropdown-item">Focus Group Discussions</a>
                    <a href="market-research-company-kenya.php" class="dropdown-item">Market Research</a>
                    <a href="data-analytics-company-kenya.php" class="dropdown-item">Data Analytics</a>
                    <a href="pos-system-kenya.php" class="dropdown-item">POS System</a>
                    <a href="hospital-management-system-kenya.php" class="dropdown-item">Hospital Management System</a>
                    <a href="school-management-system-kenya.php" class="dropdown-item">School Management System</a>
                    <a href="loan-management-system-kenya.php" class="dropdown-item">Loan Management System</a>
                </div>
            </div>
            <a href="blog.php" class="nav-item nav-link<?= rrda_nav_active('blog', $activePage) ?>">Blog</a>
            <a href="contact.php" class="nav-item nav-link<?= rrda_nav_active('contact', $activePage) ?>">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
