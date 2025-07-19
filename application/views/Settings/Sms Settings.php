<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('SMS Settings','Settings'); 
  $qry="SELECT * FROM SMSGateway WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
	$res=$this->db->query($qry);
	if($res->num_rows() ==0)
	{
		$qry="Insert Into SMSGateway (Hotel_Id) values (".$_SESSION['Hotel_Id'].")";
		$this->db->query($qry);
	}
	

$qry="SELECT * FROM SMSGateway WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry)->row();
?>
<input type="hidden" id="SmsApi_Id" name="SmsApi_Id" value="<?php echo $res->SmsApi_Id;?>"  />
<input type="hidden" id="TableName" name="TableName" value="SMSGateway"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Username</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->UserName ?>" style="width:100%" type="text" name="UserName" id="UserName" val="1" num="0" isn="1" ln="50" ty="V"></td>
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Password</td>
    <td width="72%" align="left" valign="middle">
      <input value="<?php echo $res->Password ?>" style="width:100%" id="Password" name="Password" type="password" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >API</td>
    <td width="72%" align="left" valign="middle">
      <textarea   class="form-control" name="Api"    id="Api" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ><?php echo $res->Api ?></textarea>
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Template</td>
    <td width="72%" align="left" valign="middle">
      <textarea   class="form-control" name="Template"    id="Template" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ><?php echo $res->Template ?></textarea><br>
	  <b>Variables :</b><br> $cus - Customer Name | $hotel - Hotel Name | $checkin - CheckIn Date | $checkout - CheckOut Date | $amt - Amount<br><br>
	  <b>Sample Template :</b><br> Dear {$cus}, Greetings from {$hotel}!!. Your Reservation is confirmed between {$checkin} and {$checkout} and the amount is {$amt}.
  </tr>
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >&nbsp;</td>
    <td width="72%" align="left" valign="middle"><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="SmsApi_Id"    >
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