<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function welcome(){
		/*For the Login Page First*/
		$this->load->view('templates/header');
		// $this->load->view('pages/index');
		$this->load->view('pages/website/index');
		$this->load->view('templates/footer');
	}

	public function shop(){
		$data['customers'] = $this->Model_Action->getCustomers();
		$data['products'] = $this->Model_Action->getProducts();

		$this->load->view('templates/header');
		$this->load->view('pages/website/shop',$data);
		$this->load->view('templates/footer');
	}

	public function dashboard(){
		$data['sales'] = $this->Model_Action->getSalesReport();
		$data['purchases'] = $this->Model_Action->getPuchasesReport();

		$this->load->view('templates/header');
		$this->load->view('pages/website/dashboard',$data);
		$this->load->view('templates/footer');	
	}

	public function customerInfo(){
		$data['customers'] = $this->Model_Action->getCustomers();
		$data['sales'] = NULL;
		$data['purchases'] = NULL;

		$this->load->view('templates/header');
		$this->load->view('pages/website/customerInfo',$data);
		$this->load->view('templates/footer');
	}

	public function saleReport(){
		$sale = $this->Model_Action->getsale();
		$purchase = $this->Model_Action->getpurchase();

		$data['data'] = $sale + $purchase;

		$this->load->view('templates/header');
		$this->load->view('pages/website/saleReport',$data);
		$this->load->view('templates/footer');
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */