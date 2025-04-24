<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Menentukan kompatibilitas browser dan karakter encoding -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Judul halaman untuk tab browser -->
    <title>Sign In Admin</title>
    <!-- Mengatur tampilan responsif untuk perangkat mobile -->
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Menentukan ikon favicon untuk halaman -->
    <link rel="shortcut icon" href="<?= base_url('backend/images/favicon.png')?>"/>

    <!-- Fonts and icons -->
    <!-- Memuat script untuk mengelola font eksternal -->
    <script src="<?= base_url('backend/assets/js/plugin/webfont/webfont.min.js')?>"></script>
    <script>
        // Memuat font dari Google dan font kustom untuk ikon
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]}, // Memuat font Open Sans dari Google
            custom: {
                "families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], 
                urls: ['assets/css/fonts.css'] // Memuat file CSS untuk font kustom
            },
            active: function() {
                sessionStorage.fonts = true; // Menyimpan status font di sessionStorage saat font dimuat
            }
        });
    </script>
    
    <!-- CSS Files -->
    <!-- Memuat file CSS untuk Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('backend/assets/css/bootstrap.min.css')?>">
    <!-- Memuat file CSS kustom untuk tema Azzara -->
    <link rel="stylesheet" href="<?= base_url('backend/assets/css/azzara.min.css')?>">
</head>
<body class="login">
    <!-- Wrapper utama untuk halaman login -->
    <div class="wrapper wrapper-login">
        <!-- Kontainer untuk formulir login dengan animasi fadeIn -->
        <div class="container container-login animated fadeIn">
            <!-- Judul halaman login -->
            <h3 class="text-center">Sign In To Admin</h3>

            <!-- Menampilkan pesan error jika ada dari session flashdata -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger text-center">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Formulir untuk login admin -->
            <form action="/login" method="post" class="login-form">
                <!-- Input untuk username -->
                <div class="form-group form-floating-label">
                    <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
                    <label for="username" class="placeholder">Username</label>
                </div>

                <!-- Input untuk password dengan opsi tampilkan/sembunyikan -->
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Password</label>
                    <!-- Ikon untuk fitur tampilkan/sembunyikan password -->
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>

                <!-- Tombol untuk mengirim formulir login -->
                <div class="form-action mb-3">
                    <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
                </div>
            </form>
        </div>
    </div>
    <!-- JavaScript Files -->
    <!-- Memuat library jQuery -->
    <script src="<?= base_url('backend/assets/js/core/jquery.3.2.1.min.js')?>"></script>
    <!-- Memuat plugin jQuery UI untuk interaksi tambahan -->
    <script src="<?= base_url('backend/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
    <!-- Memuat library Popper.js untuk tooltip dan popover -->
    <script src="<?= base_url('backend/assets/js/core/popper.min.js')?>"></script>
    <!-- Memuat library Bootstrap untuk komponen interaktif -->
    <script src="<?= base_url('backend/assets/js/core/bootstrap.min.js')?>"></script>
    <!-- Memuat script kustom untuk inisialisasi halaman -->
    <script src="<?= base_url('backend/assets/js/ready.js')?>"></script>
</body>
</html>