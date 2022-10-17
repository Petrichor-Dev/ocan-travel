<?php

     class Auth_model extends CI_Model{

      public function login()
      {
          $email = $this->input->post('email', true);
          $password = $this->input->post('password', true);
          $result = $this->db->get_where('user',['email' => $email])->row_array();

          if ( $result['email'] !== $email )
          {
              $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Mohon maaf, <b>Email</b> yang anda masukan salah.</div>');
              redirect('auth');
          } else {
              if ( password_verify($password, $result['password']) )
              {

                  $data = [
                      "email" => $result["email"],
                      "rule_id" => $result["rule_id"],
                      "nama" => $result["nama"],
                      "foto_profil" => $result["foto_profil"]
                  ];
                  $this->session->set_userdata($data);

                  switch ($result['rule_id'])
                  {
                      case 1;
                        redirect('pages');
                        break;

                      case 2;
                        redirect('Pesan');
                        break;

                      case 3;
                        redirect('pages/owner');
                        break;

                      case 4;
                        redirect('pages/menejer');
                        break;

                      case 5;
                        redirect('pages/kasir');
                        break;

                      case 6;
                        redirect('pages/pelayan');
                        break;
                  }

              } else {
                  $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Mohon maaf, <b>Password</b> yang anda masukan salah.</div>');
                  redirect('auth');

              }
          }
      }


        public function register(){
            date_default_timezone_set('asia/jakarta');
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'telpon' => $this->input->post('telpon', true),
                'foto_profil' => 'ini',
                'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'rule_id' => 2,
                'tanggal_login' => date('r | e')
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success"><i>Selamat anda <b>berhasil</b> teregistrasi. Silahkan login!</i></div>');
            redirect('auth');
        }


      public function logout()
      {
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('rule_id');
          $this->session->unset_userdata('cont');
          $this->session->unset_userdata('method');
          $this->session->unset_userdata("kotaAsal");
          $this->session->unset_userdata("kotaTujuan");
          $this->session->unset_userdata("jumlahPenumpang");
          $this->session->unset_userdata("tanggal");
          $this->session->unset_userdata("kelasPenerbangan");
          $this->session->unset_userdata("nama_user");
          $this->session->unset_userdata("nama_maskapai");
          $this->session->unset_userdata("kelas_penerbangan");
          $this->session->unset_userdata("total_bayar");
          $this->session->unset_userdata("codeVerifikasi");
          $this->session->unset_userdata("icon_maskapai");

          $this->session->set_flashdata('pesan', '<div class="alert alert-success">Anda berhasil <b>Logout</b>.</div>');

          echo "<script>alert('kamu berhasil logout')</script>";
          redirect('pesan');

      }

    }

?>
