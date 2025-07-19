<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		if(@$_REQUEST['dlinke'])
		{
			  $qry=" Login1 '".str_replace($_SESSION['RAND'],'',base64_decode($_REQUEST['dlinke']))."','".str_replace($_SESSION['RAND'],'',  base64_decode($_REQUEST['key']))."'";  
		}
		else
		{
		   $qry=" Login1 '".$_REQUEST['Email']."','".base64_encode($_REQUEST['Password'])."'";  
		}
		$query=$this->db->query($qry);
		$bool=true;
		foreach ($query->result_array() as $row)
		{
			    $bool=false;
			    ob_start();
				@session_start();
				@session_destroy();
				ob_start();
				@session_start();
				$_SESSION['UEmail']=$row['EmailId'];
				$_SESSION['UPassword']=$row['Password'];
				$_SESSION['Hcode']=$row['Hcode'];
				
				$_SESSION['AEmail']=$row['EmailId'];
				$_SESSION['SUPERADMIN']="";
				$_SESSION['APassword']=$row['Password'];
				
				$_SESSION['HotelName']=$row['HotelName'];
				$_SESSION['Hotel_Id']=$row['HotelId'];
				$_SESSION['STOREID']=1;
				$_SESSION['UserType']=$row['UserType'];
                $_SESSION['UIDD']=$row['User_id'];
				$_SESSION['RAND']=rand();
				if($row['UserType']==1)
				{
					$_SESSION['SUPERADMIN']="SA";
					$this->load->view('Main');
				}
				else
				{
			        $this->load->view('welcome_message');
				}
			 
		}
		 if ($bool==true)
			{
			
 			   $this->load->view('login');
			}
	}
	public function dlog()
	{
		$this->load->helper('url');
		$qry=" SELECT * FROM Mas_Hotel WHERE Hotel_Id=".$_REQUEST['Hotel_Id'];  
		$query=$this->db->query($qry);
		$bool=true;
		foreach ($query->result_array() as $row)
		{
			    $bool=false;
			 
				$_SESSION['UEmail']=$row['Email'];				 
				$_SESSION['UPassword']='';
				$_SESSION['HotelName']=$row['HotelName'];
				$_SESSION['Hotel_Id']=$row['Hotel_Id'];
				$_SESSION['STOREID']=1;
				$_SESSION['UserType']=2;
				 $this->load->view('welcome_message');
                 
				 
			 
		}
	}
	public function logout()
	{
		ob_start();
		@session_start();
		@session_destroy();
		ob_start();
		@session_start();
	?>
		<script>window.location.href="<?php echo scs_url?>";</script>
	<?php
	}
	
	
}
