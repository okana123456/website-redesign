<!-- call to action -->
<div class="container-fluid bg-primary text-secondary p-5">
    <div class="row g-5">
        <div class="col-12 text-center">
            <h1 class="display-5 mb-4">Stay Updated!!!</h1>
            <form id="subscribeForm" class="mx-auto" style="max-width: 600px;">
                <div class="input-group">
                    <input type="email" name="email" id="emailInput" class="form-control border-white p-3" placeholder="Your Email" required>
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
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "email=" + encodeURIComponent(email)
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show alert popup with response message
        location.reload(); // Reload the page immediately after
    })
    .catch(error => {
        alert("Something went wrong. Please try again.");
    });
});
</script>



<!-- Footer Start -->

<div class="container-fluid bg-dark text-secondary p-5">
    <div class="row g-5 justify-content-center">
        
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">Popular Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="index.php">
                    <i class="bi bi-arrow-right text-primary me-2"></i>Home
                </a>
                <a class="text-secondary mb-2" href="about.php">
                    <i class="bi bi-arrow-right text-primary me-2"></i>About Us
                </a>
                <a class="text-secondary mb-2" href="services.php">
                    <i class="bi bi-arrow-right text-primary me-2"></i>Our Services
                </a>
                <a class="text-secondary mb-2" href="#blog.php">
                    <i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post
                </a>
                <a class="text-secondary" href="contact.php">
                    <i class="bi bi-arrow-right text-primary me-2"></i>Contact Us
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">Get In Touch</h3>
            <p class="mb-2">
                <i class="bi bi-geo-alt text-primary me-2"></i>  Kenyatta Ave, Nairobi
            </p>
            <p class="mb-2">
                <i class="bi bi-envelope-open text-primary me-2"></i>admin@rudderdatanalytics.co.ke
            </p>
            <p class="mb-0">
                <i class="bi bi-telephone text-primary me-2"></i>+254792719505
            </p>
        </div>
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">Follow Us</h3>
            <div class="d-flex">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#">
                    <i class="fab fa-twitter fw-normal"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#">
                    <i class="fab fa-facebook-f fw-normal"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#">
                    <i class="fab fa-linkedin-in fw-normal"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#">
                    <i class="fab fa-instagram fw-normal"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
   <marquee>
     <p class="m-0">
        &copy; <span id="year"></span> All Rights Reserved by <a class="text-secondary border-bottom" href="https://www.rudderdatanalytics.co.ke/">Rudder Data Analytics</a>.
     Developed by Keya Victor.  
      </p>
    </marquee>   
</div>
<!-- Footer End -->
<script>
const year = new Date().getFullYear();
document.getElementById("year").textContent = year;
</script>

<!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->