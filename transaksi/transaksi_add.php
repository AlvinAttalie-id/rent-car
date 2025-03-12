<?php
include "../pengaturan/koneksi.php"; //panggil file koneksi
if (isset($_POST['submit'])) { //jika tombol submit diklik
  session_start();
  $mobil_id = $_POST['mobil_id'];
  $pelanggan_id = $_POST['pelanggan_id'];
  $tgl_mulai = $_POST['tgl_mulai'];
  $tgl_selesai = $_POST['tgl_selesai'];
  $total_biaya = $_POST['total_biaya'];
  $status = "dipesan";
  $exe = $konek->prepare("insert into transaksi_rental (pelanggan_id, mobil_id, tanggal_mulai, tanggal_selesai, total_bayar, status_transaksi) values (?, ?, ?, ?, ?, ?)"); //query utk tambah data, ? adalah paramater
  $exe->bind_param("ssssss", $pelanggan_id, $mobil_id, $tgl_mulai, $tgl_selesai, $total_biaya, $status );
  if ($exe->execute()) { //jika execute berhasil            
    $_SESSION['pesan'] = "Data rental mobil berhasil ditambahkan";
    $_SESSION['status'] = "berhasil";
    echo "<script>location.replace('../index.php?page=transaksi')</script>";
  } else {
    $_SESSION['pesan'] = "Data rental mobil gagal ditambahkan disimpan";
    $_SESSION['status'] = "gagal";
    echo "<script>location.replace('../index.php?page=transaksi')</script>";
  }
}
