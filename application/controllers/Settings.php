<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		$this->load->view('Settings/'.base64_decode($_REQUEST['lk']));
	}
    public function Rig()
	{
		$this->load->view('Settings/Udet');
	}
	
}
