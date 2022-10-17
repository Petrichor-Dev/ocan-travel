  <div class="container" style="margin-top:160px;">

    <div class="keterangan">
      <div class="row">
        <div class="col-lg-10">
          <!-- KETERANGAN MENGENAI RUTE PENERBANGAN -->
          <h5><img src="<?= base_url()?>assets/icon/Pesawat.png" class="icon-gambar" alt=""><?= $isi[0]['kota_asal'];?> ~ <i><?= $isi[0]["bandara_asal"]?></i> &LongRightArrow; <?= $isi[0]['kota_tujuan'];?>  ~ <i><?= $isi[0]["bandara_tujuan"]?> </i></h5>
        </div>

        <div class="col-lg-2">
          <!-- KETERANGAN MENGENAI RUTE PENERBANGAN -->
          <h5><i>Pilih Tiket Anda</i></h5>
        </div>
      </div>

      <!-- TANGGAL DAN SEBAGAINYA -->
      <div class="row" style="margin-top:-12px;">
        <div class="col-lg-10">
          <div class="tanggal">
          <img src="<?= base_url()?>assets/icon/kalender-solid.png" style="width:17px; margin-bottom:5px; margin-right:10px;" alt=""><p style="display:inline-block;"><b><?= $this->session->userdata('tanggal')?></b></p>
          </div>

          <div class="lainnya">
          <img src="<?= base_url()?>assets/icon/orang-dual-tone.png" style="width:18px;margin-right:10px;" alt=""><p  style="display:inline-block;"><b><?= $this->session->userdata('jumlahPenumpang');?> orang | <?= $isi[0]['kelas_penerbangan']?></b></p>
          </div>

        </div>

        <div class="col-lg-2 mt-5">
          <a href="<?= base_url()?>pesawat/hapusPencarian" class="btn btn-primary">Ganti Pencarian</a>
        </div>
      </div>
    </div>

    <div class="row">
    <table class="table text-center">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Maskapai</th>
          <th scope="col">Jadwal Kedatangan</th>
          <th scope="col">Jadwal Keberangkatan</th>
          <th scope="col">Waktu Sampai</th>
          <th scope="col">Lama Perjalanan</th>
          <th scope="col">Harga Tiket</th>
        </tr>
      </thead>

      <tbody>
        <?php $i = 1;?>
        <?php foreach ($isi as $d) : ?>
        <tr>
          <th scope="row"><?= $i;?></th>
          <td><img class="mt-2" style="width:90px;height:40px;" src="<?= base_url()?>/assets/img/<?= $d['logo']?>.png" alt=""></td>
          <td><b><p class="mt-3"><?= $d['jadwal_kedatangan'];?></p></b></td>
            <td><div class="mb-1"><b><?= $d['jadwal_keberangkatan'];?></b></div><?= $d['bandara_asal'];?></td>
          <td><div class="mb-1"><b><?= $d['sampai_tujuan'];?></b></div><?= $d['bandara_tujuan'];?></td>
          <td><b><p class="mt-3"><?= $d['lama_perjalanan'];?> Jam</p></b></td>
          <td><div><b class="text-warning">Rp. <?= number_format($d['harga']) ;?></b></div> <a href="<?= base_url();?>pesawat/detail/<?= $d['id_jadwal_pesawat'];?>" class="btn btn-outline-warning mt-2">Pesan Tiket</a></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>

      </tbody>
    </table>
    </div>
  </div>
