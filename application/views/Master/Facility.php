<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_MT('Facility','Master'); ?>

 
<?php
$qry="exec Update_Facility ".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry);
?>
<div class="fram" >
<table id="example" border="1" cellpadding="2" cellspacing="1" class="table table-bordered table-striped">
<thead>
  <tr>
    <th  >SNO</th>
    <th  >Facility</th>
    <th >Check</th>
  </tr>
 </thead>
 <tbody>
 <?php
 $cou=1;
foreach($res->result_array() as $row)
{
	$str="";
	if($row['Ap']=="1"){ $str="checked"; }
	 
	echo '<tr>';
	echo '<td>'. $cou.'</td>';
	echo '<td>'.$row['Facility'].'</td>';
	echo '<td><input type="checkbox" '.$str.' id="'.$row['Fac_Id'].'" onclick="chk_('.$row['Fac_Id'].')" ></td>';
	echo '</tr>';
	 $cou++;
}


  ?>
 </tbody>
  
</table>

 </div>
 
 
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
 <script>
 
 function chk_(aa)
 {
	 str=0;
	 if($('#'+aa).prop('checked')) {
		  str=1;
	 }
	 $.ajax({
		 
		 type:"POST",
		 url:"<?php echo scs_url?>index.php/Getval/FacUpdate?idd="+aa+"&val="+str,
		 success: function(html)
		 {
			 
		 }
		 
		 
		 
	 })
 }
 </script>