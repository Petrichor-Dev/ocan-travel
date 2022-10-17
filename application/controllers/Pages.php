<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{
    
    public function index()
    {

        if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
        {
            if ( $this->session->userdata('rule_id') == 1 )
            {
                $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();
                
                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                  ];

                $this->session->set_userdata($data);

                $this->load->view('templates/admin/header', $result);
                $this->load->view('templates/admin/sidebar', $result);
                $this->load->view('pages/admin', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer', $result);
            } else {
                
                $this->load->view('blank/index');
                
            }
            
        } else {
            redirect('auth');
            die;
        }
    }

    public function owner()
    {
        if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
        {
            if ( $this->session->userdata('rule_id') == 3 )
            {
                $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                  ];

                $this->session->set_userdata($data);

                $this->load->view('templates/admin/header', $result);
                $this->load->view('templates/admin/sideOwner', $result);
                $this->load->view('pages/admin', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer', $result);
            } else {
                
                $this->load->view('blank/index');
                
            }
            
        } else {
            redirect('auth');
            die;
        }
    }

    public function menejer()
    {
        if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
        {
            if ( $this->session->userdata('rule_id') == 4 )
            {
                $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                  ];

                $this->session->set_userdata($data);

                $this->load->view('templates/admin/header', $result);
                $this->load->view('templates/admin/sideMenejer', $result);
                $this->load->view('pages/admin', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer', $result);
            } else {
                
                $this->load->view('blank/index');
                
            }
            
        } else {
            redirect('auth');
            die;
        }
    }
    
    public function kasir()
    {
        if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
        {
            if ( $this->session->userdata('rule_id') == 5 )
            {
                $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();

                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                  ];

                $this->session->set_userdata($data);

                $this->load->view('templates/admin/header', $result);
                $this->load->view('templates/admin/sideKasir', $result);
                $this->load->view('pages/admin', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer', $result);
            } else {
                
                $this->load->view('blank/index');
                
            }
            
        } else {
            redirect('auth');
            die;
        }
    }

    public function pelayan()
    {
        if ($this->session->userdata('email')&&$this->session->userdata('rule_id'))
        {
            if ( $this->session->userdata('rule_id') == 6 )
            {
                $result["data"] = $this->db->get_where("user", ["email" => $this->session->userdata('email')])->row_array();
                
                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                  ];

                $this->session->set_userdata($data);
                
                $this->load->view('templates/admin/header', $result);
                $this->load->view('templates/admin/sidePelayan', $result);
                $this->load->view('pages/admin', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer', $result);
            } else {
                
                $this->load->view('blank/index');
                
            }
            
        } else {
            redirect('auth');
            die;
        }
    }

    public function blank()
    {
        $satu = $this->session->userdata("cont");
        $dua = $this->session->userdata("method");
        redirect($satu . "/". $dua);
    }
}