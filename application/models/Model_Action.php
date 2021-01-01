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
		$customer_id = $this->input->post('customerName');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('customersalesproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$customerid = $value['customer_id'];
			$productid = $value['product_id'];

			$this->db->where('id',$customerid);
			$query = $this->db->get('customer');
			$ret = $query->row();
			$customerName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$productName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$data[$key]['customer_id'] = $customerName;
			$data[$key]['product_id'] = $productName;
			$data[$key]['product_price'] = $price;
		}

		return $data;
	}


	public function getCustomerInfo1()
	{
		$customer_id = $this->input->post('customerName');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('customerpurchasedproduct');
		//$query = $this->db->get('customerpurchasedproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$customerid = $value['customer_id'];
			$productid = $value['product_id'];

			$this->db->where('id',$customerid);
			$query = $this->db->get('customer');
			$ret = $query->row();
			$customerName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$productName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$data[$key]['customer_id'] = $customerName;
			$data[$key]['product_id'] = $productName;
			$data[$key]['product_price'] = $price;
		}

		return $data;
	}

	public function getsale()
	{
		$this->db->order_by('created_at','DESC');
		$query = $this->db->get('customersalesproduct');
		//$query = $this->db->get('customerpurchasedproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$customerid = $value['customer_id'];
			$productid = $value['product_id'];

			$this->db->where('id',$customerid);
			$query = $this->db->get('customer');
			$ret = $query->row();
			$customerName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$productName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$data[$key]['customer_id'] = $customerName;
			$data[$key]['product_id'] = $productName;
			$data[$key]['product_price'] = $price;
			$data[$key]['report'] = 'Sale';
		}

		return $data;
	}

	public function getpurchase()
	{
		$this->db->order_by('created_at','DESC');
		$query = $this->db->get('customerpurchasedproduct');
		//$query = $this->db->get('customerpurchasedproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$customerid = $value['customer_id'];
			$productid = $value['product_id'];

			$this->db->where('id',$customerid);
			$query = $this->db->get('customer');
			$ret = $query->row();
			$customerName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$productName = $ret->name;

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$data[$key]['customer_id'] = $customerName;
			$data[$key]['product_id'] = $productName;
			$data[$key]['product_price'] = $price;
			$data[$key]['report'] = 'Purchased';
		}

		return $data;
	}

	public function getSalesReport()
	{
		/*$this->db->order_by('created_at','DESC');
		$query = $this->db->get('customerpurchasedproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$productid = $value['product_id'];

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$data[$key]['product_id'] = $price;
		}

		return $data;	*/

		$query = $this->db->query('select year(created_at) as year, month(created_at) as month from customersalesproduct group by year(created_at), month(created_at)');   
		$hello = $query->result_array();

		$query = $this->db->get('customersalesproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$productid = $value['product_id'];

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$mydate = $value['created_at'];
			$month = date("m",strtotime($mydate));
			$year = date("Y",strtotime($mydate));

			$data[$key]['product_id'] = $price;
			$data[$key]['month'] = $month;
			$data[$key]['year'] = $year;
		}

		$amount = 0;

		foreach ($hello as $key => $ok) {
			$month = $ok['month'];
			$year = $ok['year'];

			foreach ($data as $ke => $value) {
				if (($value['month'] == $month) && ($value['year'] == $year)) {
					$amount += $value['product_id'];		
				}
			}
			$hello[$key]['total'] = $amount;
			$amount = 0;
		}

		return $hello;
	}

	public function getPuchasesReport()
	{
		$query = $this->db->query('select year(created_at) as year, month(created_at) as month from customerpurchasedproduct group by year(created_at), month(created_at)');   
		$hello = $query->result_array();

		$query = $this->db->get('customerpurchasedproduct');
		$data = $query->result_array();

		foreach($data as $key => $value){
			$productid = $value['product_id'];

			$this->db->where('id',$productid);
			$query = $this->db->get('product');
			$ret = $query->row();
			$price = $ret->price;

			$mydate = $value['created_at'];
			$month = date("m",strtotime($mydate));
			$year = date("Y",strtotime($mydate));

			$data[$key]['product_id'] = $price;
			$data[$key]['month'] = $month;
			$data[$key]['year'] = $year;
		}

		$amount = 0;

		foreach ($hello as $key => $ok) {
			$month = $ok['month'];
			$year = $ok['year'];

			foreach ($data as $ke => $value) {
				if (($value['month'] == $month) && ($value['year'] == $year)) {
					$amount += $value['product_id'];		
				}
			}
			$hello[$key]['total'] = $amount;
			$amount = 0;
		}

		return $hello;
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