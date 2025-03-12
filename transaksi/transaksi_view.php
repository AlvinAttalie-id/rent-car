<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Transaksi Rental</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Transaksi Rental</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- link tambah data, ?page=pelanggancreate, -->
            <a href="?page=transaksicreate" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</a>
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Data Mobil</th>
                  <th>Nama Pelanggan</th>
                  <th>Total Biaya</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                // query utk ambil data, menggunakan join utk mengambil data dari 2 tabel
                $exe = $konek->query("select t.*, p.nama_pelanggan, m.model, m.no_plat from transaksi_rental as t inner join pelanggan as p on t.pelanggan_id = p.id inner join mobil as m on t.mobil_id = m.id");
                while ($data = $exe->fetch_array()) : ?>
                  <tr style="text-align: center;">
                    <td class="align-middle"><?= $no++ ?></td>
                    <td class="align-middle"><?= date('d-m-Y', strtotime($data['tanggal_mulai'])) ?></td>
                    <td class="align-middle"><?= date('d-m-Y', strtotime($data['tanggal_selesai'])) ?></td>
                    <td class="align-middle"><?= $data['model'] . " " . $data['no_plat'] ?></td>
                    <td class="align-middle"><?= $data['nama_pelanggan'] ?></td>
                    <td class="align-middle">Rp. <?= number_format($data['total_bayar'], "0", ",", ".") ?></td>
                    <td class="align-middle"><?= $data['status_transaksi'] ?></td>
                    <td class="align-middle">
                        <?php
                        $pembayaran= "";
                        $edit="";
                        $hapus="";
                        $batalkan="";
                        $selesai="";
                        $detail="";
                        if ($data['status_transaksi'] == "dipesan") {
                            $pembayaran = "<a class='dropdown-item' href='?page=pembayarancreate&id=$data[0]'>Lanjut Pembayaran</a>";
                            $edit = "<a class='dropdown-item' href='?page=transaksiedit&id=$data[0]'>Edit</a>";
                            $hapus = "<a class='dropdown-item' href='transaksi/transaksi_delete.php&id=$data[0]'>Hapus</a>";
                            $batalkan = "<a class='dropdown-item' href='transaksi/transaksi_batal.php&id=$data[0]'>Batalkan</a>";
                            
                        } else if ($data['status_transaksi'] == "progress") {
                            $selesai = "<a class='dropdown-item' href='transaksi/transaksi_selesai.php&id=$data[0]'>Batalkan</a>";
                        } else if ($data['status_transaksi'] == "dibatalkan") {
                            $hapus = "<a class='dropdown-item' href='transaksi/transaksi_delete.php&id=$data[0]'>Batalkan</a>";
                        }

                        ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                        <div class="dropdown-menu">
                            <?php
                            echo $pembayaran;
                            echo $edit;
                            echo $hapus;
                            echo $batalkan;
                            echo $selesai; 
                            ?>
                        </div>
                        </div>
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