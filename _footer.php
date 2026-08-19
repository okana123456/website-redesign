<div class="container-fluid p-5" style="background:#f3525a;">
    <div class="row g-4 align-items-center justify-content-center">
        <div class="col-lg-5 text-center text-lg-start">
            <h2 class="text-white mb-2" style="font-size:1.35rem;">Get Rudder insights in your inbox</h2>
            <p class="mb-0 text-white-50">Research notes, data product updates and practical market intelligence for Kenya.</p>
        </div>
        <div class="col-lg-5">
            <form id="subscribeForm" class="mx-auto">
                <div class="input-group">
                    <input type="email" name="email" id="emailInput" class="form-control border-0 p-3" placeholder="Your email address" required>
                    <button type="submit" class="btn btn-dark px-4">Subscribe</button>
                </div>
                <div id="subscribeMsg" class="mt-3"></div>
            </form>
        </div>
    </div>
</div>
<script>
document.getElementById("subscribeForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const email = document.getElementById("emailInput").value;
    fetch("subscribe.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "email=" + encodeURIComponent(email)
    })
    .then(response => response.text())
    .then(data => {
        const msg = document.getElementById("subscribeMsg");
        msg.textContent = data;
        msg.className = "mt-3 text-white";
        document.getElementById("emailInput").value = "";
    })
    .catch(() => {
        const msg = document.getElementById("subscribeMsg");
        msg.textContent = "Something went wrong. Please try again.";
        msg.className = "mt-3 text-white";
    });
});
</script>

<footer class="container-fluid bg-dark text-secondary p-5">
    <div class="row g-5 justify-content-center">
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4" style="font-size:1.15rem;">Research Services</h3>
            <div class="d-flex flex-column">
                <a class="text-secondary mb-2" href="field-research-agency-services-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Field Research Services</a>
                <a class="text-secondary mb-2" href="market-research-company-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Market Research</a>
                <a class="text-secondary mb-2" href="focus-group-discussions-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Focus Group Discussions</a>
                <a class="text-secondary mb-2" href="data-analytics-company-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Data Analytics</a>
                <a class="text-secondary" href="on-demand-field-enumerators-capi-odk-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Enumerators & CAPI/ODK</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4" style="font-size:1.15rem;">Economic Insights</h3>
            <div class="d-flex flex-column">
                <a class="text-secondary mb-2" href="data.php"><i class="bi bi-arrow-right text-primary me-2"></i>Data Dashboard</a>
                <a class="text-secondary mb-2" href="data.php#county"><i class="bi bi-arrow-right text-primary me-2"></i>County Market Profiles</a>
                <a class="text-secondary mb-2" href="data.php#trade"><i class="bi bi-arrow-right text-primary me-2"></i>Import & Export Intelligence</a>
                <a class="text-secondary mb-2" href="data.php#data-pools"><i class="bi bi-arrow-right text-primary me-2"></i>Ranked Data Pools</a>
                <a class="text-secondary" href="blog.php"><i class="bi bi-arrow-right text-primary me-2"></i>Research Blog</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4" style="font-size:1.15rem;">RudderTrack Systems</h3>
            <div class="d-flex flex-column">
                <a class="text-secondary mb-2" href="pos-system-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>POS & Inventory</a>
                <a class="text-secondary mb-2" href="loan-management-system-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Loan Management</a>
                <a class="text-secondary mb-2" href="hospital-management-system-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>Hospital & Clinic System</a>
                <a class="text-secondary mb-2" href="school-management-system-kenya.php"><i class="bi bi-arrow-right text-primary me-2"></i>School Administration</a>
                <a class="text-secondary" href="services.php#ruddertrack"><i class="bi bi-arrow-right text-primary me-2"></i>View All Systems</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4" style="font-size:1.15rem;">Get In Touch</h3>
            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Kenyatta Ave, Nairobi</p>
            <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>admin@rudderdatanalytics.co.ke</p>
            <p class="mb-4"><i class="bi bi-telephone text-primary me-2"></i>+254792719505</p>
            <div class="d-flex">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#" aria-label="Rudder on X"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#" aria-label="Rudder on Facebook"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#" aria-label="Rudder on LinkedIn"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#" aria-label="Rudder on Instagram"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(255, 255, 255, .1) !important;">
    <p class="m-0">&copy; <span id="year"></span> Rudder Research and Data Analytics LTD. All rights reserved.</p>
</div>
<script>
document.getElementById("year").textContent = new Date().getFullYear();
</script>

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68814b5bf6c86a19231f64ee/1j0sgsnv7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
