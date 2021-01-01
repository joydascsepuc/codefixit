<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Action extends CI_Model {

	public function addData()
	{
		$data = array(

			'customer_id' => $this->input->post('customerName'),
			'product_id' => $this->input->post('productname')
		);

		$justify = $this->input->post('sellState');

		if ($justify == 1){
			$this->db->insert('customersalesproduct',$data);
		}else{
			$this->db->insert('customerpurchasedproduct',$data);
		}
	}

	public function getCustomerInfo()
	{
		
	}

	public function getCustomers()
	{
		$this->db->order_by('id','ASC');
		$query = $this->db->get('customer');
		return $query->result_array();
	}

	public function getProducts()
	{
		$this->db->order_by('id','ASC');
		$query = $this->db->get('product');
		return $query->result_array();		
	}	

}

/* End of file Model_Action.php */
/* Location: ./application/models/Model_Action.php */