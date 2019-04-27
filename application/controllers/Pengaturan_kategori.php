<?php

	class Pengaturan_kategori extends CI_Controller{

		public function pengaturankategori(){

			if(!$this->session->userdata('email')){
			redirect('auth/index');
			}else{

				$this->load->model('Model_kategori');
			
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$data['kategori_income'] = $this->Model_kategori->getAllKategoriIncome();
			$data['kategori_expense'] = $this->Model_kategori->getAllKategoriExpense();

				$data['title'] = ('Dashboard');
				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/pengaturan_kategori', $data);
				$this->load->view('templates/footer_user', $data);
			}
		}


		public function hapus_kategori_income($id_kategori_income){

			$this->load->model('Model_kategori');
			$this->Model_kategori->delete_kategori_income($id_kategori_income);


			$this->session->set_flashdata('message', '<<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Income <strong>Berhasil</strong> dihapus!
									</div>');
			redirect('Pengaturan_kategori/pengaturankategori');
		}



		public function edit_kategori_income($id_kategori_income){
			
			
       		
			
			$this->load->model('Model_kategori');
			$data['title'] = 'Edit Income';
			$data['getKategoriIncomebyID'] = $this->Model_kategori->getKategoriIncomebyID($id_kategori_income);

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['kategori_income'] = $this->Model_kategori->getAllKategoriIncome();


			$this->form_validation->set_rules('nama_kategori_income', 'Kategori_Income', 'required');
			

			if($this->form_validation->run() == false){

				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/edit_kategori_income', $data);
				$this->load->view('templates/footer_user', $data);

			}else{


					$this->Model_kategori->ubah_kategori_income();
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Kategori Income <strong>Berhasil</strong> diubah!
									</div>');
					redirect('Pengaturan_kategori/pengaturankategori');
			}


		}


		public function hapus_kategori_expense($id_kategori_expense){

			$this->load->model('Model_kategori');
			$this->Model_kategori->delete_kategori_expense($id_kategori_expense);


			$this->session->set_flashdata('message', '<<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi expense <strong>Berhasil</strong> dihapus!
									</div>');
			redirect('Pengaturan_kategori/pengaturankategori');
		}
		


		public function edit_kategori_expense($id_kategori_expense){
			
			
       		
			
			$this->load->model('Model_kategori');
			$data['title'] = 'Edit Expense';
			$data['getKategoriExpensebyID'] = $this->Model_kategori->getKategoriExpensebyID($id_kategori_expense);

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['kategori_expense'] = $this->Model_kategori->getAllKategoriExpense();


			$this->form_validation->set_rules('nama_kategori_expense', 'Kategori_Expense', 'required');
			

			if($this->form_validation->run() == false){

				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/edit_kategori_expense', $data);
				$this->load->view('templates/footer_user', $data);

			}else{


					$this->Model_kategori->ubah_kategori_expense();
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Kategori Expense <strong>Berhasil</strong> diubah!
									</div>');
					redirect('Pengaturan_kategori/pengaturankategori');
			}


		}
			


	



	}