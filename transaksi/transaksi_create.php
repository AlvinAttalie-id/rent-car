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
            <h2>Transaksi Tahap 1: Pilih Mobil</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row mb-2">
              <?php
              $exe = $konek->query("select * from Mobil");
              while ($data = $exe->fetch_array()) : ?>
                <div class="col-md-3">
                  <div class="card">
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
                      <a href="?page=transaksicreate2&idmobil=<?= $data['id'] ?>" class="btn btn-primary">Pilih Mobil</a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>