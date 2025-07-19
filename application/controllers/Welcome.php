<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		ob_start();
		@session_start(); 
		if(@$_SESSION['UEmail']!="")
		{
			
			if($_SESSION['UserType']==1 || @$_SESSION['SUPERADMIN']="SA")
				{
					$this->load->view('Main');
				}
				else
				{
			        $this->load->view('welcome_message');
				}
		}
		else
		{
                      
			$this->load->view('login');
		}
	}
	
	public function logout()
{
	@session_start();
				@session_destroy();
	$this->load->helper('url');
    redirect(scs_login, 'refresh');
}
}
