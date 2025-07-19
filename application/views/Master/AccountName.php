<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('AccountName','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_MAS_ACCOUNTNAME"  />
<input type="hidden" id="AC_ID" name="AC_ID"  />
<input type="hidden" id="TableName" name="TableName" value="MAS_ACCOUNTNAME"  />
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >ACCODE</label>
        <input   class="form-control" type="text" name="ACCODE" id="ACCODE"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >ACCOUNTNAME</label>
        <input   class="form-control" type="text" name="ACCOUNTNAME" id="ACCOUNTNAME" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="AC_ID"    >SAVE</button>
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
    $("#ACCODE").focus();
 
});
</script>