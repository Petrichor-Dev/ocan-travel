<section id="hero" style="width: 100%;
  height: 80vh;
  background: url('http://localhost/travel/assets/img/hero3.jpg');
  background-size: cover;
  background-position:0 -140px;
  position: relative;
  background-repeat:no-repeat;">
  <div class="hero">
    <h1>みなさん、こんにちは...</h1>
    <p>Selamat menikmati perjalanan anda</p>
  </div>
</section>
<div class="card card1 m-auto">
  <form method="post">

    <div class="row mt-4">
      <div class="col-lg-3 geserFrom">
        <img src="<?= base_url() ?>assets/icon/cari-bold.png" style="width:25px; margin-right:3px;" alt="">Destinasi pilihan anda
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-3 geserFrom"><label for="asal"><b>Kota Asal</b></label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><img src="<?= base_url() ?>assets/icon/naik-dual-tone.png" style="width:25px" alt=""></div>
          </div>
          <input type="text" name="kotaAsal" class="form-control" id="asal" placeholder="Jakarta (CKG)">
        </div><?= form_error("kotaAsal", "<small class='text-danger'><i>", "</i></small>"); ?>
      </div>

      <div class="pp">
        <img style="width: 40 px; height: 25px; margin-left: -12px; margin-right: -12px; margin-top: 40px;
            display: inline-block;" src="<?= base_url() ?>assets/icon/ubah-solid.png" alt="">
      </div>

      <div class="col-lg-3"><label for="tujuan"><b>Kota Tujuan</b></label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><img src="<?= base_url() ?>assets/icon/turun-dual-tone.png" style="width:25px" alt=""></div>
          </div>
          <input type="text" name="kotaTujuan" class="form-control" id="tujuan" placeholder="Medan (KNO)">
        </div><?= form_error("kotaTujuan", "<small class='text-danger'><i>", "</i></small>"); ?>
      </div>


      <div class="col-lg-5"><label for="JumlahPenumpang"><b>Jumlah Penumpang</b></label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><img src="<?= base_url() ?>assets/icon/orang-dual-tone.png" style="width:25px" alt=""></div>
          </div>

          <input type="text" name="jumlahPenumpang" class="form-control" id="JumlahPenumpang" placeholder="2 Dewasa, 1 Anak, 1 Bayi">
        </div><?= form_error("jumlahPenumpang", "<small class='text-danger'><i>", "</i></small>"); ?>
      </div>
    </div>


    <!-- bagian ke dua -->

    <div class="row mt-4">
      <div class="col-lg-3 mr-4 geserFrom"><label for="tanggal"><b>Tanggal Keberangkatan</b></label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><img src="<?= base_url() ?>assets/icon/kalender-solid.png" style="width:25px" alt=""></div>
          </div>
          <input type="text" name="tanggal" onclick="(this.type='date')" class="form-control textbox-n" id="tanggal" placeholder="26 April 2027">
        </div><?= form_error("tanggal", "<small class='text-danger'><i>", "</i></small>"); ?>
      </div>

      <div class="col-lg-4"><label for="kelas"><b>Kelas Penerbangan</b></label>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><img src="<?= base_url() ?>assets/icon/kursi-solid.png" style="width:25px" alt=""></div>
              <select class="custom-select mr-sm-2" style="width:265px;" id="inlineFormCustomSelect" name="kelasPenerbangan">
                <option selected value="First Class">Frist Class</option>
                <option value="Business Class">Business Class</option>
                <option value="Economy Class">Economy Class</option>
              </select>
            </div>
          </div><?= form_error("kelasPenerbangan", "<small class='text-danger'><i>", "</i></small>"); ?>
        </div>
      </div>

      <div class="col-lg-2 ">
        <button type="submit" name="kirim" class="btn btn-outline-warning tCari"><img src="<?= base_url() ?>assets/icon/cari-bold.png" style="width:25px" alt=""><b>Cari Tiket Pesawat</b></button>
      </div>
    </div>

    <div class="row form-footer">
      <div class="col">
        <p>Temukan Destinasi Wisata Favorit Anda Dengan Layanan Pemesanan Kami.</p>
      </div>
    </div>
  </form>
</div>