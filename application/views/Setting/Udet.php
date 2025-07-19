 <?php
 $this->db->query('exec Set_UserRights_Inv '.$_REQUEST['Uid'].",".$_REQUEST['Mid']);
 
 
 $res= $this->db->query('exec Set_UserRights '.$_REQUEST['Uid'].",".$_REQUEST['Mid']);
 echo '<div id="MSGG" class=" alert-success "></div><div class="widget stacked widget-table action-table">
    				
				<div class="widget-header"> &nbsp;
					<i class="fa fa-bars"></i>
					<h3>User Rights </h3>
				</div>  
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered"> <thead>
  <tr>
    <td>SNO</td>
    <td>Menu Name</td>
    <td>Show</td>
	  
  </tr></thead><tbody>

';
$cou=1;
 foreach($res->result_array() as $row)
 {
	 $chk="";
	 if($row['USHOW']==1){$chk='checked="checked"';}
	 echo '<tr>
    <td>'.$cou.'</td>
    <td>'.$row['Smenu'].'</td>
    <td><input '.$chk.'  type="checkbox" id="S'.$row['URID'].'" onclick="Uright(this.checked,'.$row['URID'].')" > </td>
	 
  </tr>';$cou++;
 }
 echo '</tbody></table></div>  </div></div>';
 ?>
 
 <script>
 function Uright(ee,idd)
 { 
 	$("#MSGG").removeClass('alert-success');
    $("#MSGG").addClass('alert-warning');
	$("#MSGG").html('Please Wait !!!');
 $.ajax({
	
	type:"POST",
	url:"<?php echo scs_url?>index.php/GetVal/Urg?IDD="+idd+"&vlu="+ee,
	data:"",
	success : function(html)
	{
		$("#MSGG").html(html);
		$("#MSGG").removeClass('alert-warning');
        $("#MSGG").addClass('alert-success');
	}
	 
	 
 })
 
 }
 </script>