<div class="jumbotron form"></div>
    <div class="card card1 m-auto">
      <form method="post" action="<?= base_url()?>pesawat/result">

      <div class="row mt-4"> 
        <div class="col-lg-3 geserFrom">
        <img src="<?= base_url()?>assets/icon/cari-bold.png" style="width:25px; margin-right:3px;" alt="">Destinasi pilihan anda
        </div>
      </div>

        <div class="row mt-4">
          <div class="col-lg-3 geserFrom"><label for="asal"><b>Kota Asal</b></label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="<?= base_url()?>assets/icon/naik-dual-tone.png" style="width:25px" alt=""></div>
                </div>
                <input type="text" name="kotaAsal" class="form-control" id="asal" placeholder="Medan (KNO)">
             </div><?= form_error("kotaAsal", "<small class='text-danger'><i>", "</i></small>");?>
          </div>

          <div class="pp">
          <i class="fas fa-exchange-alt"></i>
          </div>

          <div class="col-lg-3"><label for="tujuan"><b>Kota Tujuan</b></label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="<?= base_url()?>assets/icon/turun-dual-tone.png" style="width:25px" alt=""></div>
                </div>
                <input type="text" name="kotaTujuan" class="form-control" id="tujuan" placeholder="Bali (DPS)">
             </div><?= form_error("kotaTujuan", "<small class='text-danger'><i>", "</i></small>");?>
          </div>


          <div class="col-lg-5" ><label for="JumlahPenumpang"><b>Jumlah Penumpang</b></label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="<?= base_url()?>assets/icon/orang-dual-tone.png" style="width:25px" alt=""></div>
                </div>
                
                <input type="text" name="jumlahPenumpang" class="form-control" id="JumlahPenumpang" placeholder="2 Dewasa, 1 Anak, 1 Bayi">
             </div><?= form_error("jumlahPenumpang", "<small class='text-danger'><i>", "</i></small>");?>
          </div>
        </div>


        <!-- bagian ke dua -->

        <div class="row mt-4">
          <div class="col-lg-3 mr-4 geserFrom"><label for="tanggal"><b>Tanggal Keberangkatan</b></label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="<?= base_url()?>assets/icon/kalender-solid.png" style="width:25px" alt=""></div>
                </div>
                <input type="text" name="tanggal" onclick="(this.type='date')" class="form-control textbox-n" id="tanggal" placeholder="26 April 2027">
             </div><?= form_error("tanggal", "<small class='text-danger'><i>", "</i></small>");?>
          </div>

          <div class="col-lg-4"><label for="kelas"><b>Kelas Penerbangan</b></label>
              <div class="form-group">
                <div class="input-group mb-2">
                 <div class="input-group-prepend">
                  <div class="input-group-text"><img src="<?= base_url()?>assets/icon/kursi-solid.png" style="width:25px" alt=""></div>  
                  <select class="custom-select mr-sm-2" style="width:265px;" id="inlineFormCustomSelect" name="kelasPenerbangan">
                    <option selected value="first Class">Frist Class</option>
                    <option value="business Class">Business Class</option>
                    <option value="economy Class">Economy Class</option>
                  </select>
                </div>
                </div><?= form_error("kelasPenerbangan", "<small class='text-danger'><i>", "</i></small>");?>
             </div>
          </div>

          <div class="col-lg-2 ">
            <button type="submit" name="kirim" class="btn btn-outline-warning tCari"><img src="<?= base_url()?>assets/icon/cari-bold.png" style="width:25px" alt=""><b>Cari Tiket Pesawat</b></button>
          </div>
        </div>

        <div class="row form-footer">
          <div class="col">
            <p>Temukan Destinasi Wisata Favorit Anda Dengan Layanan Pemesanan Kami.</p>
          </div>
        </div>
      </form>
    </div>
