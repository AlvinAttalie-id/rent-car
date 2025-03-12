<?php
$id = $_GET['id'];
$exe = $konek->prepare("delete from kelurahan where id=?");
$exe->bind_param("s", $id);
if ($exe->execute()) {
  echo "<script>alert('Data kelurahan berhasil dihapus!');
  location.replace('?page=kelurahan')</script>";
} else {
  echo "<script>alert('Data kelurahan gagal dihapus!');
  location.replace('?page=kelurahan')</script>";
}
