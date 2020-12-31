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

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */