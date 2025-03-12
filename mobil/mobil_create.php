<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Mobil</h3>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tambah Data Mobil</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="?page=mobil" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
            <!-- form tambah data. actionnya menuju ke file pelanggan_add.php di folder pelanggan
            karena form ini ada fitur upload, maka wajib menambahkan atribut enctype="multipart/form-data" -->
            <form method="post" action="mobil/mobil_add.php" enctype="multipart/form-data" class="form-horizontal form-label-left">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Model<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk nama pelanggan dengan name=nama_pelanggan -->
                  <input type="text" name="model" id="first-name" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="merk">Merk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk email pelanggan. dengan name=email -->
                  <input type="text" name="merk" id="merk" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="noplat">No Plat<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk no telepon pelanggan dengan name=telepon -->
                  <input type="text" name="noplat" required="required" id="noplat" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Transmisi<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk alamat dengan name=alamat -->
                  <select name="transmisi" id="" class="form-control" required>
                    <option value="">Pilih Transmisi</option>
                    <option value="manual">Manual</option>
                    <option value="matik">Matik</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tahun">Tahun<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk no telepon pelanggan dengan name=telepon -->
                  <input type="text" name="tahun" required="required" id="tahun" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tarif">Tarif<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk no telepon pelanggan dengan name=telepon -->
                  <input type="number" name="tarif" required="required" id="tarif" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="foto">Foto<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <!-- inputan untuk no telepon pelanggan dengan name=telepon -->
                  <input type="file" name="foto" required="required" id="foto" class="form-control ">
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