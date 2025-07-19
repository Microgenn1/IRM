<?php
ob_start();
@session_start();
class Table extends CI_Model
{
	function __construct()
	{
		parent::__construct();

	}
	public function Panel_MT($Title, $link)
	{
		echo '<section class="panel panel-default">
  <header class="panel-heading font-bold">' . $link . ' <i class="fa fa-chevron-right"></i> ' . $Title . '';



		echo ' <div style="float:right;margin-top:-7px" ><a style="color:#FFF" id="Fadd" class="btn btn-info" href="' . scs_url . 'index.php/' . $link . '?lk=' . @$_REQUEST['lk'] . '"  ><i class="fa fa-plus-square"></i>&nbsp;Reload</a> </div> <div class="box-body"> <input type="hidden" id="Mlk" value="' . NET . '" > <input type="hidden" id="STOREID" name="STOREID" inv="1" value="1" ><input type="hidden" id="DBNAME" name="DBNAME" inv="1" value="newsen" >
<input type="hidden" id="WLINK" name="WLINK" inv="1" value="' . scs_url . 'index.php/' . $link . '?lk=' . @$_REQUEST['lk'] . '" >	
<input type="hidden" id="scs_url" name="scs_url" inv="1" value="' . scs_url . '" >								
		 </header> <div class="panel-body">';

	}
	public function Panel_S1($Title, $link)
	{
		echo '<section class="panel panel-default">
  <header class="panel-heading font-bold">' . $link . ' <i class="fa fa-chevron-right"></i> ' . $Title . '';



		echo ' <div style="float:right;margin-top:-7px" ><a style="color:#FFF" id="Fadd" class="btn btn-info" href="' . scs_url . 'index.php/' . $link . '?lk=' . $_REQUEST['lk'] . '"  ><i class="fa fa-plus-square"></i>&nbsp;Add</a>&nbsp;
		     <a style="color:#FFF" class="btn btn-info" id="vlink" slink="' . NET . '/HtmlTable" onclick="$Tv_(this.id)"  ><i class="fa fa-pencil"></i> &nbsp;View</a></div> <div class="box-body">
			 <form id="Fram" name="Fram" ><input type="hidden" id="Mlk" value="' . NET . '" > <input type="hidden" id="STOREID" name="STOREID" inv="1" value="1" ><input type="hidden" id="DBNAME" name="DBNAME" inv="1" value="newsen" >
<input type="hidden" id="WLINK" name="WLINK" inv="1" value="' . scs_url . 'index.php/' . $link . '?lk=' . $_REQUEST['lk'] . '" >
<input type="hidden" id="scs_url" name="scs_url" inv="1" value="' . scs_url . '" >									
	  </header>	 <div class="panel-body">';


	}
	public function Panel_R1($Title, $link)
	{
		echo '<section class="panel panel-default">
  <header class="panel-heading font-bold">' . $link . ' <i class="fa fa-chevron-right"></i> ' . $Title . '';



		echo ' <div style="float:right;margin-top:-7px" ><a style="color:#FFF" id="Fadd" class="btn btn-info" href="' . scs_url . 'index.php/' . $link . '?lk=' . @$_REQUEST['lk'] . '"  ><i class="fa fa-plus-square"></i>&nbsp;Reload</a>&nbsp;<!--<a onclick="$winprint_(&#39;pri&#39;,&#39;' . scs_app . '&#39;)"  class="btn btn-info" href="#" style="color:#FFF"  ><i class="fa fa-print"></i>&nbsp;Print</a>--> </div> <div class="box-body"> <input type="hidden" id="Mlk" value="' . NET . '" > <input type="hidden" id="STOREID" name="STOREID" inv="1" value="1" ><input type="hidden" id="DBNAME" name="DBNAME" inv="1" value="newsen" >
<input type="hidden" id="WLINK" name="WLINK" inv="1" value="' . scs_url . 'index.php/' . $link . '?lk=' . @$_REQUEST['lk'] . '" >	
<input type="hidden" id="scs_url" name="scs_url" inv="1" value="' . scs_url . '" >								
		 </header> <div class="panel-body">';


	}
	public function Panel_E1()
	{
		echo '</form>   </div></section>';
	}
	public function Panel_E2()
	{
		echo '</div></section>';
	}
	public function AlertBox($heading)
	{
		echo '
 <div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                             
                                            <h4 class="modal-title" id="myModalLabel">' . $heading . '</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button onclick="FrmReload()" type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                             
                                        </div>
                                    </div>';
	}
}

?>