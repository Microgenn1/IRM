<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends CI_Controller {

	public function index()
	{
		$this->load->view('Security/'.base64_decode($_REQUEST['lk']));
	}
	
}
