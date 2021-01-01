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
		$this->load->view('templates/header');
		$this->load->view('pages/website/dashboard');
		$this->load->view('templates/footer');	
	}

	public function customerInfo(){
		$data['customers'] = $this->Model_Action->getCustomers();

		$this->load->view('templates/header');
		$this->load->view('pages/website/customerInfo',$data);
		$this->load->view('templates/footer');
	}

	public function saleReport(){
		$this->load->view('templates/header');
		$this->load->view('pages/website/saleReport');
		$this->load->view('templates/footer');
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */