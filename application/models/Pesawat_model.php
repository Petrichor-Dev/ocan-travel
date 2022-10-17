<?php
class Pesawat_model extends CI_Model{

    public function get_data($data1, $data2, $data3)
    {
        $kotaAsal = $data1;
        $kotaTujuan = $data2;
        $kelasPenerbangan = $data3;

        $this->db->like("kota_asal", $kotaAsal);
        $this->db->like("kota_tujuan", $kotaTujuan);
        $this->db->like("kelas_penerbangan", $kelasPenerbangan);
        return $this->db->get("jadwal_keberangkatan_pesawat")->result_array();
    }

    public function get_user_data($data)
    {
        $this->db->where("email", $data);
        return $this->db->get("user");
    }

    public function pembayaran($id)
    {
      $jadwal = $this->db->get_where("jadwal_keberangkatan_pesawat", ["id_jadwal_pesawat" => $id])->row_array();

      $user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

      $codeVerifikasi = $this->session->userdata("email") . " " . date("l, j F Y ~ G:i");


      $data = [
        "id_pesawat" => $jadwal["id_pesawat"],
        "nama_maskapai" => $jadwal["nama_maskapai"],
        "id_user" => $user["id_user"],
        "nama_user" => $user["nama"],
        "id_kelas" => $jadwal["id_kelas"],
        "kelas_penerbangan" => $jadwal["kelas_penerbangan"],
        "tanggal_keberangkatan" => $this->session->userdata("tanggal"),
        "kota_tujuan" => $this->session->userdata("kotaTujuan"),
        "kota_asal" => $this->session->userdata("kotaAsal"),
        "jumlah_penumpang" => $this->session->userdata("jumlahPenumpang"),
        "harga_tiket" => $jadwal["harga"],
        "total_bayar" => $jadwal["harga"] * $this->session->userdata("jumlahPenumpang"),
        "code_verifikasi" => md5($codeVerifikasi)
      ];

      //masukan data
      $this->db->insert("pesan_pesawat", $data);

      redirect("pesawat/tiket/" . $id);
    }

    public function getTiket($id)
    {
      $jadwal = $this->db->get_where("jadwal_keberangkatan_pesawat", ["id_jadwal_pesawat" => $id])->row_array();

      $user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

      $codeVerifikasi = $this->session->userdata("email") . " " . date("l, j F Y ~ G:i");

      $data = [

        "nama_user" => $user["nama"],
        "bandara_asal" =>$jadwal["bandara_asal"],
        "bandara_tujuan" =>$jadwal["bandara_tujuan"],
        "nama_maskapai" => $jadwal["nama_maskapai"],
        "icon_maskapai" => $jadwal["logo"],
        "kelas_penerbangan" => $jadwal["kelas_penerbangan"],
        "total_bayar" => $jadwal["harga"] * $this->session->userdata("jumlahPenumpang"),
        "codeVerifikasi" => $codeVerifikasi
      ];

      $this->session->set_userdata($data);
      $this->session->set_flashdata('tiket', '<div class="alert alert-success"><i>Selamat, pemesanan tiket pesawat anda telah <b>Selesai.</b> </i></div>');
    }

    public function hapusPencarian()
    {
      $this->session->unset_userdata("kotaAsal");
      $this->session->unset_userdata("kotaTujuan");
      $this->session->unset_userdata("jumlahPenumpang");
      $this->session->unset_userdata("tanggal");
      $this->session->unset_userdata("kelasPenerbangan");

      redirect("pesan");
    }


    public function selesai()
    {
      $this->session->unset_userdata("kotaAsal");
      $this->session->unset_userdata("kotaTujuan");
      $this->session->unset_userdata("jumlahPenumpang");        $this->session->unset_userdata("tanggal");        $this->session->unset_userdata("kelasPenerbangan");
      $this->session->unset_userdata("nama_user");
      $this->session->unset_userdata("nama_maskapai");
      $this->session->unset_userdata("kelas_penerbangan");
      $this->session->unset_userdata("total_bayar");        $this->session->unset_userdata("codeVerifikasi");        $this->session->unset_userdata("icon_maskapai");

      redirect('pesan');

    }






































}
