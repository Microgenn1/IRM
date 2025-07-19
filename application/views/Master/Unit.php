<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Unit','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Mas_Unit"  />
<input type="hidden" id="Unit_id" name="Unit_id"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Unit"  />
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >SYMBOL</label>
        <input   class="form-control" type="text" name="SYMBOL" id="SYMBOL"  val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Full Name</label>
        <input   class="form-control" type="text" name="FLNAME" id="FLNAME" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Unit_id"    >SAVE</button>
      </div>
    </div>
  </div>
  
</div>
<div id="TableView" ></div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $("#Unit").focus();
	 
});
</script>