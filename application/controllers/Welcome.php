<?php

class Welcome extends CI_Controller {

	public function index()
	{
		
		if($this->session->userdata('email')){
			redirect('C_sisa_uang/sisa_uang_index');
		}else{


		$this->load->view('templates/header_homepage');
		$this->load->view('templates/navbar_homepage');
		$this->load->view('landingpage/landing_page');
		$this->load->view('templates/footer_homepage');
	}
	}
}
