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
            <h2>Tambah Data Pelanggan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="?page=pelanggan" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
            <!-- form tambah data. actionnya menuju ke file pelanggan_add.php di folder pelanggan
            karena form ini ada fitur upload, maka wajib menambahkan atribut enctype="multipart/form-data" -->
            <form method="post" action="pelanggan/pelanggan_add.php" class="form-horizontal form-label-left">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Pelanggan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk nama pelanggan dengan name=nama_pelanggan -->
                  <input type="text" name="nama_pelanggan" id="first-name" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk email pelanggan. dengan name=email -->
                  <input type="text" name="email" id="email" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="notelepon">No Telepon<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk no telepon pelanggan dengan name=telepon -->
                  <input type="text" name="telepon" required="required" id="telepon" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk alamat dengan name=alamat -->
                  <input type="text" name="alamat" required="required" class="form-control ">
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