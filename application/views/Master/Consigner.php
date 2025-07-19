<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Consigner','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Mas_Consigner"  />
<input type="hidden" id="Consigner_Id" name="Consigner_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Consigner"  />
<input     type="hidden" name="CCODE" id="CCODE" value="12"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Consigner</label>
        <input   class="form-control" type="text" name="Consigner" id="Consigner"   val="1" num="0" isn="1" ln="300" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Address 1</label>
        <textarea   class="form-control" type="text" name="AD1" id="AD1"   val="1" num="0" isn="1" ln="300" ty="V" maxlength="300" ></textarea>
      </div>
    </div>
  </div>
   <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Address 2</label>
       <textarea   class="form-control" type="text" name="AD2" id="AD2"   val="1" num="0" isn="1" ln="300" ty="V" maxlength="300" ></textarea>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >CITY</label>
        <input   class="form-control" type="text" name="CITY" id="CITY"   val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div></div>
    <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >PIN</label>
        <input   class="form-control" type="text" name="PIN" id="PIN"   val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div></div>
    <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >PHONE</label>
        <input   class="form-control" type="text" name="PHONE" id="PHONE"   val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div></div>
    
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Consigner_Id"    >SAVE</button>
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
    $("#Consigner").focus();
 
});
</script>
