<!-- Extends the main layout template, ensuring consistent structure across pages -->
<?= $this->extend('layout/main'); ?>

<!-- Defines the 'content' section to be injected into the main layout -->
<?= $this->section('content'); ?>

    <!-- Carousel Start: Hero section with a slideshow for visual impact -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Active carousel item (only one item currently defined) -->
                <div class="carousel-item active">
                    <!-- Background image for the carousel -->
                    <img class="w-100" src="<?= base_url('frontend/img/carousel-bg-1.jpg')?>" alt="Image">
                    <!-- Carousel caption with text and call-to-action -->
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <!-- Branding subtitle with animation -->
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">LAMPUNG SERVICE STATION</h6>
                                    <!-- Main headline with animation -->
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Layanan Perbaikan Mobil Pribadi</h1>
                                    <!-- CTA button linking to the About page -->
                                    <a href="about" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <!-- Optional image for larger screens -->
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="/img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start: Highlights key service features -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Perbaikan Berkualitas</h5>
                            <p>Selalu berkomitmen untuk memberikan hasil perbaikan yang berkualitas tinggi dengan memperhatikan setiap detail dan memastikan kepuasan pelanggan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Pekerja Ahli</h5>
                            <p>Profesional yang berpengalaman dan ahli di bidangnya, siap memberikan pelayanan terbaik dan solusi yang tepat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Peralatan Modern</h5>
                            <p>Dengan peralatan terkini untuk bekerja lebih efisien dan menghasilkan hasil yang maksimal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Fact Start: Statistics section to build trust -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Statistic 1: Years of Experience -->
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <!-- Statistic 2: Expert Technicians -->
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">4</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <!-- Statistic 3: Satisfied Clients -->
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">500</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <!-- Statistic 4: Completed Projects -->
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start: Detailed service options with tabbed navigation -->
    <div class="container-xxl service py-5">
        <div class="container">
            <!-- Section header -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Opsi Pilihan Jasa</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <!-- Service navigation pills -->
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <!-- Tab 1: Diagnostic Test (active by default) -->
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Diagnostic Test</h4>
                        </button>
                        <!-- Tab 2: Engine Servicing -->
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Engine Servicing</h4>
                        </button>
                        <!-- Tab 3: Understeel Servicing -->
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Understeel Servicing</h4>
                        </button>
                    </div>
                </div>
                <!-- Tab content for services -->
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <!-- Tab Pane 1: Diagnostic Test -->
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <!-- Service image -->
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend')?>/img/service-1.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Diagnostic Test</h3>
                                    <p class="mb-4">Layanan tes diagnosis yang akurat untuk mendeteksi masalah pada kendaraan Anda dengan teknologi canggih dan tim ahli berpengalaman</p>
                                    <!-- Service highlights -->
                                    <p><i class="fa fa-check text-success me-3"></i>Akurasi Tinggi</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Teknisi Berpengalaman</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Alat Diagnostik Modern</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Pane 2: Engine Servicing -->
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <!-- Service image (note: potential file extension issue) -->
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/img/service-2')?>.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Engine Servicing</h3>
                                    <p class="mb-4">Layanan servis mesin yakni memperbaiki mesin yang rusak dan menjaga performa serta daya tahan mesin kendaraan tetap optimal</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Perbaikan Berkualitas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Teknisi Ahli</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Peralatan Modern</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Pane 3: Understeel Servicing -->
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <!-- Service image (note: potential file extension issue) -->
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/img/service-3')?>.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Understeel Servicing</h3>
                                    <p class="mb-4">Perawatan kaki-kaki mobil yang memastikan kenyamanan berkendara dan keamanan di setiap perjalanan</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Perbaikan Berkualitas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Teknisi Ahli</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Peralatan Modern</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Booking Start: Call-to-action section with a booking form -->
    <?= view('component/form')?>
    <!-- Booking End -->

<!-- Closes the content section -->
<?= $this->endSection('content'); ?>