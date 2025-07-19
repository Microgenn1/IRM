<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reprint extends CI_Controller {

	public function index()
	{
		$this->load->view('Reprint/'.base64_decode($_REQUEST['lk']));
	}
	public function BReprint()
	{
		$this->load->view('Reprint/print');
	}
	public function CReprint()
	{
		$this->load->view('Reprint/Cprint');
	}
	public function AllReprint()
	{
		$this->load->view('Reprint/Allprints');
	}
	
}
