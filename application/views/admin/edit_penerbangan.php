<div class="content-wrapper">
  <section class="content-header">
    <h5 style="margin-left:30px;">
      <i><b>Tambah Data Jadwal Penerbangan</b></i>
    </h5>
    <ol class="breadcrumb" style="margin-right:30px;">
      <li><a href="<?= ()?>admin"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li class="active">Pesawat</li>
      <li class="active">Tambah Penerbangan</li>
    </ol>
  </section>

  <section class="content" >
    <div class="container" >
      <div class="row">
        <div class="col-lg-12">
          <div class="jumbotron" style="background-color:#374850; border-radius:30px; padding-top:30px; padding-bottom:30px;">
            <form action="<?= ()?>admin/edit_penerbangan/<?= $this->uri->segment(3);?>" method="post">


              <div class="row">

                <div class="col-lg-2">
                  <div class="input-group">
                    <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="kelas_penerbangan">Kelas penerbangan</label>
                    <select id="kelas_penerbangan" value="<?= $jadwalPesawat['kelas_penerbangan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" class="custom-select mr-sm-2" name="nama_maskapai">
                        <option selected value="<?= $jadwalPesawat['nama_maskapai']?>"><?= $jadwalPesawat['nama_maskapai']?></option>
                        <option value="Garuda Indonesia">Garuda Indonesia</option>
                        <option value="Air Asia">Air Asia</option>
                        <option value="Lion Air">Lion Air</option>
                        <option value="Batik Air">Batik Air</option>
                        <option value="Citilink">Citilink</option>
                      </select>
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="kelas_penerbangan">Kelas penerbangan</label>
                  <select id="kelas_penerbangan" value="<?= $jadwalPesawat['kelas_penerbangan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" class="custom-select mr-sm-2" name="kelas_penerbangan">
                      <option selected value="<?= $jadwalPesawat['kelas_penerbangan']?>">Frist Class</option>
                      <option value="First Class">Frist Class</option>
                      <option value="Business Class">Business Class</option>
                      <option value="Economy Class">Economy Class</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="kota_asal">Kota asal</label>
                  <input id="kota_asal" value="<?= $jadwalPesawat['kota_asal']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="text" class="form-control" placeholder="Kota asal" name="kota_asal" value="<?= $jadwalPesawat['kota_asal']?>">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="kota_tujuan">Kota tujuan</label>
                  <input id="kota_tujuan" value="<?= $jadwalPesawat['kota_tujuan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="text" class="form-control" placeholder="Kota tujuan" name="kota_tujuan" value="<?= $jadwalPesawat['kota_tujuan']?>">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="bandara_asal">Bandara asal</label>
                  <input id="bandara_asal" value="<?= $jadwalPesawat['bandara_asal']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="text" class="form-control" placeholder="Bandara asal" name="bandara_asal" value="<?= $jadwalPesawat['bandara_asal']?>">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="bandara_tujuan">Bandara tujuan</label>
                  <input id="bandara_tujuan" value="<?= $jadwalPesawat['bandara_tujuan']?>" style="margin: 0; border-bottom-right-radius: 5px; border-top-right-radius: 5px; margin-top:5px; width:175px; height:38px;" type="text" class="form-control" placeholder="Bandara tujuan" name="bandara_tujuan" value="<?= $jadwalPesawat['bandara_tujuan']?>">
                  </div>
                </div>
              </div>

              <div class="row" style="margin-top:10px;">
                <div class="col-lg-2">
                  <div class="input-group">

                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="jadwal_kedatangan">Jadwal kedatangan</label>
                    <input id="jadwal_kedatangan" value="<?= $jadwalPesawat['jadwal_kedatangan']?>" style="margin: 0; border-bottom-left-radius: 5px; border-top-left-radius: 5px; margin-top:5px; width:175px; height:38px;" type="time" class="form-control" placeholder="Jadwal kedatangan" name="jadwal_kedatangan">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="jadwal_keberangkatan">Jadwal keberangkatan</label>
                  <input id="jadwal_keberangkatan" value="<?= $jadwalPesawat['jadwal_keberangkatan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="time" class="form-control" placeholder="Jadwal keberangkatan" name="jadwal_keberangkatan">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="sampai_tujuan">Sampai tujuan</label>
                  <input id="sampai_tujuan" value="<?= $jadwalPesawat['sampai_tujuan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="time" class="form-control" placeholder="Sampai tujuan" name="sampai_tujuan">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="lama_perjalanan">Lama perjalanan (jam)</label>
                  <input id="lama_perjalanan" value="<?= $jadwalPesawat['lama_perjalanan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="text" class="form-control" placeholder="lama perjalanan" name="lama_perjalanan">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                  <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="harga">Harga</label>
                  <input id="harga" value="<?= $jadwalPesawat['harga']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" type="text" class="form-control" placeholder="Rp,-" name="harga">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="input-group">
                    <label style="color:whitesmoke; text-align: center; margin-top:15px; margin-bottom:0;" for="kelas_penerbangan">logo</label>
                    <select id="kelas_penerbangan" value="<?= $jadwalPesawat['kelas_penerbangan']?>" style="margin: 0; margin-top:5px; width:175px; height:38px;" class="custom-select mr-sm-2" name="logo">
                        <option selected value="<?= $jadwalPesawat['nama_maskapai']?>"><?= $jadwalPesawat['nama_maskapai']?></option>
                        <option value="Garuda Indonesia">Garuda Indonesia</option>
                        <option value="Air Asia">Air Asia</option>
                        <option value="Lion Air">Lion Air</option>
                        <option value="Batik Air">Batik Air</option>
                        <option value="Citilink">Citilink</option>
                      </select>
                  </div>
                </div>
              </div>

              <a href="<?= ()?>admin/jadwal" style="margin-left:740px;  display:inline-block; color: #f39c12; margin-top:20px; border-radius: 10px; padding:7px 20px; border: 2px solid#f39c12;"><b>Batal</b></a>

              <button class="btn btn-warning" style="clear:right; float: right; margin-top:20px; border-radius: 10px; margin-right: -30px; padding:7px 20px;" type="submit" name="kirim"><b>Edit Jadwal Penerbangan</b></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
