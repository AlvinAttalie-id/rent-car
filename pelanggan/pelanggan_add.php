<?php
include "../pengaturan/koneksi.php"; //panggil file koneksi
if (isset($_POST['submit'])) { //jika tombol submit diklik
  session_start();
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $exe = $konek->prepare("insert into pelanggan (nama_pelanggan, email, telepon, alamat) values (?, ?, ?, ?)"); //query utk tambah data, ? adalah paramater
  $exe->bind_param("ssss", $nama_pelanggan, $email, $telepon, $alamat);
  if ($exe->execute()) { //jika execute berhasil            
    $_SESSION['pesan'] = "Data pelanggan berhasil ditambahkan";
    $_SESSION['status'] = "berhasil";
    echo "<script>location.replace('../index.php?page=pelanggan')</script>";
  } else {
    $_SESSION['pesan'] = "Data pelanggan gagal ditambahkan disimpan";
    $_SESSION['status'] = "gagal";
    echo "<script>location.replace('../index.php?page=pelanggan')</script>";
  }
}
