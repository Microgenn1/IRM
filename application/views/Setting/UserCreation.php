<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('UserCreation','Setting'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_UserTable"  />
<input type="hidden" id="User_id" name="User_id" value="UserTable"  />
<input type="hidden" id="TableName" name="TableName" value="UserTable"  />
<div class="fram" >
  <table  width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
    <tr>
      <td width="7%" valign="middle">&nbsp;</td>
      <td width="13%" align="right"  >User Id</td>
      <td width="22%" align="left" valign="middle"><input class="form-control" type="text" name="EmailId" id="EmailId" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
      <td width="58%" align="left" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td width="7%" valign="middle">&nbsp;</td>
      <td width="13%" align="right"  >Password</td>
      <td align="left" valign="middle"><input autocomplete="off" class="form-control" id="Password" name="Password" type="Password" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
     
    <tr>
      <td width="7%" valign="middle">&nbsp;</td>
      <td width="13%" align="right"  >&nbsp;</td>
      <td colspan="2" align="left" valign="middle">&nbsp;<?php echo '<button type="button" class="btn btn-info"  scs="'.@NET.'" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="User_id"    >SAVE</button>' ?></td>
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
	$(".Mas_Mail").css('background-color','#FFF'); 
	$(".Mas_Mail a").css('color','#000');
});
</script>