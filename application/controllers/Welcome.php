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
    $foto = $this->input->post('foto');

    $DataInsert = array(
      'nama' => $nama,
      'tmp_lahir' => $tmp_lahir,
      'tgl_lahir' => $tgl_lahir,
      'gender' => $gender,
      'no_hp' => $no_hp,
      'email' => $email,
      'foto' => $foto,
    );

    $this->M_Pegawai->InsertDataPgw($DataInsert);
    redirect (base_url('Welcome'));
  }
  public function AksiEdit(){
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $gender = $this->input->post('gender');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');
    $foto = $this->input->post('foto');

    $DataUpdate = array(
      'nama' => $nama,
      'tmp_lahir' => $tmp_lahir,
      'tgl_lahir' => $tgl_lahir,
      'gender' => $gender,
      'no_hp' => $no_hp,
      'foto' => $foto,
    );

    $this->M_Pegawai->EditDataPgw($DataUpdate, $id);
    redirect (base_url());
  }
  public function AksiDelete($id){
    $this->M_Pegawai->DeleteDataPgw($id);
    redirect (base_url());
  }
  
  public function PrintPdf($id){
    $this->load->library('dompdf_gen');

    $recordPgw = $this->M_Pegawai->getPdf($id);
    $DATA = array('data_pgw' => $recordPgw);

    $this->load->view('laporan_pdf', $DATA);
    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_pegawai.pdf", array('Attachment' =>0 ));
  }


}
