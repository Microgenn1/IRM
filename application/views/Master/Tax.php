<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('Tax','Master'); ?>


<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
<link rel="stylesheet" href="<?php echo scs_url?>app/css/datatables/dataTables.bootstrap.css" type="text/css" />


<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Mas_Tax"  />
<input type="hidden" id="TXID" name="TXID"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Tax"  />
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >TAX NAME</label>
        <input   class="form-control" type="text" name="TAX" id="TAX"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >FROM AMOUNT</label>
        <input   class="form-control" type="text" name="FROMAMOUNT" id="FROMAMOUNT"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >TO AMOUNT</label>
        <input   class="form-control" type="text" name="TOAMOUNT" id="TOAMOUNT"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >CGST</label>
        <input   class="form-control" type="text" name="CGST" id="CGST"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >SGST</label>
        <input   class="form-control" type="text" name="SGST" id="SGST"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
   
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="TXID"    >SAVE</button>
      </div>
    </div>
  </div>
  
</div>
<div id="TableView" ></div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<style>
#Fadd{
	display: none!important
}
</style>
<script>
$(document).ready(function(e) {
    $('#vlink').trigger('click');
	$("#TAX").focus();
});
</script>