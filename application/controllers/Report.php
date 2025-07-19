<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
		$this->load->view('Report/'.trim(base64_decode($_REQUEST['lk'])));
	}
	public function Rep()
	{
		 $qry = "exec ".$_REQUEST['RepName']." '".$_REQUEST['fdate']."','".$_REQUEST['tdate']."'";
		 $fld =$_REQUEST["Rfld"];
		 $arry = explode(',',$fld );
		  
		 foreach( $arry as $str)
          {
			  if (strpos(strtolower($str),'date') !== false) {
				  
				   $qry =$qry."'".$this->Dat($_REQUEST[$str])."',"; 
				  }
				  else
				  {
			 		 $qry =$qry."'".$_REQUEST[$str]."',"; 
				  }
		  }
		  $len=strlen($qry)-1;
	  $qry=substr($qry,0,$len);
	  $this->htable->Html_Report($qry);
	}
	public function Dat($arr)
    {
		$Odate = explode(' ', $arr);
		$aryy =str_replace('-','/',$Odate[0]) ;
	$date = explode('/',$aryy);
	$month = $date[1];
	$day   = $date[2];
	$year  = $date[0];
	return $day."/".$month."/".$year;
        
    }
	
}
