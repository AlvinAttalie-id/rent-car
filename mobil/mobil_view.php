<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Mobil</h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Mobil</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!-- link tambah data, ?page=Mobilcreate, -->
          <a href="?page=mobilcreate" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</a>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Model</th>
                <th>Merk</th>
                <th>No Plat</th>
                <th>Transmisi</th>
                <th>Tahun</th>
                <th>Tarif</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              // query utk ambil data, menggunakan join utk mengambil data dari 2 tabel
              $exe = $konek->query("select * from Mobil");
              while ($data = $exe->fetch_array()) : ?>
                <tr style="text-align: center;">
                  <td class="align-middle"><?= $no++ ?></td>
                  <td class="align-middle"><?= $data['model'] ?></td>
                  <td class="align-middle"><?= $data['merk'] ?></td>
                  <td class="align-middle"><?= $data['no_plat'] ?></td>
                  <td class="align-middle"><?= $data['transmisi'] ?></td>
                  <td class="align-middle"><?= $data['tahun'] ?></td>
                  <td class="align-middle"><?= $data['tarif'] ?></td>
                  <td class="align-middle"><?= $data['status'] ?></td>
                  <td class="align-middle"><img src="assets/upload/<?= $data['foto'] ?>" height="150px"></td>
                  <td class="align-middle">
                    <!-- link untuk edit data,contoh: ?page=Mobiledit&id=1 -->
                    <a href="?page=mobiledit&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm"> Edit</a>
                    <!-- link untuk hapus data,contoh: ?page=Mobildelete&id=1 -->
                    <a href="mobil/mobil_delete.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?');"> Hapus</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>