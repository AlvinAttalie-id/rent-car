<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Transaksi Rental Mobil</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Transaksi Tahap 2: Isi Data Rental</h2>
            <a href="?page=transaksicreate" class="btn btn-primary btn-sm float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row mb-2">
              <?php
              $idmobil = $_GET['idmobil'];
              $exe = $konek->query("select * from Mobil where id='$idmobil'");
              $data = $exe->fetch_array() ?>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Data Mobil</h5>
                  </div>
                  <img src="assets/upload/<?= $data['foto'] ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $data['model'] . " " . $data['transmisi'] ?></h5>
                    <p class="card-text">
                    <ul>
                      <li>Tahun : <?= $data['tahun']; ?></li>
                      <li>Merk : <?= $data['merk']; ?></li>
                      <li>Tarif : Rp. <b><?= $data['tarif']; ?></b></li>
                      <li>Status : <b><?= $data['status']; ?></b></li>
                    </ul>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Lengkapi Data Sewa Mobil</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" action="transaksi/transaksi_add.php" enctype="multipart/form-data" class="form-horizontal form-label-left">
                     <input type="hidden" name="mobil_id" value="<?= $idmobil ?>"> 
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pilih Pelanggan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <!-- inputan untuk nama pelanggan dengan name=nama_pelanggan -->
                          <select name="pelanggan_id" id="" class="form-control" required>
                            <option value="">Pilih Pelanggan</option>
                            <?php
                            $exe = $konek->query("select * from pelanggan");
                            while ($data_pelanggan = $exe->fetch_array()) : ?>
                              <option value="<?= $data_pelanggan['id'] ?>"><?= $data_pelanggan['nama_pelanggan'] . " " . $data_pelanggan['telepon'] ?></option>
                            <?php endwhile; ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tgl_mulai">Tanggal Mulai<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <!-- inputan untuk email pelanggan. dengan name=email -->
                          <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tgl_selesai">Tanggal Selesai<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <!-- inputan untuk email pelanggan. dengan name=email -->
                          <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lama_sewa">Lama Sewa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <!-- inputan untuk email pelanggan. dengan name=email -->
                          <input type="number" name="lama_sewa" id="lama_sewa" class="form-control" readonly>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tarif">Tarif Per Hari<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <!-- inputan untuk email pelanggan. dengan name=email -->
                          <input type="number" value="<?= $data['tarif'] ?>" name="tarif" id="tarif" class="form-control" readonly>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="total_biaya">Total Biaya<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <!-- inputan untuk email pelanggan. dengan name=email -->
                          <input type="number" name="total_biaya" id="total_biaya" class="form-control" readonly>
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
      </div>
    </div>
  </div>
</div>
<script>
  // Fungsi untuk menghitung selisih hari
  function calculateDayDifference() {
    var tgl_mulai = document.getElementById('tgl_mulai').value;
    var tgl_selesai = document.getElementById('tgl_selesai').value;
    var tarif = document.getElementById('tarif').value;

    if (tgl_mulai && tgl_selesai) {
      var start = new Date(tgl_mulai);
      var end = new Date(tgl_selesai);

      var timeDifference = end.getTime() - start.getTime();
      var lama_sewa = timeDifference / (1000 * 3600 * 24);
      var total = tarif * lama_sewa;
      document.getElementById('total_biaya').value = total;
      document.getElementById('lama_sewa').value = lama_sewa;
    } else {
      document.getElementById('lama_sewa').value = 0;
      document.getElementById('total_biaya').value = 0;
    }
  }

  // Menambahkan event listener untuk input tanggal
  document.getElementById('tgl_mulai').addEventListener('change', calculateDayDifference);
  document.getElementById('tgl_selesai').addEventListener('change', calculateDayDifference);
</script>