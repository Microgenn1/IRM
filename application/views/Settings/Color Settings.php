<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Color Settings','Settings'); 
	$qry="SELECT * FROM Mas_Color where Hotel_Id=".$_SESSION['Hotel_Id'];
	$res=$this->db->query($qry);
	if($res->num_rows() ==0)
	{
		$qry="Insert Into Mas_Color (Hotel_Id,STOREID) values (".$_SESSION['Hotel_Id'].",1)";
		$this->db->query($qry);
	}
	

$qry="SELECT * FROM Mas_Color where Hotel_Id=".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry)->row();
?>
<input type="hidden" id="Color_Id" name="Color_Id" value="<?php echo $res->Color_Id;?>"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Color"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Primary Color</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Color ?>" style="width:100%" type="color" name="Color" id="Color" val="1" num="0" isn="1" ln="50" ty="V"></td>
  </tr>
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Secondary Color</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->DColor ?>" style="width:100%" id="DColor" name="DColor" type="color" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >&nbsp;</td>
    <td width="72%" align="left" valign="middle"><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Color_Id"    >
        UPDATE
        </button></td>
  </tr>
</table>
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