<div class="container detail">
  <div class="row">
    <div class="col-lg-9">
      <a href="<?= base_url()?>pesawat/result" class="btn btn-outline-danger mb-2 batalPesan">&LongLeftArrow; Ganti Pemesanan</a>
    </div>

    <div class="col-lg-3 text-right mt-2">
      <h5><b><i>Detail Penerbangan</i></b></h5>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-lg-12 ">
      <div class="card" style="width: 100%; background-color:whitesmoke;">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <h5 class="card-title ml-4">Penerbangan dari <?= $tiket["kota_asal"]?> ke <?= $tiket["kota_tujuan"]?></h5>
            </div>
            <div class="col-lg-6">
              <p class="float-right"><img src="<?= base_url()?>assets/icon/kalender-solid.png" style="width:17px; margin-bottom:5px; margin-right:2px;" alt=""><b><i><?= $this->session->userdata("tanggal")?></i></b></p>
            </div>
          </div>
          <p class="card-text"><b><img src="<?= base_url()?>assets/icon/plane2-solid.png" style="width:20px; margin-right:5px;" alt="">Bandara <?= $tiket["bandara_asal"]?> &LongRightArrow; <?= $tiket["bandara_tujuan"]?> ~ <?= $this->session->userdata("kelasPenerbangan");?></b></p>
          <div>
            <b><img src="<?= base_url()?>assets/icon/orang-dual-tone.png" style="width:20px; margin-bottom:5px; margin-right:5px;" alt="">Jumlah Penumpang : <?= $this->session->userdata("jumlahPenumpang")?> orang</b>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row dua">
    <div class="col-lg-7">
      <div class="card">
        <h5 class="card-header"><img src="<?= base_url()?>assets/icon/plane2-light.png" style="width:25px; margin-bottom:5px; margin-right:2px;" alt=""> <?= $tiket["bandara_asal"]?> &LongRightArrow; <?= $tiket["bandara_tujuan"]?></h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3">
              <img src="<?= base_url()?>/assets/img/<?= $tiket["logo"]?>.png" style="width:100px; height:50px" alt="">
            </div>
            <div class="col-lg-9">
              <b><p class="mt-3"><?= $this->session->userdata("kelasPenerbangan")?></p></b>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-lg-2">
              <?= $tiket["kota_asal"]?>
              <p><b><?= $tiket["jadwal_keberangkatan"]?></b></p>
            </div>

            <p class="mt-3" style="margin-left:-15px;">&LongRightArrow;</p>

            <div class="col-lg-2">
              <?= $tiket["kota_tujuan"]?>
              <p><b><?= $tiket["sampai_tujuan"]?></b></p>
            </div>

            <div class="col-lg-3">
              Lama Perjalanan
              <p><b><?= $tiket["lama_perjalanan"]?> Jam</b></p>
            </div>

            <div class="col-lg-3">
              Harga Awal
              <p><b class="text-primary">Rp. <?= number_format($tiket["harga"])?>,-</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card">
        <h5 class="card-header">Rincian Harga</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              <p class="card-text">

                  <?= $tiket["nama_maskapai"];?> x (<?= $this->session->userdata("jumlahPenumpang")?> orang) :

              </p>
            </div>

            <div class="col-lg-4 float-right">
              <b>
                Rp. <?= number_format($this->session->userdata("jumlahPenumpang") * $tiket["harga"]);?>,-
              </b>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-lg-10">
              <p class="card-text">
                Bagasi Barang < 2 kg :
              </p>
            </div>
            <div class="col-lg-2">
              <b class="text-right">
                Rp. 0
              </b>
            </div>
          </div>

        </div>
       <div class="card-footer pt-4">
         <div class="row">
           <div class="col-lg-8">
             <p>Harga Yang Anda Bayar : </p>

           </div>
           <div class="col-lg-4 float-right">
             <b class="text-primary text-right">Rp. <?= number_format($this->session->userdata("jumlahPenumpang") * $tiket["harga"]);?>,-</b>
           </div>
         </div>
       </div>
      </div>

      <a href="<?= base_url()?>pesawat/pembayaran/<?= $tiket['id_jadwal_pesawat']?>" class="btn btn-outline-warning float-right bayar mt-2">Lanjutkan Pembayaran &LongRightArrow;</a>
    </div>
  </div>
</div>


































<!-- Button trigger modal -->
<!-- <button type="button" class="text-primary" data-toggle="modal" data-target="#exampleModalCenter">
  detail
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div> -->
