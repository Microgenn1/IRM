<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('MailServer','Setting'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Mas_MailServer <?php echo $_SESSION['Hotel_Id']?>"  />
<input type="hidden" id="Server_Id" name="Server_Id" value="Mas_MailServer"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_MailServer"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
 
 <div class="fram" >
<table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Email</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <input type="text" name="Email" id="Email" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
  </tr>
 
  
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Password</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <input id="Password" name="Password" type="password" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >SMTP</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <input id="Smtp" name="Smtp" type="text" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Port</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <input id="Port" name="Port" type="text" val="1" num="1" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>
  
   <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >SSL</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <input id="Essl" name="Essl" type="text" val="1" num="1" isn="1" ln="30" ty="V" maxlength="30"   ></td>
  </tr>


  <textarea   class="form-control" name="Header"    id="Header" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ></textarea>

  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >&nbsp;</td>
    <td width="72%" align="left" valign="middle">&nbsp;<?php echo '<button type="button" class="btn btn-info"  scs="'.@NET.'" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Server_Id"    >SAVE</button>' ?></td>
  </tr>
  
  
</table>
</div>
<div id="TableView" ></div>
<?php
$this->Table->Panel_E1();
include(scs_path."footer.php");
?><script>
$(document).ready(function(e) {
    $("#Api").focus();
	$("#Setting").addClass('active');
	$("#LSetting").addClass('in');
	$(".Add_Mail").css('background-color','#FFF'); 
	$(".Add_Mail a").css('color','#000');
});
</script>