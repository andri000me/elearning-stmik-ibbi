<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {
	function __construct(){
		parent::__construct();
			//validasi jika user belum login 
			if($this->session->userdata('islogin') != 'masukdsn'){
				redirect('login');
			}
			$this->load->model("materi_model");
			$this->load->helper("security");
		}

	public function index()
	{
		$this->load->view('dosen/materi_view');
	} 
}
