<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesawat extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Pesawat_model');
  }

  public function result()
  {

    if (!$this->session->userdata("masukResult")) {
      $this->load->view("blank/index");
    } else {
      $data = [
        "cont" => $this->uri->segment(1),
        "method" => $this->uri->segment(2)
      ];

      $this->session->set_userdata($data);

      // var_dump($this->session->userdata("tanggal"));
      $kotaAsal = $this->session->userdata('kotaAsal');
      $kotaTujuan = $this->session->userdata('kotaTujuan');
      $jmlPenum = $this->session->userdata('jumlahPenumpang');
      $tanggal = $this->session->userdata("tanggal");
      $kelasPenerbangan = $this->session->userdata('kelasPenerbangan');

      $result['isi'] = $this->Pesawat_model->get_data($kotaAsal, $kotaTujuan, $kelasPenerbangan);

      $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

      // var_dump($result['isi']);  
      // $user["user"] = $this->Pesawat_model->get_user_data($email);

      if ($result['isi']) {
        $this->load->view('templates/user/header', $result);
        $this->load->view('pesawat/result', $result);
        $this->load->view('templates/user/footer');
      } else {
        $this->load->view('templates/user/header', $result);
        $this->load->view('errors/html/error_404.php');
        $this->load->view('templates/user/footer');
      }
    }
  }


  public function detail()
  {
    // if (!$this->session->userdata('email') && !$this->session->userdata('rule_id') == 2)
    // {
    //     redirect('auth');
    // }
    // else {

    $data = [
      "cont" => $this->uri->segment(1),
      "method" => $this->uri->segment(2)
    ];

    $this->session->set_userdata($data);

    // $result['isi'] = $this->Pesawat_model->get_data($kotaAsal, $kotaTujuan, $kelasPenerbangan);

    $data1["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

    $id = $this->uri->segment(3);
    $data2["tiket"] = $this->db->get_where("jadwal_keberangkatan_pesawat", ["id_jadwal_pesawat" => $id])->row_array();

    // $user["user"] = $this->Pesawat_model->get_user_data($email);

    $this->load->view('templates/user/header', $data1);
    $this->load->view('pesawat/detail', $data2);
    $this->load->view('templates/user/footer');
  }

  public function pembayaran()
  {
    if (!$this->session->userdata("email") && !$this->session->userdata("rule_id") == 2) {
      redirect("auth");
    } else {
      $id = $this->uri->segment(3);
      $this->Pesawat_model->pembayaran($id);
    }
  }


  public function tiket()
  {
    if (!$this->session->userdata("email") && !$this->session->userdata("rule_id") == 2) {
      redirect("auth");
    } else {

      $data1["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

      $id = $this->uri->segment(3);
      $data2["tiket"] = $this->Pesawat_model->getTiket($id);


      $this->load->view('templates/user/header', $data1);
      $this->load->view('pesawat/tiket', $data2);
      $this->load->view('templates/user/footer');
    }
  }

  public function hapusPencarian()
  {
    $this->Pesawat_model->hapusPencarian();
  }


  public function selesai()
  {
    $this->Pesawat_model->selesai();
  }
}
