<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $judul; ?></title>
  <link href="<?= base_url('assets') ?>/css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/assets/img/favicon.png" />
  <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="nav-fixed">
  <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand" href="<?= base_url("user") ?>">PT.VIA</a>
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle"><i data-feather="menu"></i></button>
    <!-- Navbar Search Input-->
    <!-- * * Note: * * Visible only on and above the md breakpoint-->

    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ml-auto">
      <!-- Navbar Search Dropdown-->
      <!-- * * Note: * * Visible only below the md breakpoint-->
      <li class="nav-item dropdown no-caret mr-3 d-md-none">
        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
        <!-- Dropdown - Search-->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100">
            <div class="input-group input-group-joined input-group-solid">
              <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <div class="input-group-text"><i data-feather="search"></i></div>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Alerts Dropdown-->
      <li class="nav-item dropdown no-caret d-none d-sm-block mr-3 dropdown-notifications">
        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
          <h6 class="dropdown-header dropdown-notifications-header">
            <i class="mr-2" data-feather="bell"></i>
            Alerts Center
          </h6>
          <!-- Example Alert 1-->
          <a class="dropdown-item dropdown-notifications-item" href="#!">
            <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
            <div class="dropdown-notifications-item-content">
              <div class="dropdown-notifications-item-content-details">December 29, 2020</div>
              <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
            </div>
          </a>
          <!-- Example Alert 2-->
          <a class="dropdown-item dropdown-notifications-item" href="#!">
            <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
            <div class="dropdown-notifications-item-content">
              <div class="dropdown-notifications-item-content-details">December 22, 2020</div>
              <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
            </div>
          </a>
          <!-- Example Alert 3-->
          <a class="dropdown-item dropdown-notifications-item" href="#!">
            <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="dropdown-notifications-item-content">
              <div class="dropdown-notifications-item-content-details">December 8, 2020</div>
              <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
            </div>
          </a>
          <!-- Example Alert 4-->
          <a class="dropdown-item dropdown-notifications-item" href="#!">
            <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
            <div class="dropdown-notifications-item-content">
              <div class="dropdown-notifications-item-content-details">December 2, 2020</div>
              <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
            </div>
          </a>
          <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
        </div>
      </li>
      <!-- User Dropdown-->
      <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url('assets') ?>/assets/img/illustrations/profiles/profile-1.png" /></a>
        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
          <h6 class="dropdown-header d-flex align-items-center">
            <img class="dropdown-user-img" src="<?= base_url('assets') ?>/assets/img/illustrations/profiles/profile-1.png" />
            <div class="dropdown-user-details">
              <div class="dropdown-user-details-name"><?= $nama; ?> <br> <?= $jabatan->nama_jabatan; ?></div>
            </div>
          </h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url("auth/keluar") ?>">
            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
          <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
              <div class="nav-link-icon"><i data-feather="bell"></i></div>
              Alerts
              <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
              <div class="nav-link-icon"><i data-feather="mail"></i></div>
              Messages
              <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
              <div class="nav-link-icon"><i data-feather="activity"></i></div>
              Order Departemen
              <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
              <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                <a class="nav-link" href="<?= base_url('user/keranjang') ?>">Keranjang (<?php echo count($keranjang); ?>)</a>
                <a class="nav-link" href="<?= base_url('user/status') ?>">Status Order</a>

              </nav>
            </div>
          </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
          <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title"><?= $nama; ?></div>
          </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
          <div class="container">
            <div class="page-header-content pt-4">
              <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                  <h1 class="page-header-title">
                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                    <?= $judul; ?>
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </header>
      </main>