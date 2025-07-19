<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('googlemaps','Setting'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Mas_GoogleMap  <?php echo $_SESSION['Hotel_Id']?>"  />
<input type="hidden" id="GoogleMap_Id" name="GoogleMap_Id" value="Mas_Table"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_GoogleMap"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<input type="hidden" name="Map"    id="Map" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" >
<div class="fram" >
  <table class="table tablee" width="99%" border="0" cellspacing="3" cellpadding="1" align="center" >
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >Map</td>
      <td width="72%" align="left" valign="middle">&nbsp;
        <textarea onBlur="$('#Map').val(Base64.encode(this.value))" style="width:90%" ></textarea></td>
    </tr>
 
    
    <tr>
      <td width="10%" valign="middle">&nbsp;</td>
      <td width="18%" align="right"  >&nbsp;</td>
      <td width="72%" align="left" valign="middle">&nbsp;<?php echo '<button type="button" class="btn btn-info"  scs="'.@NET.'" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="GoogleMap_Id"    >SAVE</button>' ?></td>
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
    $("#Map").focus();
	 
});
</script>