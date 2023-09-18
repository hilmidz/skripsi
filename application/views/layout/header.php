<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url("assets/img/logo.jpg") ?>" rel="icon">
  <link href="<?= base_url("assets/img/apple-touch-icon.png") ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/quill/quill.snow.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/quill/quill.bubble.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/simple-datatables/style.css") ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url("assets/img/logo.jpg") ?>" alt="">
        <span class="d-none d-lg-block">SIAk biMBA AIUEO</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            Menus
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php if ($this->session->userdata('role') == 'siswa') { ?>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= site_url('siswa/profile') ?>">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
            <?php } elseif ($this->session->userdata('role') == 'petugas') { ?>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= site_url('petugas/profile') ?>">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
            <?php } elseif ($this->session->userdata('role') == 'admin') { ?>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= site_url('Kepalaunit/profile') ?>">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
            <?php } ?>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= site_url('auth/logout') ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <?php if ($this->session->userdata('role') == 'admin') { ?>

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Kepalaunit') ?>">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
      <?php } elseif ($this->session->userdata('role') == 'petugas') { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Petugas') ?>">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
      <?php } elseif ($this->session->userdata('role') == 'siswa') { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Siswa') ?>">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
      <?php } ?>

      <li class="nav-heading">Pages</li>

      <!-- End Profile Page Nav -->
      <?php if ($this->session->userdata('role') == 'admin') { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('kepalaunit/list_guru') ?>">
            <i class="bi bi-person"></i>
            <span>Petugas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('kepalaunit/list_siswa') ?>">
            <i class="bi bi-person-circle"></i>
            <span>Siswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('kepalaunit/list_kelas') ?>">
            <i class="bi bi-door-closed-fill"></i>
            <span>Kelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('kepalaunit/list_jadwal') ?>">
            <i class="bi bi-calendar3"></i>
            <span>Jadwal</span>
          </a>
        </li>

      <?php } ?>
      <?php if ($this->session->userdata('role') == 'petugas') { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Petugas/list_jadwal_saya') ?>">
            <i class="bi bi-book-fill"></i>
            <span>Jadwal Mengajar Saya</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('kepalaunit/list_siswa') ?>">
            <i class="bi bi-card-checklist"></i>
            <span>Nilai</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('role') == 'siswa') { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Siswa/list_jadwal_saya') ?>">
            <i class="bi bi-book-fill"></i>
            <span>Jadwal Belajar Saya</span>
          </a>
        </li>
      <?php } ?>


    </ul>

  </aside><!-- End Sidebar-->

</body>

</html>