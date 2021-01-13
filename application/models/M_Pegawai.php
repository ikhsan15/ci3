<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
  public function getDataPegawai(){
    $this->db->select('*');
    $this->db->from('data_pribadi');
    $query = $this->db->get();
    return $query->result();
  }
  public function InsertDataPgw($data){
    $this->db->insert('data_pribadi',$data);
  }
  public function EditDataPgw($data, $id){
    $this->db->where('id', $id);
    $this->db->update('data_pribadi', $data);
  }
  public function getDataPgwDetail($id){
    $this->db->where('id', $id);
    $query = $this->db->get('data_pribadi');
    return $query->row();
  }
}



?>