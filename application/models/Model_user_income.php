<?php

class Model_user_income extends CI_model{

	
	public function getIncome(){


		$id = $this->session->userdata('id');
		
		$this->db->select('income.nominal_income,income.date_income,kategori_income.nama_kategori_income,id_income,income.id_kategori_income');
		$this->db->from('income');
		$this->db->join('kategori_income','kategori_income.id_kategori_income=income.id_kategori_income');
		$this->db->where('id', $id);

		$query = $this->db->get();
		return $query->result_array();
		
	}


	public function getKategori_income_custom(){

		$id = $this->session->userdata('id');


		$this->db->select('id_kategori_income,nama_kategori_income,id_user');
		$this->db->from('kategori_income');
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

	

	public function getKategori_income(){

		$id = $this->session->userdata('id');


		$this->db->select('id_kategori_income,nama_kategori_income,id_user');
		$this->db->from('kategori_income');
		$this->db->where('id_user', 0);




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

	public function tambah_kategori(){

		$id=$this->session->userdata('id');
		$data = [

				"nama_kategori_income" => $this->input->post('nama_kategori_income', true),
				"id_user" => $id,

		];

		$this->db->insert('kategori_income', $data);
	}


	public function tambah_income(){

		$id=$this->session->userdata('id');
		$data = [

					"nominal_income"=>$this->input->post('income', true),
					"date_income"=>$this->input->post('date_income',true),
					"id_kategori_income"=>$this->input->post('kat',true),
					"id"=>$id
				];
					

					$this->db->insert('income', $data);
	}



	public function delete_income($id_income){

		$this->db->where('id_income', $id_income);
		$this->db->delete('income');

	}

	public function getIncomebyID($id_income){

		return $this->db->get_where('income', ['id_income' => $id_income])->row_array();
	}


	public function ubah_income(){

		$id=$this->session->userdata('id');
		$data = [

					"nominal_income"=>$this->input->post('income', true),
					"date_income"=>$this->input->post('date_income',true),
					"id_kategori_income"=>$this->input->post('kat',true),
					"id"=>$id
				];
					
					$this->db->where('id_income', $this->input->post('id_income'));
					$this->db->update('income', $data);
	}



}