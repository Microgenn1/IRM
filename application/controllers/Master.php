<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		$this->load->view('Master/'.base64_decode($_REQUEST['lk']));
	}
	
}
