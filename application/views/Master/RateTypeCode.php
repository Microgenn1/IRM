<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('RateTypeCode','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Ratecode_Mas <?php echo $_SESSION['Hotel_Id']?>"  />
<input type="hidden" id="RateCode_Id" name="RateCode_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Ratecode_Mas"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<div class="fram" >
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="table">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
   
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="13%">Rate Code</td>
    <td width="21%"> <input class="form-control" type="text" name="Ratecode" id="Ratecode"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
    <td width="59%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="13%">Rate Caption</td>
    <td width="21%"> <input class="form-control" type="text" name="Ratecodecaption" id="Ratecodecaption"  num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
    <td width="59%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="13%">Short Name</td>
    <td width="21%"> <input class="form-control" type="text" name="Shortname" id="Shortname"   num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
    <td width="59%">&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>Defaults</td>
    <td><select class="form-control"  isn="1" ln="30" ty="B" maxlength="100" name="Defaults" id="Defaults">
    <option selected value="1" >Yes</option>
    <option value="0" >No</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Publised Tarriff</td>
    <td><select class="form-control"  isn="1" ln="30" ty="B" maxlength="100" name="Published" id="Published">
    <option selected value="1" >Yes</option>
    <option value="0" >No</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Net Tarriff</td>
    <td><select class="form-control"  isn="1" ln="30" ty="B" maxlength="100" name="Net" id="Net">
    <option selected value="1" >Yes</option>
    <option value="0" >No</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="RateCode_Id"    >SAVE</button></td>
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
function RoomTy(aa,bb)
{
	$("#UQ").val(bb+aa);
}
</script>