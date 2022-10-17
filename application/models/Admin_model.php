<?php

class Admin_model extends CI_Model{

  public function get_jadwal()
  {
    return $this->db->get("jadwal_keberangkatan_pesawat")->result_array();
  }

  public function pencarian_jadwal($key)
  {
      $this->db->like("nama_maskapai", $key);
      $this->db->or_like("kelas_penerbangan", $key);
      $this->db->or_like("kota_asal", $key);
      $this->db->or_like("kota_tujuan", $key);
      $this->db->or_like("bandara_asal", $key);
      $this->db->or_like("bandara_tujuan", $key);
      $this->db->or_like("harga", $key);
      return $this->db->get("jadwal_keberangkatan_pesawat")->result_array();
  }

  public function pencarian_pemesanan($key)
  {
      $this->db->like("nama_user", $key);
      $this->db->or_like("nama_maskapai", $key);
      $this->db->or_like("kelas_penerbangan", $key);
      $this->db->or_like("kota_asal", $key);
      $this->db->or_like("kota_tujuan", $key);
      $this->db->or_like("tanggal_keberangkatan", $key);
      $this->db->or_like("total_bayar", $key);
      return $this->db->get("pesan_pesawat")->result_array();
  }

  public function get_pemesanan()
  {
    return $this->db->get("pesan_pesawat")->result_array();
  }

  public function hapus_pemesanan($id)
  {
    $this->db->delete("pesan_pesawat", ["id_pemesanan_pesawat" => $id]);
    $this->session->set_flashdata("hapus_pemesanan", "<h5 class='text-success'><i><b>Data pemesanan dengan ID " . $id . " berhasil di Hapus</b></i></h5>");
    redirect("admin/pemesanan");
  }

  public function hapus_semua_pemesanan()
  {
    $this->db->empty_table("pesan_pesawat");
    $this->session->set_flashdata("hapus_pemesanan", "<h5 class='text-success'><i><b>Semua Data Pemesanan Berhasil di Hapus</b></i></h5>");
    redirect("admin/pemesanan");
  }

  public function hapus_jadwal($id)
  {
    $this->db->delete("jadwal_keberangkatan_pesawat", ["id_jadwal_pesawat" => $id]);
    redirect("admin/jadwal");
  }

  public function get_jadwal_penerbangan($id)
  {
    return $this->db->get_where("jadwal_keberangkatan_pesawat", ["id_jadwal_pesawat" => $id])->row_array();
  }

  public function tambah_penerbangan()
  {

    $nama_maskapai = $this->input->post("nama_maskapai");
    $kelas_penerbangan = $this->input->post("kelas_penerbangan");
    var_dump($nama_maskapai);

    //cek id pesawat
    switch ($nama_maskapai)
    {
      case "Garuda Indonesia":
        $id_pesawat = 1;
        break;

      case "Air Asia":
        $id_pesawat = 2;
        break;

      case "Lion Air":
        $id_pesawat = 3;
        break;

      case "Batik Air":
        $id_pesawat = 4;
        break;

      case "Batik Air":
        $id_pesawat = 4;
        break;
    }


    //cek id kelas
    switch ($kelas_penerbangan)
    {
      case "First Class":
        $id_kelas = 1;
        break;

      case "Business Class":
        $id_kelas = 2;
        break;

      case "Economy Class":
        $id_kelas = 3;
        break;
    }

    $data = [
      "id_pesawat" => $id_pesawat,
      "id_kelas" => $id_kelas,
      "nama_maskapai" => $this->input->post("nama_maskapai"),
      "kelas_penerbangan" => $this->input->post("kelas_penerbangan"),
      "kota_asal" => $this->input->post("kota_asal"),
      "kota_tujuan" => $this->input->post("nama_maskapai"),
      "bandara_asal" => $this->input->post("bandara_asal"),
      "bandara_tujuan" => $this->input->post("bandara_tujuan"),
      "jadwal_kedatangan" => $this->input->post("jadwal_kedatangan"),
      "jadwal_keberangkatan" => $this->input->post("jadwal_keberangkatan"),
      "sampai_tujuan" => $this->input->post("sampai_tujuan"),
      "lama_perjalanan" => $this->input->post("lama_perjalanan"),
      "harga" => $this->input->post("harga"),
      "logo" => $this->input->post("logo")
    ];

    $this->db->insert("jadwal_keberangkatan_pesawat", $data);

    $this->session->set_flashdata("edit_pemesanan", "<h5 class='text-success'><i><b>Penerbangan Berhasil di Edit</b></i></h5>");
    redirect("admin/jadwal");

  }

  public function edit_penerbangan($id)
  {

    $nama_maskapai = $this->input->post("nama_maskapai");
    $kelas_penerbangan = $this->input->post("kelas_penerbangan");
    var_dump($nama_maskapai);

    //cek id pesawat
    switch ($nama_maskapai)
    {
      case "Garuda Indonesia":
        $id_pesawat = 1;
        break;

      case "Air Asia":
        $id_pesawat = 2;
        break;

      case "Lion Air":
        $id_pesawat = 3;
        break;

      case "Batik Air":
        $id_pesawat = 4;
        break;

      case "Batik Air":
        $id_pesawat = 4;
        break;
    }


    //cek id kelas
    switch ($kelas_penerbangan)
    {
      case "First Class":
        $id_kelas = 1;
        break;

      case "Business Class":
        $id_kelas = 2;
        break;

      case "Economy Class":
        $id_kelas = 3;
        break;
    }

    $data = [
      "id_pesawat" => $id_pesawat,
      "id_kelas" => $id_kelas,
      "nama_maskapai" => $this->input->post("nama_maskapai"),
      "kelas_penerbangan" => $this->input->post("kelas_penerbangan"),
      "kota_asal" => $this->input->post("kota_asal"),
      "kota_tujuan" => $this->input->post("nama_maskapai"),
      "bandara_asal" => $this->input->post("bandara_asal"),
      "bandara_tujuan" => $this->input->post("bandara_tujuan"),
      "jadwal_kedatangan" => $this->input->post("jadwal_kedatangan"),
      "jadwal_keberangkatan" => $this->input->post("jadwal_keberangkatan"),
      "sampai_tujuan" => $this->input->post("sampai_tujuan"),
      "lama_perjalanan" => $this->input->post("lama_perjalanan"),
      "harga" => $this->input->post("harga"),
      "logo" => $this->input->post("logo")
    ];


    $this->db->where("id_jadwal_pesawat", $id);
    $this->db->update("jadwal_keberangkatan_pesawat", $data);

    $this->session->set_flashdata("edit_pemesanan", "<h5 class='text-success'><i><b>Penerbangan Berhasil di Edit</b></i></h5>");
    redirect("admin/jadwal");
  }





}
