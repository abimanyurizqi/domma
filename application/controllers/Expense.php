<?php
	class Expense extends CI_Controller{

		public function __contruct(){
			parent::__contruct();
			$this->load->library('form_validation');
		}


		public function expense_index(){

			if(!$this->session->userdata('email')){
			redirect('auth/index');
			}else{

				$this->load->model('Model_user_expense');

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$data['kategori_expense'] = $this->Model_user_expense->getKategori_expense();
			$data['kategori_expense_custom'] = $this->Model_user_expense->getKategori_expense_custom();
			


			$data['expense'] = $this->Model_user_expense->getExpense();
	

			$data['title'] = ('Input Expense');

			$this->form_validation->set_rules('expense', 'Expense', 'required|numeric');
			$this->form_validation->set_rules('kat_expense', 'kategori_expense', 'required');
			$this->form_validation->set_rules('date_expense', 'Date_expense', 'required');


			if($this->form_validation->run() == false){

				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/transaksi_expense', $data);
				$this->load->view('templates/footer_user', $data);

			}else{


					$this->Model_user_expense->tambah_expense();
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Expense <strong>Berhasil</strong> ditambahkan!
									</div>');
					redirect('Expense/expense_index');
			}
			}
			

			
		}


		public function tambahkategori_expense(){

			$this->load->model('Model_user_expense');
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


			$data['kategori_expense'] = $this->db->get_where('kategori_expense', ['id_user' => $this->session->userdata('id')])->result_array();

			$data['kategori_expense_default'] = $this->db->get_where('kategori_expense', ['id_user' => 0])->result_array();
			
			$is_unique = 1;

			foreach ($data['kategori_expense'] as $kategori_expense) {
				if(strcmp($this->input->post('nama_kategori_expense'), $kategori_expense['nama_kategori_expense'])==0){
					$is_unique = 0;
					break;
				}
			}

			foreach ($data['kategori_expense_default'] as $kategori_expense_default) {
				if(strcmp($this->input->post('nama_kategori_expense'), $kategori_expense_default['nama_kategori_expense'])==0){
					$is_unique = 0;
					break;
				}


			}
			if($is_unique == 1){
				$this->Model_user_expense->tambah_kategori_expense();
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Kategori Expense <strong>Berhasil</strong> ditambahkan!
									</div>');
				redirect('Expense/expense_index');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-times-circle"></i> Kategori Expense <strong>Sudah Ada!</strong>
									</div>');
				redirect('Expense/expense_index');
			}

		}

		public function hapus_expense($id_expense){

			$this->load->model('Model_user_expense');
			$this->Model_user_expense->delete_expense($id_expense);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Expense <strong>Berhasil</strong> dihapus!
									</div>');
			redirect('Expense/expense_index');
		}

		public function edit_expense($id_expense){
			
			$this->load->model('Model_user_expense');
			$data['title'] = 'Edit expense';
			$data['getExpensebyID'] = $this->Model_user_expense->getExpensebyID($id_expense);

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$data['kategori_expense'] = $this->Model_user_expense->getKategori_expense();
			$data['kategori_expense_custom'] = $this->Model_user_expense->getKategori_expense_custom();


			$this->form_validation->set_rules('expense', 'Expense', 'required|numeric');
			$this->form_validation->set_rules('kategori_expense', 'kategori_expense', 'required');
			$this->form_validation->set_rules('date_expense', 'Date_expense', 'required');

			if($this->form_validation->run() == false){

				$this->load->view('templates/header_user', $data);
				$this->load->view('templates/navbar_user', $data);
				$this->load->view('templates/sidebar_user', $data);
				$this->load->view('user/edit_expense', $data);
				$this->load->view('templates/footer_user', $data);

			}else{


					$this->Model_user_expense->ubah_expense();
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Transaksi Expense <strong>Berhasil</strong> diubah!
									</div>');
					redirect('Expense/expense_index');
			}


		}

	}