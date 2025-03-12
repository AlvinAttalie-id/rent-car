<?php
include "../pengaturan/koneksi.php"; //panggil file koneksi
if (isset($_POST['submit'])) { //jika tombol submit diklik
  session_start();
  $id = $_POST['id'];
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $exe = $konek->prepare("update pelanggan set nama_pelanggan=?, email=?, telepon=?, alamat=? where id=?"); //query utk tambah data, ? adalah paramater
  $exe->bind_param("sssss", $nama_pelanggan, $email, $telepon, $alamat, $id);
  if ($exe->execute()) { //jika execute berhasil            
    $_SESSION['pesan'] = "Data pelanggan berhasil diperbaharui";
    $_SESSION['status'] = "berhasil";
    echo "<script>location.replace('../index.php?page=pelanggan')</script>";
  } else {
    $_SESSION['pesan'] = "Data pelanggan gagal diperbaharui disimpan";
    $_SESSION['status'] = "gagal";
    echo "<script>location.replace('../index.php?page=pelanggan')</script>";
  }
}
