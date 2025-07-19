<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
    
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		 
			$this->load->view('Upload/'.base64_decode($_REQUEST['lk']), array('error' => ' ' ));
		 
	}
	function do_upload()
	{
		 
		$config =  array(
                  'upload_path'     => "./uploads/".@$_REQUEST['pat']."/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "5000",
                  'max_width'       => "5000"  ,
				  'file_name'       => $_REQUEST['id'].".jpg" 
                );    
				$this->load->library('upload', $config);
				if($this->upload->do_upload())
				{
					 
					$data = array('error' =>'Successfully saved !!!');
					$this->load->view('Upload/'.base64_decode($_REQUEST['lk']),$data);
				}
				else
				{
					$error = array('error' =>'Error');
					$this->load->view('Upload/'.base64_decode($_REQUEST['lk']),$error);
				}  
	}
	public function upload_file()
	{
		$path=scs_upload;$path2=scs_url;
		if (isset($_SERVER['HTTP_X_FILENAME'])) {
			$ext = explode(".",$_SERVER['HTTP_X_FILENAME']);
			file_put_contents(
				$path.$_REQUEST['filename'].".".$ext[1],
				file_get_contents('php://input')
			);
			echo $path2."img/upload/".$_REQUEST['filename'].".".$ext[1];
		}
		 
	}
}
