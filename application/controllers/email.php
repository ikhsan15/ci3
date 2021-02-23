<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Email extends CI_Controller{
    public function index(){
      $config = array(
        'protocol' => 'smtp',
        // 'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => 'sansbuster@gmail.com',
        'smtp_pass' => 'sandriilove15',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
      );

      // $this->load->library('email', $config);
      $this->load->library('email');
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      $this->email->from('sansbuster@gmail.com', 'Name');
      $this->email->to('ikhsan15nur@gmail.com');
      // $this->load->cc('test1@gmail.com');
      // $this->load->bcc('test2@gmail.com');
      $this->email->subject('test email');
      $this->email->message('mtest email aja');

      // return $this->email->send();
      // echo $this->email->print_debugger();
      // Tampilkan pesan sukses atau error
      
      if ($this->email->send()) {
        echo 'Sukses! email berhasil dikirim.';
      } else {
        echo 'Error! email tidak dapat dikirim.';
      }
    }  
  }
  




?>