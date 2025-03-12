<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Kelurahan</h3>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Kelurahan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="?page=kelurahancreate" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</a>
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelurahan</th>
                  <th>Nama Kecamatan</th>
                  <th>Jumlah Masjid</th>
                  <th>Jumlah Majlis Taklim</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $exe = $konek->query("select kelurahan.*, kecamatan.nama_kecamatan from kelurahan inner join kecamatan on kelurahan.kecamatan_id = kecamatan.id");
                while ($data = $exe->fetch_array()) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_kelurahan'] ?></td>
                    <td><?= $data['nama_kecamatan'] ?></td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                      <a href="?page=kelurahanedit&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm"> Edit</a>
                      <a href="?page=kelurahandelete&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?');"> Hapus</a>
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