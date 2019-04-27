<?php

class Model_kategori extends CI_model{

	public function getAllKategoriIncome(){

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

	public function getAllKategoriExpense(){

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


	public function delete_kategori_income($id_kategori_income){

	$this->db->where('id_kategori_income', $id_kategori_income);
	$this->db->delete('kategori_income');

	}

	public function getKategoriIncomebyID($id_kategori_income){

		return $this->db->get_where('kategori_income', ['id_kategori_income' => $id_kategori_income])->row_array();
	}


	public function ubah_kategori_income(){

		$id=$this->session->userdata('id');
		$data = [

					"nama_kategori_income"=>$this->input->post('nama_kategori_income', true),
					"id_user"=>$id
				];
					
					$this->db->where('id_kategori_income', $this->input->post('id_kategori_income'));
					$this->db->update('kategori_income', $data);
	}



	public function getKategoriexpensebyID($id_kategori_expense){

		return $this->db->get_where('kategori_expense', ['id_kategori_expense' => $id_kategori_expense])->row_array();
	}


	public function delete_kategori_expense($id_kategori_expense){

	$this->db->where('id_kategori_expense', $id_kategori_expense);
	$this->db->delete('kategori_expense');

	}

	public function ubah_kategori_expense(){

		$id=$this->session->userdata('id');
		$data = [

					"nama_kategori_expense"=>$this->input->post('nama_kategori_expense', true),
					"id_user"=>$id
				];
					
					$this->db->where('id_kategori_expense', $this->input->post('id_kategori_expense'));
					$this->db->update('kategori_expense', $data);
	}

	
}