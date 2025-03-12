<?php
include "../pengaturan/koneksi.php"; //panggil file koneksi
session_start();
$id = $_GET['id']; //ambil nilai dari inputan id, simpan di $id
$exe = $konek->prepare("delete from pelanggan where id=?"); //query utk hapus data
//terdapat 1 paramater(?), 
$exe->bind_param("s", $id);
if ($exe->execute()) { //jika execute berhasil
  //muncul pesan berhasil, dan halaman diarahkan ke index.php?page=pelanggan
  $_SESSION['pesan'] = "Data pelanggan berhasil dihapus";
  $_SESSION['status'] = "berhasil";
  echo "<script>location.replace('../index.php?page=pelanggan')</script>";
} else {
  //muncul pesan gagal, dan halaman diarahkan ke index.php?page=pelanggan
  $_SESSION['pesan'] = "Data pelanggan gagal dihapus";
  $_SESSION['status'] = "gagal";
  echo "<script>location.replace('../index.php?page=pelanggan')</script>";
}
