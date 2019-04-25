<?php

	class Model_user_expense extends CI_model{

		public function getExpense(){

		$id = $this->session->userdata('id');
		
		$this->db->select('expense.id_expense,expense.nominal_expense,expense.id_kategori_expense,date_expense,id,nama_kategori_expense');
		$this->db->from('expense');
		$this->db->join('kategori_expense','kategori_expense.id_kategori_expense=expense.id_kategori_expense');
		$this->db->where('id', $id);

		$query = $this->db->get();
		return $query->result_array();
		}


		public function getKategori_expense(){

		$id = $this->session->userdata('id');


		$this->db->select('id_kategori_expense,nama_kategori_expense,id_user');
		$this->db->from('kategori_expense');
		$this->db->where('id_user',0);




		$data = array();
		$query = $this->db->get();
		if($query->num_rows()>0){
			foreach ($query->result_array() as $row){
				$data[]=$row;
			}
		}
		$query->free_result();
		return $data;
	}


	public function getKategori_expense_custom(){

		$id = $this->session->userdata('id');


		$this->db->select('id_kategori_expense,nama_kategori_expense,id_user');
		$this->db->from('kategori_expense');
		$this->db->where('id_user', $id);




		$data = array();
		$query = $this->db->get();
		if($query->num_rows()>0){
			foreach ($query->result_array() as $row){
				$data[]=$row;
			}
		}
		$query->free_result();
		return $data;
	}

	
	public function tambah_kategori_expense(){

		$id=$this->session->userdata('id');
		$data = [

				"nama_kategori_expense" => $this->input->post('nama_kategori_expense', true),
				"id_user" => $id,

		];

		$this->db->insert('kategori_expense', $data);
	}


	public function tambah_expense(){

		$id=$this->session->userdata('id');
		$data = [

					"nominal_expense"=>$this->input->post('expense', true),
					"date_expense"=>$this->input->post('date_expense',true),
					"id_kategori_expense"=>$this->input->post('kat_expense',true),
					"id"=>$id
				];
					

					$this->db->insert('expense', $data);
	}

	public function delete_expense($id_expense){

		$this->db->where('id_expense', $id_expense);
		$this->db->delete('expense');

	}

	public function getExpensebyID($id_expense){

		return $this->db->get_where('expense', ['id_expense' => $id_expense])->row_array();
	}

	public function ubah_expense(){
		$id=$this->session->userdata('id');
		$data = [

					"nominal_expense"=>$this->input->post('expense', true),
					"date_expense"=>$this->input->post('date_expense',true),
					"id_kategori_expense"=>$this->input->post('kategori_expense',true),
					"id"=>$id
				];
					
					$this->db->where('id_expense', $this->input->post('id_expense'));
					$this->db->update('expense', $data);
		}

	}