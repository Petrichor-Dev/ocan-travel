<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    public function __construct()
    {   
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Auth_model');
    }



    public function index()
    {
      //cek terlebih dahulu apakah sudah login atau belum
      //jika sudah, blok dia jika ingin kembali ke halaman register tanpa melakukan logout
      if ( $this->session->userdata("email") && $this->session->userdata("rule_id") )
      {
        $satu = $this->session->userdata("cont");
        $dua = $this->session->userdata("method");
        redirect($satu . "/". $dua);

      } else {

        //rule validasi login
        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email", [
            "required"      =>  "Isi terlebih dahulu Alamat Email anda",
            "valid_email"   =>  "Alamat Email anda tidak valid"
        ]);

        $this->form_validation->set_rules("password", "Password", "required|trim", [
            "required"      =>  "Isi terlebih dahulu Password anda"
        ]);
        

        if ( $this->form_validation->run() == false )
        {
            $this->load->view('auth/index');

        } else {
            $this->Auth_model->login();

        }
      }

        

    }

    public function register()
    {
      //cek terlebih dahulu apakah sudah login atau belum
      //jika sudah, blok dia jika ingin kembali ke halaman register tanpa melakukan logout
      if ( $this->session->userdata('email')&&$this->session->userdata('rule_id') )
      {
        $s = $this->session->userdata('kembali');
        redirect('pages/' . $s);
        
      } else {
          
        //aturan validasi register
        $this->form_validation->set_rules("nama", "Nama", "required|trim|alpha_numeric_spaces", [
            "required"      =>  "Isi terlebih dahulu Nama Lengkap anda",
            "alpha_numeric_spaces" => "Nama hanya dapat berupa huruf dan angka"
            
        ]);

        $this->form_validation->set_rules("telpon", "Nomor telpon", "required|numeric|trim|max_length[12]|min_length[10]|is_unique[user.telpon]", [
            "required"      =>  "Isi terlebih dahulu Nomor Telpon anda",
            "numeric"       =>  "Nomor Telpon harus berupa angka",
            "max_length"    =>  "Nomor Telpon anda tidak valid",
            "min_length"    =>  "Nomor Telpon anda tidak valid",
            "is_unique"     =>  "Alamat Email ini sudah pernah di daftarkan"
        ]);
        

        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[user.email]", [
            "required"      =>  "Isi terlebih dahulu Alamat Email anda",
            "valid_email"   =>  "Alamat Email anda tidak valid",
            "is_unique"     =>  "Alamat Email ini sudah pernah di daftarkan"
        ]);

        $this->form_validation->set_rules("password1", "Password", "required|trim|min_length[7]|matches[password2]", [
            "required"      =>  "Isi terlebih dahulu Password anda",
            "min_length"    =>  "Password minimal 7 karakter",
            "matches"       =>  "Password tidak sama"
        ]);

        $this->form_validation->set_rules("password2", "Password", "required|trim|matches[password1]", [
            "required"      =>  "Isi terlebih dahulu Konfirmasi Password anda",
            "matches"       =>  "Password tidak sama"
        ]);


        if ( $this->form_validation->run() == false )
            {
                $this->load->view('auth/register'); 

            } else {
                $this->Auth_model->register();

            }
      }
        
    }



    public function logout()
    {
        $this->Auth_model->logout();
    }

}
