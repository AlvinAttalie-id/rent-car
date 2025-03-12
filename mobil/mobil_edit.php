<?php
$id = $_GET['id']; //ambil variabel id yg ada di url, simpan di $id
$exe = $konek->prepare("select * from pelanggan where id=?"); //query ambil data tempat_kajian berdasarkan id
$exe->bind_param("s", $id); //ada 1 parameter ?, nilainya diambil dari $id
$exe->execute(); //execute query select
$data = $exe->get_result()->fetch_assoc(); //ambil data berdasarkan nama kolom, simpan di $data.
?>
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Pelanggan</h3>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Perbaharui Data Pelanggan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="?page=pelanggan" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
            <!-- form tambah data. actionnya menuju ke file pelanggan_add.php di folder pelanggan
            karena form ini ada fitur upload, maka wajib menambahkan atribut enctype="multipart/form-data" -->
            <form method="post" action="pelanggan/pelanggan_update.php" class="form-horizontal form-label-left">
              <input type="hidden" name="id" value="<?= $data['id'] ?>" id="first-name" class="form-control ">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Pelanggan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk nama pelanggan dengan name=nama_pelanggan -->
                  <input type="text" name="nama_pelanggan" value="<?= $data['nama_pelanggan'] ?>" id="first-name" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk email pelanggan. dengan name=email -->
                  <input type="text" name="email" value="<?= $data['email'] ?>" id="email" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="notelepon">No Telepon<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk no telepon pelanggan dengan name=telepon -->
                  <input type="text" name="telepon" value="<?= $data['telepon'] ?>" required="required" id="telepon" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk alamat dengan name=alamat -->
                  <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required="required" class="form-control ">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>