<?php
$_SESSION['role'] = "admin";
?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="?page=dashboard" class="site_title"><i class="fa fa-laptop"></i> <span>RentCar FTI</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>John Doe</h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <?php if ($_SESSION['role'] == 'admin') : ?>
            <li><a><i class="fa fa-database"></i> Master Data <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="?page=pelanggan">Pelanggan</a></li>
                <li><a href="?page=mobil">Mobil</a></li>
              </ul>
            </li>
          <?php endif; ?>
          <li><a><i class="fa fa-edit"></i> Transaksi Rental <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="?page=transaksicreate">Tambah Transaksi</a></li>
              <li><a href="?page=transaksi">Data Transaksi</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Pembayaran <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="?page=transaksicreate">Tambah Pembayaran</a></li>
              <li><a href="?page=transaksi">Data Pembayaran</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="?page=pelangganprint" target="_blank">Data Pelanggan</a></li>
              <li><a href="?page=mobilprint" target="_blank">Data Mobil</a></li>
              <li><a href="?page=transaksiprint" target="_blank">Data Transaksi</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-user"></i> Master Akun <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="?page=admin">Akun Pengguna</a></li>
              <li><a href="?page=pengelola">Akun Pelanggan</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>