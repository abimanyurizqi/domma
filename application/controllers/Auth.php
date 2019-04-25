<?php
	class Auth extends CI_Controller{

		public function __constuct(){
			parent::__constuct();
			$this->load->library('form_validation');
		
		}
		public function index(){
			
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if( $this->form_validation->run() == false){

				$data['title'] = 'Login Dompet Mahasiswa';
				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/login');
				$this->load->view('templates/auth_footer');
			}else{

				$this->_login();
			}
		}


		private function _login(){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			
			if($user){

				if(password_verify($password, $user['password'])){

					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						'role_id' => $user['role_id']

					];
					$this->session->set_userdata($data);
					redirect('C_sisa_uang/sisa_uang_index');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> Wrong Password!</a></div>');
						redirect('auth/index');

				}

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> Email not registed!</a></div>');
					redirect('auth/index');
			}
		}

		public function logout(){

			$this->session->unset_userdata('email');
			$this->session->unset_userdata('role_id');
			$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> You have logged out!</a></div>');
				redirect('auth/index');

		}

		public function registration(){
			
			$this->form_validation->set_rules('name', 'Name', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
					'is_unique' => 'This email has already registered!'
			]);
			$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
			$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

			if( $this->form_validation->run() == false){
				$data['title'] = 'Registration';	
				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/registration');
				$this->load->view('templates/auth_footer');
			}else{
				
				$data = [
							'name'=>htmlspecialchars($this->input->post('name', true)),
							'email'=>htmlspecialchars($this->input->post('email', true)),
							'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
							'date_created'=>time()
				];

				$this->db->insert('user', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Well done!</strong> You successfully registered! please login</a></div>');
				redirect('auth/index');
			}			
			
		}
	}