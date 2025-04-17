<!-- Extends the main layout template for consistent site structure -->
<?= $this->extend('layout/main'); ?>

<!-- Defines the 'content' section to be injected into the main layout -->
<?= $this->section('content'); ?>

    <!-- About Start: Main section introducing the business -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section header with animation -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-5">Tentang Kami</h1>
            </div>
            <div class="row g-5">
                <!-- Image section with experience highlight -->
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <!-- About page image -->
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/img/about.jpg')?>" style="object-fit: cover;" alt="">
                        <!-- Overlay highlighting years of experience -->
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Tahun</span></h1>
                            <h4 class="text-white">Pengalaman</h4>
                        </div>
                    </div>
                </div>
                <!-- Text section with business description and features -->
                <div class="col-lg-6">
                    <!-- Main headline emphasizing brand -->
                    <h1 class="mb-4"><span class="text-primary">LAMPUNG SERVICE STATION</span> Pilihan Tempat Untuk Perbaikan Mobil Anda</h1>
                    <!-- Brief business description -->
                    <p class="mb-4">Kami adalah tim yang berdedikasi untuk memberikan layanan perbaikan dan perawatan mobil terbaik anda dengan kualitas yang terjamin.</p>
                    <!-- Key features list -->
                    <div class="row g-4 mb-3 pb-3">
                        <!-- Feature 1: Professional & Expert -->
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Tim teknisi ahli yang berpengalaman dalam menangani berbagai masalah kendaraan</span>
                                </div>
                            </div>
                        </div>
                        <!-- Feature 2: Quality Servicing Center -->
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>Mengutamakan kualitas dalam setiap perbaikan yang kami lakukan</span>
                                </div>
                            </div>
                        </div>
                        <!-- Feature 3: Affordable Pricing -->
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Affordable for All Groups</h6>
                                    <span>Menawarkan layanan berkualitas tinggi dengan harga yang terjangkau</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Start: Statistics section to build credibility -->
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

    <!-- Service Start: Highlights key service features -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Feature 1: Quality Repairs -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Perbaikan Berkualitas</h5>
                            <p>Selalu berkomitmen untuk memberikan hasil perbaikan yang berkualitas tinggi dengan memperhatikan setiap detail dan memastikan kepuasan pelanggan</p>
                        </div>
                    </div>
                </div>
                <!-- Feature 2: Expert Workers -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Pekerja Ahli</h5>
                            <p>Profesional yang berpengalaman dan ahli di bidangnya, siap memberikan pelayanan terbaik dan solusi yang tepat</p>
                        </div>
                    </div>
                </div>
                <!-- Feature 3: Modern Equipment -->
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

<!-- Closes the content section -->
<?= $this->endSection('content'); ?>