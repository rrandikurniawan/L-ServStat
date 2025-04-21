<!-- Extends the main layout template for consistent site structure -->
<?= $this->extend('layout/main'); ?>

<!-- Defines the 'content' section to be injected into the main layout -->
<?= $this->section('content'); ?>

    <!-- Contact Start: Main section for contact information -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section header with animation -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Hubungi untuk Pertanyaan lebih lanjut</h1>
            </div>
            <!-- Contact details section -->
            <div class="row g-4 justify-content-center mb-4">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <!-- Email contact information -->
                            <div class="bg-light d-flex flex-column justify-content-center p-4 text-center">
                                <h6 class="text-uppercase">// General //</h6>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>tanyalss@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Google Maps iframe for location display -->
            <div class="col-12 d-flex justify-content-center">
                <iframe class="position-relative rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2623854491753!2d105.28645637444544!3d-5.376905794602008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40db73fd3bca19%3A0xb72f6e10ef728716!2sLAMPUNG%20SERVICE%20STATION!5e0!3m2!1sid!2sid!4v1742319795111!5m2!1sid!2sid"
                    frameborder="0" style="min-height: 350px; width: 80%; max-width: 800px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Call To Action Start: Encourages user engagement -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <!-- Promotional text -->
                <div class="col-lg-8 col-md-6">
                    <h3 class="mb-4">Masih bingung dan memliki pertanyaan lain tentang servis?</h3>
                    <p class="mb-0">Lampung Service Station menyediakan layanan servis profesional untuk kendaraan Anda. Tim mekanik kami yang berpengalaman siap memberikan pelayanan terbaik untuk mobil Anda. Mari jangan ragu untuk konsultasi demi kebaikan mobil Anda.</p>
                </div>
                <!-- CTA button linking to WhatsApp -->
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>Admin L-ServStat</h3>
                        <a href="https://wa.me/6285838151508" class="btn btn-secondary py-3 px-5">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

<!-- Closes the content section -->
<?= $this->endSection('content'); ?>