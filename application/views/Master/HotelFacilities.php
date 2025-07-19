<?php
include(scs_path."Header.php");
 
include(scs_path."Admenu.php");
$this->Table->Panel_S1('Facility','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Mas_HotelFacility"  />
<input type="hidden" id="Facility_Id" name="Facility_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_HotelFacility"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<div class="fram" >
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="table">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
 
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="13%">Facility</td>
    <td width="21%"> <input   class="form-control" type="text" name="Facility" id="Facility"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" ></td>
    <td width="59%">&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Facility_Id"    >SAVE</button></td>
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