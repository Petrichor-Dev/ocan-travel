<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small><i></i></small>
      </h1>
      <ol class="breadcrumb" style="margin-right:30px;">
        <li>
          <a href="<?= base_url()?>admin"><i class="fa fa-dashboard"></i> Admin</a>
        </li>
        <li class="active">Pesawat</li>
        <li class="active">Jadwal Penerbangan</li>
      </ol>
    </section>


    <!-- Area Konten Utama -->
    <section class="content">
      <div class="container">
        <div class="row" style="margin-bottom:20px;">
          <div class="col-lg-4">
            <a href="tambah" class="btn btn-primary" style="padding:7px 10px; border-radius:5px;">Tambah Jadwal Penerbangan</a>
          </div>

          <div class="col-lg-4">
            <?= $this->session->flashdata("hapus_pemesanan")?>
            <?= $this->session->flashdata("edit_pemesanan")?>

            <?php if (empty($jadwalPesawat)) :?>
              <h5 class='text-danger'><i><b>Data Tidak di Temukan!</b></i></h5>
            <?php endif;?>
          </div>

          <div class="col-lg-4">
            <form method="post">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari penerbangan.." name="keyword">
                  <span class="input-group-btn">
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
              <th scope="col">Maskapai</th>
              <th scope="col">Kelas penerbangan</th>
              <th scope="col">Asal</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Jadwal Kedatangan</th>
              <th scope="col">Jadwal Keberangkatan</th>
              <th scope="col">Waktu Sampai</th>
              <th scope="col">Durasi</th>
              <th scope="col">Harga Tiket</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <tbody >
            <?php $i = 1;?>
            <?php foreach ($jadwalPesawat as $jadwal) : ?>
            <tr>
              <th scope="row">
                <?= $i;?>
              </th>

              <td>
                <img class="mt-2" style="width:80px;height:30px;" src="<?= base_url()?>/assets/img/<?= $jadwal['logo']?>.png" alt="">
              </td>

              <td>
                <b>
                  <p class="mt-3"><?= $jadwal['kelas_penerbangan'];?></p>
                </b>
              </td>

              <td>
                <b>
                  <p class="mt-3"><?= $jadwal['kota_asal'];?></p>
                </b><?= $jadwal['bandara_asal'];?>
              </td>

              <td>
                <b>
                  <p class="mt-3"><?= $jadwal['kota_tujuan'];?></p>
                </b><?= $jadwal['bandara_tujuan'];?>
              </td>

              <td>

                  <p class="mt-3"><?= $jadwal['jadwal_kedatangan'];?></p>

              </td>

              <td>

                  <p class="mt-3"><?= $jadwal['jadwal_keberangkatan'];?></p>

              </td>

              <td>
                <div class="mb-1">
                  <?= $jadwal['sampai_tujuan'];?>
                </div>
              </td>

              <td>
                <div class="mb-1">
                  <?= $jadwal['lama_perjalanan'];?> Jam
                </div>

              </td>

              <td>
                <b>
                  Rp. <?= number_format($jadwal['harga']) ;?>,-
                </b>
              </td>

              <td>
                <a style="padding:1px 17px;font-weight:lighter; float:right; border-radius:7px;" href="edit/<?= $jadwal["id_jadwal_pesawat"]?>" class="btn btn-warning">Edit</a>

                <a style="padding:1px 10px; float:right; font-weight:lighter; margin-top:3px; border-radius:7px;" href="<?= base_url()?>manager/hapus_jadwal/<?= $jadwal["id_jadwal_pesawat"]?>" class="btn btn-danger" onclick="return confirm('yakin ?');">Hapus</a>
              </td>
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
