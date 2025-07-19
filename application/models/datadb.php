<?php
ob_start();
@session_start();
class datadb extends CI_Model
{
	function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Calcutta');
		$this->load->database('default');
    }
	
}

?>