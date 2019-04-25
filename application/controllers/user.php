<?php
	class user extends CI_Controller{


		public function __constuct(){
				parent::__constuct();
				$this->load->library('form_validation');
				
		
		}

		
		#USER MENU

		public function index(){

			if(!$this->session->userdata('email')){
			redirect('auth/index');
			}else{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['title'] = ('Dashboard');
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/navbar_user', $data);
			$this->load->view('templates/sidebar_user', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer_user', $data);
			

			}
			
		}
	

		public function profile(){

			if(!$this->session->userdata('email')){
			redirect('auth/index');
			}else{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['title'] = ('My Profile');
			
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/navbar_user', $data);
			$this->load->view('templates/sidebar_user', $data);
			$this->load->view('user/profile', $data);
			$this->load->view('templates/footer_user', $data);

			}
			
		}

		#END OF USERMENU


		




	
	








	}

