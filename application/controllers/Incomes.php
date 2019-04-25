<?php

	class Incomes extends CI_Controller{

		public function __constuct(){
				parent::__constuct();
				$this->load->library('form_validation');
				
		
		}

		#INCOME


		public function income(){

			if(!$this->session->userdata('email')){
			redirect('auth/index');
			}else{

				$this->load->model('Model_user_income');

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$data['kategori_income'] = $this->Model_user_income->getKategori_income();
			$data['kategori_income_custom'] = $this->Model_user_income->getKategori_income_custom();


			$data['income'] = $this->Model_user_income->getIncome();

	

			$data['title'] = ('Input Income');

			$this->form_validation->set_rules('income', 'Income', 'required|numeric');
			$this->form_validation->set_rules('kat', 'kategori_income', 'required');
			$this->form_validation->set_rules('date_income', 'Date_income', 'required');


			if($this->form_validation->run() == false){

				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/transaksi_income', $data);
				$this->load->view('templates/footer_user', $data);

			}else{


					$this->Model_user_income->tambah_income();
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Income <strong>Berhasil</strong> ditambahkan!
									</div>');
					redirect('Incomes/income');
			}

			
			}
			

		}

		public function tambahkategori(){

			$this->load->model('Model_user_income');
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['kategori_income'] = $this->db->get_where('kategori_income', ['id_user' => $this->session->userdata('id')])->result_array();
			$data['kategori_income_default'] = $this->db->get_where('kategori_income', ['id_user' => 0])->result_array();
			
			$is_unique = 1;

			foreach ($data['kategori_income'] as $kategori_income) {
				if(strcmp($this->input->post('nama_kategori_income'), $kategori_income['nama_kategori_income'])==0){
					$is_unique = 0;
					break;
				}
			}

			foreach ($data['kategori_income_default'] as $kategori_income_default) {
				if(strcmp($this->input->post('nama_kategori_income'), $kategori_income_default['nama_kategori_income'])==0){
					$is_unique = 0;
					break;
				}
			}


			if($is_unique == 1){
				$this->Model_user_income->tambah_kategori();
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Kategori Income <strong>Berhasil</strong> ditambahkan!
									</div>');
				redirect('Incomes/income');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-times-circle"></i> Kategori Income <strong>Sudah Ada!</strong>
									</div>');
				redirect('Incomes/income');
			}
		
		}


		public function hapus_income($id_income){

			$this->load->model('Model_user_income');
			$this->Model_user_income->delete_income($id_income);


			$this->session->set_flashdata('message', '<<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Income <strong>Berhasil</strong> dihapus!
									</div>');
			redirect('Incomes/income');
		}


		

		public function edit_income($id_income){
			
			$this->load->model('Model_user_income');
			$data['title'] = 'Edit Income';
			$data['getIncomebyID'] = $this->Model_user_income->getIncomebyID($id_income);

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$data['kategori_income'] = $this->Model_user_income->getKategori_income();
			$data['kategori_income_custom'] = $this->Model_user_income->getKategori_income_custom();


			$this->form_validation->set_rules('income', 'Income', 'required|numeric');
			$this->form_validation->set_rules('kat', 'kategori_income', 'required');
			$this->form_validation->set_rules('date_income', 'Date_income', 'required');

			if($this->form_validation->run() == false){

				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/edit_income', $data);
				$this->load->view('templates/footer_user', $data);

			}else{


					$this->Model_user_income->ubah_income();
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Income <strong>Berhasil</strong> diubah!
									</div>');
					redirect('Incomes/income');
			}


		}

		#END OF INCOME


	}




