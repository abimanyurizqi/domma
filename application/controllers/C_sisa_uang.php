<?php

class C_sisa_uang extends CI_Controller{



	public function sisa_uang_index(){

		if(!$this->session->userdata('email')){
			redirect('auth/index');
		}else{

			$this->load->model('Model_sisa_uang');
		
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['total_income'] = $this->Model_sisa_uang->getSum_income();
		$data['total_expense'] = $this->Model_sisa_uang->getSum_expense();
		$data['total_income_bykategori'] = $this->Model_sisa_uang->getSum_incomebykategori();
		$data['total_expense_bykategori'] = $this->Model_sisa_uang->getSum_expensebykategori();
		

			$data['title'] = ('Dashboard');
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/navbar_user', $data);
			$this->load->view('templates/sidebar_user', $data);
			$this->load->view('user/sisa_uang', $data);
			$this->load->view('templates/footer_user', $data);
		}

		
	}
}