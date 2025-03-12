<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Pelanggan</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Pelanggan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- link tambah data, ?page=pelanggancreate, -->
            <a href="?page=pelanggancreate" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</a>
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggan</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                // query utk ambil data, menggunakan join utk mengambil data dari 2 tabel
                $exe = $konek->query("select * from pelanggan");
                while ($data = $exe->fetch_array()) : ?>
                  <tr style="text-align: center;">
                    <td class="align-middle"><?= $no++ ?></td>
                    <td class="align-middle"><?= $data['nama_pelanggan'] ?></td>
                    <td class="align-middle"><?= $data['email'] ?></td>
                    <td class="align-middle"><?= $data['telepon'] ?></td><!-- ambil data pada kolom nama_kelurahan -->
                    <td class="align-middle"><?= $data['alamat'] ?></td><!-- ambil data pada kolom nama_kecamatan -->
                    <td class="align-middle">
                      <!-- link untuk edit data,contoh: ?page=pelangganedit&id=1 -->
                      <a href="?page=pelangganedit&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm"> Edit</a>
                      <!-- link untuk hapus data,contoh: ?page=pelanggandelete&id=1 -->
                      <a href="pelanggan/pelanggan_delete.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?');"> Hapus</a>
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