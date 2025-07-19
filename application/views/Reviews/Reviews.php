<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Reviews','Reviews'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Mas_Review <?php echo $_SESSION['Hotel_Id']?>"  />
<input type="hidden" id="Review_Id" name="Review_Id" value="Mas_MailServer"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Review"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
 
 <div class="fram" >
<table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Titel</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <input type="text" name="Titel" id="Titel" val="1" num="0" isn="1" ln="3000" ty="V" maxlength="3000" ></td>
  </tr>
 
  
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Review</td>
    <td width="72%" align="left" valign="middle">&nbsp;
      <textarea id="Review" name="Review"   val="1" num="0" isn="1" ln="5000" ty="V" maxlength="5000"  style="width:80%;height:230px"  ></textarea></td>
  </tr>
 
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Rating</td>
    <td width="72%" align="left" valign="middle">&nbsp;
     <select   id="Rating" name="Rating" type="text" val="1" num="1" isn="1" ln="30" ty="B" maxlength="30"   >
     <option value="1">*</option>
     <option value="2">**</option>
     <option value="3">***</option>
     <option value="4">****</option>
     <option value="4">*****</option>
     </select>
    
      </td>
       <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >Approval</td>
    <td width="72%" align="left" valign="middle">&nbsp;
     <select   id="Ap" name="Ap" type="text" val="1" num="1" isn="1" ln="30" ty="B" maxlength="30"   >
     <option value="1">Active</option>
     <option value="2">DeActive</option>
    
     </select>
    
      </td>
  </tr>
  
  
  
  <tr>
    <td width="10%" valign="middle">&nbsp;</td>
    <td width="18%" align="right"  >&nbsp;</td>
    <td width="72%" align="left" valign="middle">&nbsp;<?php echo '<button type="button" class="btn btn-info"  scs="'.@NET.'" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Review_Id"    >SAVE</button>' ?></td>
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
	 
});
</script>