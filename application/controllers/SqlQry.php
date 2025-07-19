<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SqlQry extends CI_Controller {

	public function index()
	{
		$qry=$_REQUEST['Qry'];
		$this->db->query($qry);
		echo 'Updated Successfully !!!';
	}
	public function Act($act,$link)
	{
		$qry="update Mas_Review set act=1 where Review_Id=".$act;
		$this->db->query($qry);
		$this->load->view($link."/".base64_decode($_REQUEST['lk']));
	}
	public function ReAct($act,$link)
	{
		$qry="update Mas_Review set act=0 where Review_Id=".$act;
		$this->db->query($qry);
		$this->load->view($link."/".base64_decode($_REQUEST['lk']));
	}
	public function DeAct($act,$link)
	{
		$qry="delete from Mas_Review  where Review_Id=".$act;
		$this->db->query($qry);
		$this->load->view($link."/".base64_decode($_REQUEST['lk']));
	}
	
}
