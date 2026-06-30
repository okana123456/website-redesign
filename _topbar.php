<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <!-- Added .php page links here -->
                    <a class="text-body py-2 pe-3 border-end" href="faq.php"><small>FAQs</small></a>
                    <a class="text-body py-2 px-3 border-end" href="support.php"><small>Support</small></a>
                    <a class="text-body py-2 px-3 border-end" href="privacy.php"><small>Privacy</small></a>
                    <a class="text-body py-2 px-3 border-end" href="policy.php"><small>Policy</small></a>
                    <!-- Updated to match the subdomain used in your main navbar -->
                    <a class="text-body py-2 ps-3" href="https://www.courses.rudderdatanalytics.co.ke/" target="_blank"><small>Courses/Training</small></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0">
                            <i class="fa fa-envelope-open me-2"></i>
                            <!-- Made the email clickable -->
                            <a href="mailto:admin@rudderdatanalytics.co.ke" class="text-white">admin@rudderdatanalytics.co.ke</a>
                        </p>
                    </div>
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0">
                            <i class="fa fa-phone-alt me-2"></i>
                            <!-- Made the phone number clickable -->
                            <a href="tel:+254792719505" class="text-white">+254792719505</a>
                        </p>
                    </div>
                    <!-- Date/Time Section -->
                    <div class="py-2">
                        <p class="m-0" id="currentDateTime"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
</div>

<!-- JavaScript to update date & time -->
<script>
  function updateDateTime() {
    const now = new Date();

    // Format components with leading zeros if needed
    const day = String(now.getDate()).padStart(2, '0');
    const month = String(now.getMonth() + 1).padStart(2, '0'); // months are 0-based
    const year = now.getFullYear();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    // e.g. "DD/MM/YYYY HH:MM:SS"
    const formatted = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;

    // Update the text of our HTML element
    document.getElementById('currentDateTime').textContent = formatted;
  }

  // Update date/time once at page load
  updateDateTime();
  // Update every second
  setInterval(updateDateTime, 1000);
</script>