<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$this->load->view('Process/'.base64_decode($_REQUEST['lk']));
	}
	
}
