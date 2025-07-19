<?php
class htable extends CI_Model
{
	function __construct()
    {
        parent::__construct();
		$this->load->database('default');
    }
    
      public function Html_Grid()
      {
         $CI =& get_instance();
		 $this->load->library('table');
		 $qry=" exec ".$_REQUEST['HtmlForm'];
		 $query = $this->db->query($qry);	
		 $tmpl = array ( 'table_open'  => '<table id="example" border="1" cellpadding="2" cellspacing="1" class="table table-bordered table-striped">' );
		 $this->table->set_template($tmpl);	
		 $html=$CI->table->generate($query); 
         $edstr = "<img src='".scs_url."icon/edit.png' width='16' onclick='&#36;Tve_( ";
         $edend = ")' height='16' border='0' /> &nbsp;|&nbsp;";
         $destr = "<img src='".scs_url."icon/delete.png' width='16' onclick='&#36;Tve_(";
         $deend = ")' height='16' border='0' /> ";
		 $html=str_replace('!@',$edstr,$html);
		 $html=str_replace('@!',$edend,$html);
		 $html=str_replace('||','&#39;',$html);
		 $html=str_replace('^^',$destr,$html);
		 $html=str_replace('%%',$deend,$html);
		 $html="<div class='box-body table-responsive'>".$html."</div>";
		 echo $html;
      } 
	  public function Html_Report($qry)
      {
		  $CI =& get_instance();
		  $this->load->library('table');
		  $query = $this->db->query($qry);	
		  $tmpl = array ( 'table_open'  => '<table id="RTable" border="1" cellpadding="2" cellspacing="1" class="table table-bordered table-striped">' );
		  $this->table->set_template($tmpl);	
		  $html=$CI->table->generate($query); 
		  $html="<div class='box-body table-responsive'>".$html."</div>";
		  echo $html;
	  }
	   public function Html_Grid_Agent()
      {
         $CI =& get_instance();
		 $this->load->library('table');
		 $qry=" exec PRI_Mas_Agent";
		 $query = $this->db->query($qry);	
		 $tmpl = array ( 'table_open'  => '<table id="example" border="1" cellpadding="2" cellspacing="1" class="table table-bordered table-striped">' );
		 $this->table->set_template($tmpl);	
		 $html=$CI->table->generate($query); 
         $edstr = "<img src='".scs_url."icon/print.png' width='16' onclick='&#36;Agent_( ";
         $edend = ")' height='16' border='0' />  ";
          
		 $html=str_replace('!@',$edstr,$html);
		 $html=str_replace('@!',$edend,$html);
		 $html=str_replace('||','&#39;',$html);
		 
		 
		 $html="<div class='box-body table-responsive'>".$html."</div>";
		 echo $html;
      } 
    
  }
?>
