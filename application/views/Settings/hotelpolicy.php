<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('hotelpolicy','Security'); 
$qry="SELECT * FROM Mas_Hotelpolice WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry);
if($res->num_rows() ==0)
{
	$qry="insert into Mas_Hotelpolice(Hotel_Id)values(".$_SESSION['Hotel_Id'].")";
	$this->db->query($qry);
}
$qry="SELECT * FROM Mas_Hotelpolice WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry)->row();
?>


<input type="hidden" id="Hotelpolice_Id" name="Hotelpolice_Id" value="<?php echo $res->Hotelpolice_Id;?>"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Hotelpolice"  />
 
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<div class="fram" >
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="table">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
   
 
  <tr>
    <td>&nbsp;</td>
    <td>Hotel Policy</td>
    <td> <textarea  rows="6" class="form-control" name="Hotelpolice"    id="Hotelpolice" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ><?php echo $res->Hotelpolice;?></textarea></td>
    <td>&nbsp;</td>
  </tr>
     
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Hotelpolice_Id"    >UPDATE</button></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
</table>

 </div>
 
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
	
	$("#Fadd").css("display", "none");
	$("#vlink").css("display", "none");
    $("#Title").focus();
 
});
 
</script>