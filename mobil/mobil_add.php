<?php
include "../pengaturan/koneksi.php"; //panggil file koneksi
if (isset($_POST['submit'])) {
  session_start();
  // Direktori tempat menyimpan foto
  $target_dir = "../assets/upload/";
  // Path lengkap file yang akan disimpan  
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));

  // Periksa apakah file adalah gambar asli atau bukan
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if ($check !== false) {
    $uploadOk = 1;
  } else {
    $pesan = "File is not an image.";
    $uploadOk = 0;
  }

  // Periksa ukuran file (misalnya, maksimal 1mb)
  if ($_FILES["foto"]["size"] > 1000000) {
    $pesan = "Ukuran gambar maksimal 1mb";
    $uploadOk = 0;
  }

  // Hanya izinkan format gambar tertentu
  else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    $pesan = "Hanya bisa menerima file gambar saja (JPG, JPEG, PNG, GIF)";
    $uploadOk = 0;
  }

  // Periksa apakah $uploadOk diatur ke 0 karena kesalahan
  if ($uploadOk == 0) {
    $_SESSION['pesan'] = "Upload foto gagal dilakukan, karena $pesan";
    $_SESSION['status'] = "gagal";
    echo "<script>
            location.replace('../index.php?page=mobilcreate')</script>";
    // Jika semua pengecekan lolos, coba unggah file
  } else {
    // Generate nama file baru
    $newFileName = uniqid('img_', true) . '.' . $imageFileType;
    $target_file = $target_dir . $newFileName;
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      $model = $_POST['model'];
      $merk = $_POST['merk'];
      $noplat = $_POST['noplat'];
      $transmisi = $_POST['transmisi'];
      $tahun = $_POST['tahun'];
      $tarif = $_POST['tarif'];
      $status = "tersedia";
      $exe = $konek->prepare("insert into mobil (model, merk, no_plat, transmisi, tahun, tarif, status, foto) values (?, ?, ?, ?, ?, ?, ?, ?)"); //query utk tambah data, ? adalah paramater
      $exe->bind_param("ssssssss", $model, $merk, $noplat, $transmisi, $tahun, $tarif, $status, $newFileName);
      if ($exe->execute()) { //jika execute berhasil
        $_SESSION['pesan'] = "Data mobil berhasil ditambahkan";
        $_SESSION['status'] = "berhasil";
        echo "<script>
            location.replace('../index.php?page=mobil')</script>";
      } else {
        $_SESSION['pesan'] = "Data mobil gagal ditambahkan";
        $_SESSION['status'] = "gagal";
        echo "<script>
          location.replace('../index.php?page=mobil')</script>";
      }
    } else {
      $_SESSION['pesan'] = "Proses upload data gagal dilakukan";
      $_SESSION['status'] = "gagal";
      echo "<script>
          location.replace('../index.php?page=mobil')</script>";
    }
  }
}
