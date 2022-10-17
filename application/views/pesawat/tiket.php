
<div class="container tiket">
  <div class="row" style="margin-bottom:-5px;">
    <div class="col-lg-5" >
      <?= $this->session->flashdata('tiket');?>
    </div>

    <div class="col-lg-7">
      <p class="card-text mt-3 text-right">
        <b>
          <img src="<?= base_url()?>assets/icon/plane2-bold.png" style="width:25px; margin-right:3px;" alt="">
          Bandara <?= $this->session->userdata("bandara_asal")?> &LongRightArrow;
          <?= $this->session->userdata("bandara_tujuan")?> ~
          <?= $this->session->userdata("nama_maskapai");?>
        </b>
      </p>
    </div>


  </div>

    <div class="card">
    <table class="table text-center">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Maskapai</th>
          <th scope="col">Kelas Penerbangan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Asal</th>
          <th scope="col">Tujuan</th>
          <th scope="col">Penumpang</th>
          <th scope="col">Total Harga</th>

        </tr>
      </thead>

      <tbody>

        <tr style="font-weight:600;margin-bottom:-20px;" class="text-center ">
          <td >
            <p class="mt-3"><?= $this->session->userdata("nama_user")?></p>
          </td>

          <td>
            <img class="mt-2" src="<?= base_url()?>/assets/img/<?= $this->session->userdata("icon_maskapai")?>.png" style="width:90px; height:50px;" alt="">
          </td>

          <td><p class="mt-3"><?= $this->session->userdata("kelas_penerbangan")?></p> </td>
          <td><p class="mt-3"><?= $this->session->userdata("tanggal")?></p></td>
          <td><b><p class="mt-3">
            <?= $this->session->userdata("kotaAsal")?>
          </p> </b></td>
          <td><b><p class="mt-3">
             <?= $this->session->userdata("kotaTujuan")?>
          </p></b></td>
          <td><p class="mt-3"><?= $this->session->userdata("jumlahPenumpang")?> Orang</p> </td>
          <td class="text-warning"><p class="mt-3"><b>Rp. <?= number_format($this->session->userdata("total_bayar"))?>,-</b> </p> </td>


        </tr>

      </tbody>

    </table>
  </div>

  <div class="row mt-2">
    <div class="col-lg-6">
      <ul class="list-group list-group-horizontal-md">
          <li  class="list-group-item"><b class="text-primary">Kode Verifikasi Tiket :</b> <?= md5($this->session->userdata("codeVerifikasi"))?></li>
      </ul>
    </div>

    <div class="col-lg-6">
      <div class="">
        <a href="<?= base_url()?>pesawat/selesai" class="btn btn-outline-primary mt-1 float-right" style="border:2px solid; font-weight:600;padding:8px;border-radius:10px;">Pesan Tiket Lainnya</a>
      </div>
    </div>

  </div>

</div>
