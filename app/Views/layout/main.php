<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Specifies character encoding for proper text rendering -->
    <meta charset="utf-8">
    <!-- Page title displayed in browser tab -->
    <title>LAMPUNG SERVICE STATION</title>
    <!-- Ensures responsive design for various devices -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Placeholder for SEO keywords (currently empty) -->
    <meta content="" name="keywords">
    <!-- Placeholder for SEO description (currently empty) -->
    <meta content="" name="description">

    <!-- Favicon for branding in browser tab -->
    <link rel="icon" type="image/png" href="<?= base_url('frontend/img/favicon.png') ?>">

    <!-- Google Fonts for consistent typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon libraries for visual elements -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Animation and carousel libraries for enhanced UX -->
    <link href="<?= base_url('frontend/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Bootstrap CSS for responsive layout -->
    <link href="<?= base_url('frontend/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS for unique styling -->
    <link href="<?= base_url('frontend/css/style.css')?>" rel="stylesheet">
</head>

<body>
    <!-- Loading spinner for better UX during page load -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Navigation bar for site navigation -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <!-- Brand logo and name -->
        <a href="index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>L-ServStat</h2>
        </a>
        <!-- Toggler for mobile menu -->
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible navigation links -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index" class="nav-item nav-link">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <a href="services" class="nav-item nav-link">Services</a>
                <a href="contact" class="nav-item nav-link">Contact</a>
            </div>
            <!-- Commented-out login button (potentially for future use) -->
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a -->
        </div>
    </nav>

    <!-- Dynamic content section (rendered by CodeIgniter) -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer with contact info and social media links -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Address section -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Pulau Damar, Kec. Sukarame</p>
                    <!-- Social media links -->
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/raandikurniawan/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100086512698331"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://youtube.com/@randikurniaone?si=x_hWME6qIC077vmI"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <!-- Operating hours -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam Operasional</h4>
                    <h6 class="text-light">Senin - Jum'at:</h6>
                    <p class="mb-4">08.00 AM - 05.00 PM</p>
                    <h6 class="text-light">Sabtu - Minggu:</h6>
                    <p class="mb-0">09.00 AM - 04.00 PM</p>
                </div>
            </div>
        </div>
        <!-- Copyright notice -->
        <div class="container">
            <div class="copyright text-center">
                <div class="row">
                    <div class="col-md-12">
                        © <a>Randi Kurniawan</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back-to-top button for user convenience -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript libraries for interactivity and animations -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('frontend/lib/wow/wow.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/easing/easing.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?= base_url('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Custom JavaScript for template functionality -->
    <script src="<?= base_url('frontend/js/main.js')?>"></script>
</body>
</html>