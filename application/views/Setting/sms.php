<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Add_SMSGateway','Setting'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_SMSGateway  <?php echo $_SESSION['Hotel_Id']?>"  />
<input type="hidden" id="SmsApi_Id" name="SmsApi_Id" value="Mas_Table"  />
<input type="hidden" id="TableName" name="TableName" value="SMSGateway"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<div class="fram" >
  <table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >Api</td>
      <td width="72%" align="left" valign="middle">&nbsp;
        <input type="text" name="Api" id="Api" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
    </tr>
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >UserName</td>
      <td width="72%" align="left" valign="middle">&nbsp;
        <input id="UserName" name="UserName" type="text" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
    </tr>
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >Password</td>
      <td width="72%" align="left" valign="middle">&nbsp;
        <input id="Password" name="Password" type="password" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
    </tr>
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >Sid</td>
      <td width="72%" align="left" valign="middle">&nbsp;
        <input id="Sid" name="Sid" type="text" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
    </tr>
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >SmsType</td>
      <td width="72%" align="left" valign="middle">&nbsp;
        <input id="SmsType" name="SmsType" type="text" val="1" num="1" isn="1" ln="30" ty="V" maxlength="30"   ></td>
    </tr>
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >&nbsp;</td>
      <td width="72%" align="left" valign="middle">&nbsp;<?php echo '<button type="button" class="btn btn-info"  scs="'.@NET.'" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="SmsApi_Id"    >SAVE</button>' ?></td>
    </tr>
  </table>
</div>
<div id="TableView" ></div>
<?php
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $("#Api").focus();
	$("#Setting").addClass('active');
	$("#LSetting").addClass('in');
	$(".Add_SMSGateway").css('background-color','#FFF'); 
	$(".Add_SMSGateway a").css('color','#000');
});
</script>