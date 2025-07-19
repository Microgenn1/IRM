<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Branch','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Mas_Branch"  />
<input type="hidden" id="Branch_Id" name="Branch_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Branch"  />
<div class="fram" >
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td width="7%">&nbsp;</td>
      <td width="13%">Branch Code</td>
      <td width="21%"><input   class="form-control" type="text" name="BranchCode" id="BranchCode"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
      <td width="59%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Branch</td>
      <td><input   class="form-control" type="text" name="Branch" id="Branch" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
      <td>&nbsp;</td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>Address</td>
      <td><textarea   class="form-control" type="text" name="Address" id="Address" val="1" num="0" isn="1" ln="3000" ty="V" maxlength="3000" ></textarea></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>&nbsp;</td>
      <td>City</td>
      <td><input   class="form-control" type="text" name="City" id="City" val="1" num="0" isn="1" ln="130" ty="V" maxlength="130" ></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>&nbsp;</td>
      <td>State</td>
      <td><input   class="form-control" type="text" name="State" id="State" val="1" num="0" isn="1" ln="130" ty="V" maxlength="130" ></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>&nbsp;</td>
      <td>Phone</td>
      <td><input   class="form-control" type="text" name="Phone" id="Phone" val="1" num="0" isn="1" ln="130" ty="V" maxlength="130" ></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>&nbsp;</td>
      <td>Email</td>
      <td><input   class="form-control" type="text" name="Email" id="Email" val="1" num="0" isn="1" ln="130" ty="V" maxlength="130" ></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Branch_Id"    >
        SAVE
        </button></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
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
    $("#ACCODE").focus();
 
});
</script>