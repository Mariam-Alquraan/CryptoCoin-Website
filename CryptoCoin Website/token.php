<!DOCTYPE html>
<html lang="en">

<?php include_once("header.php");?>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include_once("navBar.php"); ?>
	<!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Token Sale</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Token Sale</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-2.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Token Sale Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Token Sale</h1>
                <p class="text-primary fs-5 mb-5">Token Sale Countdown</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Days</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-light text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Hours</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-light text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Minutes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="bg-light text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Seconds</span>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-3 px-4" href="">Buy Token</a>
                </div>
                <div class="col-12 text-center">
                    <img class="img-fluid m-1" src="img/payment-1.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="img/payment-2.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="img/payment-3.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="img/payment-4.png" alt="" style="width: 50px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Token Sale Start -->


    <!-- Footer Start -->
    <?php include_once("footer.php");?>
	<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>