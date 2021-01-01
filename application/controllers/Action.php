<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	public function addAction(){
		$this->Model_Action->addData();
		redirect('Pages/shop');
	}

	public function customerInfo(){
		$data['customers'] = $this->Model_Action->getCustomers();
		$data['sales'] = $this->Model_Action->getCustomerInfo();
		$data['purchases'] = $this->Model_Action->getCustomerInfo1();
		$this->load->view('templates/header');
		$this->load->view('pages/website/customerInfo',$data);
		$this->load->view('templates/footer');
	}

}

/* End of file Action.php */
/* Location: ./application/controllers/Action.php */