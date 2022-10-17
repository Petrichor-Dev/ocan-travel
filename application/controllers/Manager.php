<?php

class Manager extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model('Manager_model');
  }


  //method untuk menampilakn data jadwal penerbangan
  public function jadwal()
    {

    //cek apakah dia sudah login
    if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
      {

        //cek apakah yang masuk adalah admin
        if ( $this->session->userdata('rule_id') == 4 )
          {

            //dapatkan data user
            $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

            //dapatkan data penerbangan
            $key = $this->input->post("keyword");
            if (!$key)
            {
              $jadwal["jadwalPesawat"] = $this->Manager_model->get_jadwal();
            } else {
              $jadwal["jadwalPesawat"] = $this->Manager_model->pencarian_jadwal($key);
            }

            //set alamat kembali
            $data = [
                "cont" => $this->uri->segment(1),
                "method" => $this->uri->segment(2)
              ];

            $this->session->set_userdata($data);

            //tampilkan view
            $this->load->view('templates/admin/header', $result);
            $this->load->view('templates/admin/sidebar', $result);
            $this->load->view('manager/jadwal', $jadwal);
            $this->load->view('templates/admin/sidebarKanan');
            $this->load->view('templates/admin/footer', $result);
        }

        else{
          //jika yang masuk bukanlah admin maka arahkan ke halaman blank
          $this->load->view('blank/index');

        }
    }

    else{
      //jika belum login, arahkan ke halaman login
      redirect('auth');
      die;
    }
  }

    //method untuk menghapus salah satu data pemesanan
  public function hapus_pemesanan()
  {
    $id = $this->uri->segment(3);
    $this->Manager_model->hapus_pemesanan($id);
  }

  //method untuk menghapus semua data pemesanan
  public function hapus_semua_pemesanan()
  {
    $this->Manager_model->hapus_semua_pemesanan();
  }

  //method utnuk menambah data penerbangan
  public function tambah()
  {
    if ($this->session->userdata("email")&&$this->session->userdata("rule_id"))
    {
      if ($this->session->userdata("rule_id") == 4)
      {

        //dapatkan data user
        //dapatkan data user
        $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

        //dapatkan data penerbangan
        $jadwal["jadwalPesawat"] = $this->Manager_model->get_pemesanan();

        //set alamat kembali
        $data = [
            "cont" => $this->uri->segment(1),
            "method" => $this->uri->segment(2)
          ];

        $this->session->set_userdata($data);


        $this->load->view('templates/admin/header', $result);
        $this->load->view('templates/admin/sidebar', $result);
        $this->load->view('manager/tambah_penerbangan', $jadwal);
        $this->load->view('templates/admin/sidebarKanan');
        $this->load->view('templates/admin/footer', $result);
      } else {
        $this->load->view('blank/index');
      }

    } else {
      redirect("auth");
    }
  }

  //method untuk menambah data
  public function tambah_penerbangan()
  {
    if ($this->session->userdata("email")&&$this->session->userdata("rule_id"))
    {
      if ($this->session->userdata("rule_id") == 4)
      {
        $this->Manager_model->tambah_penerbangan();
      }
      else
      {
        $this->load->view('blank/index');
      }
    }
    else
    {
      redirect("auth");
    }
  }

  //method untuk mengedit data
  public function edit_penerbangan($id)
  {
    if ($this->session->userdata("email")&&$this->session->userdata("rule_id"))
    {
      if ($this->session->userdata("rule_id") == 4)
      {
        $this->Manager_model->edit_penerbangan($id);
      }
      else
      {
        $this->load->view('blank/index');
      }
    }
    else
    {
      redirect("auth");
    }
  }



  //controller edit penerbangan
  public function edit()
  {
    if ($this->session->userdata("email")&&$this->session->userdata("rule_id"))
    {
      if ($this->session->userdata("rule_id") == 4)
      {

        //dapatkan data user
        //dapatkan data user
        $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

        //dapatkan data penerbangan
        $jadwal["jadwalPesawat"] = $this->Manager_model->get_jadwal_penerbangan($this->uri->segment(3));

        //set alamat kembali
        $data = [
            "cont" => $this->uri->segment(1),
            "method" => $this->uri->segment(2)
          ];

        $this->session->set_userdata($data);


        $this->load->view('templates/admin/header', $result);
        $this->load->view('templates/admin/sidebar', $result);
        $this->load->view('manager/edit_penerbangan', $jadwal);
        $this->load->view('templates/admin/sidebarKanan');
        $this->load->view('templates/admin/footer', $result);
      } else {
        $this->load->view('blank/index');
      }

    } else {
      redirect("auth");
    }
  }







}
