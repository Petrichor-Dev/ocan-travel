<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Pesan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

        //method untuk halaman user
    public function index()
    {

        // if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
        // {
            if ( $this->session->userdata('rule_id') == 1 ||
                 $this->session->userdata('rule_id') == 3 ||
                 $this->session->userdata('rule_id') == 4 ||
                 $this->session->userdata('rule_id') == 5 ||
                 $this->session->userdata('rule_id') == 6  )
            {
                $this->load->view('blank/index');
            } else {


                $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                ];

                $this->session->set_userdata($data);

                //rules
                $this->form_validation->set_rules("kotaAsal", "kota_asal", "required|trim|alpha", [
                    "required" => "Isi Terlebih Dahulu Kota Asal Anda",
                    "alpha" => "nama tidak valid"
                ]);

                $this->form_validation->set_rules("kotaTujuan", "kota_tujuan", "required|trim|alpha", [
                    "required" => "isi terlebih dahulu destinasi kota",
                    "alpha" => "nama tidak valid"
                ]);

                $this->form_validation->set_rules("jumlahPenumpang", "jumlah_penumpang", "required|trim|numeric", [
                    "required" => "Isi Terlebih Dahulu Jumlah Penumpang",
                    "numeric" => "Hanya Boleh Menginputkan Angka"
                ]);

                $this->form_validation->set_rules("tanggal", "Tanggal", "required|trim", [
                    "required" => "Isikan Tanggal Penerbangan Anda",
                ]);

                $this->form_validation->set_rules("kelasPenerbangan", "kelas_penerbangan", "required|trim", [
                    "required" => "Isikan     Tanggal Penerbangan Anda"
                ]);

                //cek validasi dengan form_validation run
                if ($this->form_validation->run() == false)
                {
                    $this->load->view("templates/user/header", $result);
                    $this->load->view("pesan/index", $result);
                    $this->load->view("templates/user/footer");
                }
                else {
                    $data = [
                      "kotaAsal" => $this->input->post("kotaAsal"),
                      "kotaTujuan" => $this->input->post("kotaTujuan"),
                      "jumlahPenumpang" => $this->input->post("jumlahPenumpang"),
                      "tanggal" => $this->input->post("tanggal"),
                      "kelasPenerbangan" => $this->input->post("kelasPenerbangan"),
                      "masukResult" => "Result"

                    ];
                    $this->session->set_userdata($data);
                    redirect("Pesawat/result");
                }
            } }

    public function kereta(){
        if ( $this->session->userdata('rule_id') == 1 ||
                 $this->session->userdata('rule_id') == 3 ||
                 $this->session->userdata('rule_id') == 4 ||
                 $this->session->userdata('rule_id') == 5 ||
                 $this->session->userdata('rule_id') == 6  )
            {

                $this->load->view('blank/index');

            } else {
            $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

            $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                ];

                $this->session->set_userdata($data);

            $this->load->view("templates/user/header", $result);
            $this->load->view("pesan/kereta", $result);
            $this->load->view("templates/user/footer");
        }

    }


    public function makanan(){
        if ( $this->session->userdata('rule_id') == 1 ||
                 $this->session->userdata('rule_id') == 3 ||
                 $this->session->userdata('rule_id') == 4 ||
                 $this->session->userdata('rule_id') == 5 ||
                 $this->session->userdata('rule_id') == 6  )
            {

                $this->load->view('blank/index');

            } else {
            $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

            $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                ];

                $this->session->set_userdata($data);

            $this->load->view("templates/user/header", $result);
            $this->load->view("pesan/makanan", $result);
            $this->load->view("templates/user/footer");
        }
    }



    public function hotel(){
        if ( $this->session->userdata('rule_id') == 1 ||
                 $this->session->userdata('rule_id') == 3 ||
                 $this->session->userdata('rule_id') == 4 ||
                 $this->session->userdata('rule_id') == 5 ||
                 $this->session->userdata('rule_id') == 6  )
            {

                $this->load->view('blank/index');

            } else {
            $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

            $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                ];

                $this->session->set_userdata($data);

            $this->load->view("templates/user/header", $result);
            $this->load->view("pesan/hotel", $result);
            $this->load->view("templates/user/footer");
        }

    }

}
