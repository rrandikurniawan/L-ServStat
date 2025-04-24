<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>L-ServStat Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('backend/vendors/typicons.font/font/typicons.css')?>">
  <link rel="stylesheet" href="<?= base_url('backend/vendors/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('backend/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('backend/images/favicon.png')?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <!-- Navbar brand dan toggle untuk sidebar -->
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="admin"><img src="<?= base_url('backend/images/logo.svg')?>" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="admin"><img src="<?= base_url('backend/images/logo-mini.svg')?>" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
        <!-- Menu navigasi dan profil pengguna -->
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="typcn typcn-user-outline mr-0"></i>
                <span class="nav-profile-name">Administration</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                  <i class="typcn typcn-power text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <!-- Sidebar navigasi -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <p class="sidebar-menu-title">Dash menu</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/rrandikurniawan/L-ServStat/tree/master/lap_minggu2">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Documentation Project</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Tabel daftar reservasi layanan (pending) -->
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Service Reservation List</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Service</th>
                          <th>Date and Time</th>
                          <th>Notes</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data['bookingpending'] as $booking):?>
                        <tr>
                          <td><?= $booking['id']?></td>
                          <td><?= $booking['name']?></td>
                          <td><?= $booking['email']?></td>
                          <td><?= $booking['nama_layanan']?></td>
                          <td><?= $booking['waktu_dan_tanggal']?></td>
                          <td><?= $booking['note']?></td>
                          <td>
                            <button class="btn btn-success btn-sm" onclick="window.location.href='/admin/done/<?=$booking['id']?>'">Done</button>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Tabel riwayat reservasi (selesai) -->
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">History</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Service</th>
                          <th>Date and Time</th>
                          <th>Notes</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data['bookingdone'] as $booking):?>
                        <tr>
                          <td><?= $booking['id']?></td>
                          <td><?= $booking['name']?></td>
                          <td><?= $booking['email']?></td>
                          <td><?= $booking['nama_layanan']?></td>
                          <td><?= $booking['waktu_dan_tanggal']?></td>
                          <td><?= $booking['note']?></td>
                          <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                          </td>
                        </tr>
                        <?php endforeach ?>
                        <!-- Fungsi JavaScript untuk menghapus baris dari tabel -->
                        <script>
                          function deleteRow(button) {
                            // Dapatkan elemen baris (tr) dari tombol yang diklik
                            var row = button.closest("tr");
                            // Hapus baris dari DOM
                            row.remove();
                          }
                        </script>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- Footer halaman -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://github.com/rrandikurniawan/L-ServStat" target="_blank">L-ServStat</a> 2025</span>
            </div>
          </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= base_url('backend/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url('backend/js/off-canvas.js')?>"></script>
  <script src="<?= base_url('backend/js/hoverable-collapse.js')?>"></script>
  <script src="<?= base_url('backend/js/template.js')?>"></script>
  <script src="<?= base_url('backend/js/settings.js')?>"></script>
  <script src="<?= base_url('backend/js/todolist.js')?>"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>