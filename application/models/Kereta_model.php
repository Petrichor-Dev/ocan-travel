<?php

class Kereta_model extends CI_Model{

  public function get_data($data1, $data2)
  {
      $kotaAsal = $data1;
      $kotaTujuan = $data2;

      $this->db->like("kota_asal", $kotaAsal);
      $this->db->like("kota_tujuan", $kotaTujuan);
      return $this->db->get("jadwal_keberangkatan_kereta")->result_array();
  }




}
