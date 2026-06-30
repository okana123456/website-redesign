<!DOCTYPE html>
<html lang="en">

<head>
<title>Consult - Rudder Data Analytics</title>
<?php include '_head.php'?>
</head>

<div>

    <?php include '_topbar.php' ?>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class=" text-uppercase text-primary"></i>Rudder Research & Data Analytics</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <a href="blog.php" class="nav-item nav-link">Blog</a>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Contact Us</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Contact For Any Queries</h1>
                <?php if (isset($_GET['status'])): ?>
                    <div class="alert alert-<?php echo $_GET['status'] == 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                        <?php
                            if ($_GET['status'] == 'success') {
                                echo "Message sent successfully!";
                            } elseif ($_GET['status'] == 'error') {
                                echo "Message could not be sent. Error: " . htmlspecialchars($_GET['msg']);
                            } else {
                                echo "Invalid request.";
                            }
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form action="sendmail.php" method="POST">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" name="name" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="form-floating-2" name="email" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-3" name="subject" placeholder="Subject">
                                <label for="form-floating-3">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Message" id="form-floating-4" name="message" style="height: 150px"></textarea>
                                <label for="form-floating-4">Message</label>
                              </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
            <div class="position-relative h-100">
                <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.253927218812!2d36.8166667!3d-1.2833333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d4d5082e33%3A0xd66f7a4becc6d2f2!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1721736000000!5m2!1sen!2ske"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
</div>

        </div>
    </div>
    <!-- Contact End -->

<?php include '_footer.php'?>
    
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php include '_scripts.php'?>
</body>

</html>
