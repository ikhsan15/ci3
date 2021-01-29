<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('M_Pegawai');
    
    // require_once APPPATH.'third_party/dompdf2/dompdf_config.inc.php';
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
    
    $config['upload_path']          = './assets/images/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;
    $this->load->library('upload', $config);

      $foto = $this->upload->data();
      $foto = $foto['file_name'];

      $DataInsert = array(
        'nama' => $this->input->post('nama'),
        'tmp_lahir' => $this->input->post('tmp_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'gender' => $this->input->post('gender'),
        'no_hp' => $this->input->post('no_hp'),
        'email' => $this->input->post('email'),
      );
      $this->M_Pegawai->InsertDataPgw($DataInsert);
      redirect (base_url('Welcome'));

      // print_r($config);
  }
  public function AksiEdit(){
    $id = $this->input->post('id');
    
    $DataUpdate = array(
      'nama' => $this->input->post('nama'),
      'tmp_lahir' => $this->input->post('tmp_lahir'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'gender' => $this->input->post('gender'),
      'no_hp' => $this->input->post('no_hp'),
      'email' => $this->input->post('email'),
    );
    if('foto' != null){
      $DataUpdate = array(
        'foto' => $this->input->post('foto'),
      );
    }else{
      // 'foto' => $this->input->post('foto')
      $foto = base_url(assets/images/$data_pgw->foto);
    }
    $this->M_Pegawai->EditDataPgw($DataUpdate, $id);
    redirect (base_url());
  }
  public function AksiDelete($id){
    $this->M_Pegawai->DeleteDataPgw($id);
    redirect (base_url());
  }
  
  public function PrintPdf($id){
    
    $this->load->library('dompdf_gen');

    // if ( !$this->get_option("enable_remote") && ($this->_protocol != "" && $this->_protocol !== "file://" ) ) {
    //   throw new DOMPDF_Exception("Remote file requested, but DOMPDF_ENABLE_REMOTE is false.");
    // }
    $_options = array(
    "enable_remote" => DOMPDF_ENABLE_REMOTE,
    );
    $recordPgw = $this->M_Pegawai->getPdf($id);
    $DATA = array('data_pgw' => $recordPgw);

    $this->load->view('laporan_pdf', $DATA);
    $this->dompdf->set_option('isRemoteEnabled', true);
    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
    // $this->dompdf->getOptions('isRemoteEnabled', TRUE);
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    
    $this->dompdf->stream("laporan_pegawai.pdf", array('Attachment' => false ));
  }
        // $this->output->get_output();
        // $this->load->library('pdf');
        // $this->dompdf->loadHtml($html);
        // $this->dompdf->set_option('isRemoteEnabled', true);
        // $this->dompdf->setPaper('A4', 'portrait');
        // $this->dompdf->render();
        // $this->dompdf->stream("studentidcard.pdf", array("Attachment"=>0));
  
  public function export_tcpdf($id){
    $data['data_pribadi'] = $this->M_Pegawai->getPdf($id);
		$this->load->view('laporan_tcpdf', $data);
  }
  



}
