<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Email Settings','Settings'); 
	$qry="SELECT * FROM Mas_MailServer WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
	$res=$this->db->query($qry);
	if($res->num_rows() ==0)
	{
		$qry="Insert Into Mas_MailServer (Hotel_Id) values (".$_SESSION['Hotel_Id'].")";
		$this->db->query($qry);
	}
	

$qry="SELECT * FROM Mas_MailServer WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry)->row();
?>
<input type="hidden" id="Server_Id" name="Server_Id" value="<?php echo $res->Server_Id;?>"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_MailServer"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Email</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Email ?>" style="width:100%" type="text" name="Email" id="Email" val="1" num="0" isn="1" ln="50" ty="V"></td>
  </tr>
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Password</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Password ?>" style="width:100%" id="Password" name="Password" type="password" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >SMTP</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Smtp ?>" style="width:100%" id="Smtp" name="Smtp" type="text" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Port</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Port ?>" style="width:100%" id="Port" name="Port" type="text" val="1" num="1" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  
   <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >SSL</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Essl ?>" style="width:100%" id="Essl" name="Essl" type="text" val="1" num="1" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Header</td>
    <td width="72%" align="left" valign="middle">
      <textarea   class="form-control" name="Header"    id="Header" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ><?php echo $res->Header ?></textarea>
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Footer</td>
    <td width="72%" align="left" valign="middle">
      <textarea   class="form-control" name="Footer"    id="Footer" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ><?php echo $res->Footer ?></textarea>
  </tr>
  

  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >&nbsp;</td>
    <td width="72%" align="left" valign="middle"><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Server_Id"    >
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