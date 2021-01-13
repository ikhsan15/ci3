<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('M_Pegawai');
  }

	public function index(){
    $recordPgw = $this->M_Pegawai->getDataPegawai();
    $DATA = array('data_pgw' => $recordPgw);
    $this->load->view('home', $DATA);
	}
	public function formInput(){
		$this->load->view('form_input');
	}
	public function formEdit($id){
    $recordPgw = $this->M_Pegawai->getDataPgwDetail($id);

    $DATA = array('data_pgw' => $recordPgw);    
		$this->load->view('form_edit', $DATA);
  }
  public function AksiInsert(){
    // $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $gender = $this->input->post('gender');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');

    $DataInsert = array(
      'nama' => $nama,
      'tmp_lahir' => $tmp_lahir,
      'tgl_lahir' => $tgl_lahir,
      'gender' => $gender,
      'no_hp' => $no_hp,
      'email' => $email,
    );

    $this->M_Pegawai->InsertDataPgw($DataInsert);
    redirect (base_url('Welcome'));
  }
  public function AksiEdit(){
    $nama = $this->input->post('nama');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $gender = $this->input->post('gender');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');

    $DataUpdate = array(
      'nama' => $nama,
      'tmp_lahir' => $tmp_lahir,
      'tgl_lahir' => $tgl_lahir,
      'gender' => $gender,
      'no_hp' => $no_hp,
      
    )
  }


}
