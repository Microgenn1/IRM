<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index()
	{
		$this->load->view('Setting/'.base64_decode($_REQUEST['lk']));
	}
    public function Rig()
	{
		$this->load->view('Setting/Udet');
	}
	
}
