<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('User','Setting'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_usertable"  />
<input type="hidden" id="User_id" name="User_id"  />
<input type="hidden" id="TableName" name="TableName" value="usertable"  />
<div class="fram" >
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    
    <tr>
      <td width="0%">&nbsp;</td>
      <td width="13%" align="right">User Name</td>
      <td width="27%" align="left"><input   class="form-control" type="text" name="EmailId" id="EmailId" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
      <td width="60%" align="left">&nbsp;</td>
      <td width="0%">&nbsp;</td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td align="right">Password</td>
      <td align="left"><input   class="form-control" type="password" name="Password" id="Password" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
      
      <tr>
      <td>&nbsp;</td>
      <td>User Type</td>
      <td><?php $this->Ctrl->OptionBox("UserType#UserType#UserType#UserType","1","1","Select","","form-control","","V");?></td>
      <td>&nbsp;</td>
    </tr>
     
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="left"> <?php  echo '<button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="User_id"    >SAVE</button>' ; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;</td>
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
    $("#ItemGroupCode").focus();
 
});
</script>