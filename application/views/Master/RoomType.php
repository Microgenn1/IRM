<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('RoomType','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Mas_RoomType"  />
<input type="hidden" id="RoomType_Id" name="RoomType_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_irmRoomType"  />
<!-- <input type="hidden" id="isirm" name="isirm" isn="1" ln="30" ty="B" value='1'  num="0" > -->
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<div class="fram" >
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="table">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
   
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="13%">RoomType</td>
    <td width="40%"> <input onKeyUp="RoomTy(this.value,'<?php echo $_SESSION['Hotel_Id']?>')"  class="form-control" type="text" name="RoomType" id="RoomType"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Adults</td>
    <td> <input  onkeypress="return numeric_only (event, this);" class="form-control" type="text" name="Adults" id="Adults" val="1" num="0" isn="1" ln="30" ty="V" maxlength="100" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
     <td>&nbsp;</td>
     <td>Rent</td>
     <td><input onkeypress="return numeric_only (event, this);"  class="form-control" type="text" name="Amount" id="Amount" val="1" num="0" isn="1" ln="30" ty="V" maxlength="100" ></td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Extra Bed</td>
     <td><input onkeypress="return numeric_only (event, this);"  class="form-control" type="text" name="Extrabedamount" id="Extrabedamount" val="1" num="0" isn="1" ln="30" ty="V" maxlength="100" ></td>
     <td>&nbsp;</td>
   </tr>
   <tr>
	 <td>&nbsp;</td>
	 <td>Is AC</td>
	 <td><select class="form-control"  isn="1" ln="30" ty="B" maxlength="100" name="Ac" id="Ac">
	 <option selected value="1" >Yes</option>
	 <option value="0" >No</option>
	 </select></td>
	 <td>&nbsp;</td>
   </tr>
<!-- 
   <tr>
	 <td>&nbsp;</td>
	 <td>Room</td>
	 <td><select class="form-control"  isn="1" ln="30" ty="B" maxlength="100" name="actualroomid" id="actualroomid">
	 <option selected value="0"  disabled>--Select RoomType--</option>
   <?php
      $sql = "select * from mas_roomtype";
      $res = $this->db->query($sql);
      foreach($res->result_array() as $ro){
        ?>
         <option value="<?php echo $ro['RoomType_Id']?>" ><?php echo $ro['RoomType']?></option>
        <?php
      }
   ?>
	
	 </select></td>
	 <td>&nbsp;</td>
   </tr> -->


   <tr>
     <td>&nbsp;</td>
     <td>Max Room</td>
     <td><input onkeypress="return numeric_only (event, this);"  class="form-control" type="text" name="Maxroom" id="Maxroom" val="1" num="0" isn="1" ln="30" ty="V" maxlength="100" ></td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Tax (Rs/-)</td>
     <td><input  onkeypress="return numeric_only (event, this);" class="form-control" type="text" name="Tax" id="Tax" val="1" num="0" isn="1" ln="18`2" ty="DE" maxlength="100" ></td>
     <td>&nbsp;</td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td>InActive</td>
    <td><select class="form-control"  isn="1" ln="30" ty="B" maxlength="100" name="InActive" id="InActive">
    <option selected value="1" >Yes</option>
    <option value="0" >No</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Description</td>
    <td><textarea style="width: 100%"  rows="6" class="form-control" name="Description"    id="Description" maxlength="7800" val="1" num="0" isn="1" ln="7800" ty="V" ></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="RoomType_Id"    >SAVE</button></td>
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
function numeric_only (event, input) {
		if ((event.which < 32) || (event.which > 126)) return true; 
		return jQuery.isNumeric ($(input).val () + String.fromCharCode (event.which));
}
</script>