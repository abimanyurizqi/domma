<?php 

class Model_sisa_uang extends CI_model{


	public function getSum_income(){

		$id = $this->session->userdata('id');



		$sql = "SELECT SUM(income.nominal_income) AS total_income FROM income WHERE income.id=$id";
		$result = $this->db->query($sql);
		return $result->row()->total_income;

	}

	
	public function getSum_expense(){
		
		$id = $this->session->userdata('id');



		$sql = "SELECT SUM(expense.nominal_expense) AS total_expense FROM expense WHERE expense.id=$id";
		$result = $this->db->query($sql);
		return $result->row()->total_expense;
	}

	public function getSum_incomebykategori(){

		$id = $this->session->userdata('id');



		$sql = "SELECT SUM(income.nominal_income) AS total_income_kategori, kategori_income.nama_kategori_income FROM income JOIN kategori_income ON kategori_income.id_kategori_income=income.id_kategori_income WHERE income.id=$id GROUP BY income.id_kategori_income ";

		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getSum_expensebykategori(){

		$id = $this->session->userdata('id');



		$sql = "SELECT SUM(expense.nominal_expense) AS total_expense_kategori, kategori_expense.nama_kategori_expense FROM expense JOIN kategori_expense ON kategori_expense.id_kategori_expense=expense.id_kategori_expense WHERE expense.id=$id GROUP BY expense.id_kategori_expense ";

		$result = $this->db->query($sql);
		return $result->result_array();
	}

}