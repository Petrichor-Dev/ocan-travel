<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small><i></i></small>
      </h1>
      <ol class="breadcrumb" style="margin-right:30px;">
        <li><a href="<?= base_url()?>admin"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Pesawat</li>
        <li class="active">Pemesanan</li>
      </ol>
    </section>


    <!-- Area Konten Utama -->
    <section class="content">
      <div class="container">
        <div class="row" style="margin-bottom:20px;">
          <div class="col-lg-4">
            <a onclick="return confirm('yakin ?');" href="hapus_semua_pemesanan" class="btn btn-danger" style="padding:7px 10px; border-radius:5px;">Hapus Semua Data Pemesanan</a>
          </div>

          <div class="col-lg-4">
            <?= $this->session->flashdata("hapus_pemesanan")?>
            <?php if (empty($jadwalPesawat)) :?>
              <h5 class='text-danger'><i><b>Data Tidak di Temukan!</b></i></h5>
            <?php endif;?>
          </div>

          <div class="col-lg-4">
            <form action="" method="post">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari pemesanan.." name="cari">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit" name="search">Cari</button>
                  </span>
              </div>
            </form>
          </div>

        </div>

        <div class="row">
        <table class="table text-center bg-dark">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Maskapai</th>
              <th scope="col">Kelas Penerbangan</th>
              <th scope="col">Tanggal Berangkat</th>
              <th scope="col">Kota Asal</th>
              <th scope="col">Kota Tujuan</th>
              <th scope="col">Penumpang</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Hapus Data</th>
              <th scope="col">ID</th>
            </tr>
          </thead>

          <tbody >
            <?php $i = 1;?>
            <?php foreach ($jadwalPesawat as $jadwalPesawat) : ?>
            <tr>
              <th scope="row">
                <?= $i;?>
              </th>

              <td>

                  <p class="mt-3"><?= $jadwalPesawat['nama_user'];?></p>

              </td>

              <td>
                <img class="mt-2" style="width:80px;height:30px;" src="<?= base_url()?>/assets/img/<?= $jadwalPesawat['nama_maskapai']?>.png" alt="">
              </td>

              <td>
                <p class="mt-3"><?= $jadwalPesawat['kelas_penerbangan'];?></p>
              </td>

              <td>
                <p class="mt-3"><?= $jadwalPesawat['tanggal_keberangkatan'];?></p>
              </td>

              <td>
                <p class="mt-3"><?= $jadwalPesawat['kota_asal'];?></p>
              </td>

              <td>
                  <p class="mt-3"><?= $jadwalPesawat['kota_tujuan'];?></p>
              </td>

              <td>
                  <p class="mt-3"><?= $jadwalPesawat['jumlah_penumpang'];?> orang</p>
              </td>

              <td>
                <div class="mb-1 ">
                  <p>Rp. <?= number_format($jadwalPesawat['total_bayar']);?>,- </p>
                </div>

              </td>

              <td>
                <a href="hapus_pemesanan/<?= $jadwalPesawat['id_pemesanan_pesawat']?>" class="btn btn-warning" style="padding:3px 5px; border-radius:5px;" onclick="return confirm('yakin ?');">Hapus</a>
              </td>
              <th><?= $jadwalPesawat['id_pemesanan_pesawat']?></th>


            </tr>
            <?php $i++;?>
            <?php endforeach;?>

          </tbody>
        </table>
        </div>
      </div>

    </section>
    <!-- Akhir Konten Utama -->
  </div>
<!-- /.content-wrapper -->
