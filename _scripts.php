<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
// Show/hide button on scroll
window.addEventListener("scroll", function () {
    const backToTop = document.querySelector(".back-to-top");
    if (window.scrollY > 300) {
        backToTop.style.display = "block";
    } else {
        backToTop.style.display = "none";
    }
});

// Scroll to top smoothly
document.querySelector(".back-to-top").addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>


<!--
<script>
    var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?92766';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
    "enabled":true,
    "chatButtonSetting":{
        "backgroundColor":"#00e785",
        "ctaText":"Chat with us",
        "borderRadius":"25",
        "marginLeft": "0",
        "marginRight": "20",
        "marginBottom": "20",
        "ctaIconWATI":false,
        "position":"right"
    },
    "brandSetting":{
        "brandName":"Rudder",
        "brandSubTitle":"undefined",
        "brandImg":"https://rudderdatanalytics.co.ke/img/rudderlogo.png",
        "welcomeText":"Hi there!\nHow can I help you?",
        "messageText":"Hello, %0A I have a question about {{page_link}}",
        "backgroundColor":"#00e785",
        "ctaText":"Chat with us",
        "borderRadius":"25",
        "autoShow":false,
        "phoneNumber":"254792719505"
    }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> -->
