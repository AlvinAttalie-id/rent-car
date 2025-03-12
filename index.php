<?php
session_start();
include "pengaturan/koneksi.php"; //panggil file koneksi.php
include "partials/header.php"; //panggil file header.php yg ada di folder partials
include "partials/sidebar.php"; //panggil file sidebar.php yg ada di folder partials
include "partials/navbar.php"; //panggil file navbar.php yg ada di folder partials
$page = $_GET['page']; //ambil nilai dari variabel page di url, simpan di $page
switch ($page) {
  case "pelanggan": //jika $page==pelanggan
    include "pelanggan/pelanggan_view.php"; //panggil file pelanggan_view.php
    break;
  case "pelanggancreate": //jika $page==pelanggancreate
    include "pelanggan/pelanggan_create.php"; //panggil file pelanggan_create.php
    break;
  case "pelangganedit": //jika $page==pelangganedit
    include "pelanggan/pelanggan_edit.php"; //panggil file pelanggan_edit.php
    break;
  case "mobil": //jika $page==mobil
    include "mobil/mobil_view.php"; //panggil file mobil_view.php
    break;
  case "mobilcreate": //jika $page==mobilcreate
    include "mobil/mobil_create.php"; //panggil file mobil_create.php
    break;
  case "mobiledit": //jika $page==mobiledit
    include "mobil/mobil_edit.php"; //panggil file mobil_edit.php
    break;
  case "transaksi": //jika $page==transaksi
    include "transaksi/transaksi_view.php"; //panggil file transaksi_view.php
    break;
  case "transaksicreate": //jika $page==transaksicreate
    include "transaksi/transaksi_create.php"; //panggil file transaksi_create.php
    break;
  case "transaksicreate2": //jika $page==transaksicreate
    include "transaksi/transaksi_create2.php"; //panggil file transaksi_create.php
    break;
  case "dashboard": //jika $page==dashboard
    include "dashboard/dashboard_view.php"; //panggil file dashboard_view.php
    break;
}
include "partials/footer.php"; //panggil file footer.php yg ada di folder partials
if ($_SESSION['pesan'] != "") {
  if ($_SESSION['status'] == 'berhasil') { ?>
    <script>
      Swal.fire({
        title: 'Berhasil!',
        text: '<?= $_SESSION['pesan'] ?>',
        icon: 'success',
        confirmButtonText: 'OK'
      });
    </script>
  <?php
  } else { ?>
    <script>
      Swal.fire({
        title: 'Gagal!',
        text: '<?= $_SESSION['pesan'] ?>',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    </script>
<?php }
  $_SESSION['pesan'] = "";
  $_SESSION['status'] = "";
} ?>