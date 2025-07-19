<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Ledger','Master'); ?>
 
<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Mas_Ledger"  />
<input type="hidden" id="LGID" name="LGID"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Ledger"  />

<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Ledger Code</label>
        <?php $this->Ctrl->AutNum('LedgerCode','','Mas_Ledger',1,'','form-control')?>
         
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >FirstName</label>
        <input   class="form-control" type="text" name="FirstName" id="FirstName" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >LastName</label>
        <input   class="form-control" type="text" name="LastName" id="LastName" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
   
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Address  </label>
        <input   class="form-control" type="text" name="Address" id="Address" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >City</label>
        <input   class="form-control" type="text" name="City" id="City" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
   
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Pine Code</label>
        <input   class="form-control" type="text" name="Pincode" id="Pincode" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >AreaCode</label>
        <input   class="form-control" type="text" name="AreaCode" id="AreaCode" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Mobile</label>
        <input   class="form-control" type="text" name="Mobile" id="Mobile" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Email</label>
        <input   class="form-control" type="text" name="Email" id="Email" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Phone</label>
        <input   class="form-control" type="text" name="Phone" id="Phone" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
 
 
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="LGID"    >
        SAVE
        </button>
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
    $("#LCODE").focus();
	 
});
</script>