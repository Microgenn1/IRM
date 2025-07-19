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



<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Mas_Tax"  />
<input type="hidden" id="TXID" name="TXID"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Tax"  />
<div class="fram" >
<table id="myTable"  class="table table-bordered table-striped" border="0" cellspacing="1" cellpadding="1">
  <thead>
	<tr>
	<th>Tax Name</th>
	<th>From</th>
	<th>To</th>
	<th>CGST</th>
	<th>SGST</th>
	<th>Action</th>
	</tr>
  </thead>
  <form action="" method="POST">
  <tbody>
    <tr id="row1">
	<td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" value="Tax1" readonly placeholder="Tax Name" type="text" required class="form-control" name="TAX[]" id="TAX1"></td>
	<td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" onchange="checkfromval(1)" placeholder="From Amount" type="number" required class="form-control" name="FROMAMOUNT[]" id="FROMAMOUNT1"></td>
	<td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" placeholder="To Amount" type="number" required class="form-control" name="TOAMOUNT[]" id="TOAMOUNT1"></td>
	<td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" type="number" required class="form-control" name="CGST[]" id="CGST1"></td>
	<td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" placeholder="SGST Per" type="number" required class="form-control" name="SGST[]" id="SGST1"></td>
	<td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" onclick="checkval(1)" type="button" value="Add" required class="btn btn-success addbtn" name="add" id="add1"></td>
	</tr>
 </tbody>
</table>


        <input type="button" onclick="submitdata()" type="button" id="BUTS" value="Save" name="BUT" idn="TXID"    >SAVE</button>
 </form>

</div>
<div id="TableView" ></div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
function submitdata()
{
	alert("success");
}
function checkfromval(newval)
{
	if(parseFloat(newval) == '1')
	{
		var fromamount = $('#FROMAMOUNT'+newval).val();
		if(parseFloat(fromamount) <= 0)
		{
			alert("Check From Value");
			$('#FROMAMOUNT'+newval).val("");
			$('#FROMAMOUNT'+newval).focus();
		}
	}
	else
	{
		var newval = newval;
		var newval2 = newval-1;
		var prevtoamount = $('#TOAMOUNT'+newval2).val();
		var fromamount = $('#FROMAMOUNT'+newval).val();
		if(parseFloat(fromamount) <= parseFloat(prevtoamount))
		{
			alert("Check From Value");
			$('#from'+newval).val("");
			$('#from'+newval).focus();
		}
	}
}
function checktoval(newval)
{
	if(parseInt(newval) == '1')
	{
		var fromamount = $('#FROMAMOUNT'+newval).val();
		var toamount = $('#TOAMOUNT'+newval).val();
		if(parseFloat(toamount) <= parseFloat(fromamount))
		{
			alert("Check To Value");
			$('#TOAMOUNT'+newval).val("");
			$('#TOAMOUNT'+newval).focus();
		}
	}
	else
	{
		var fromamount = $('#from'+newval).val();
		var toamount = $('#to'+newval).val();
		if(parseFloat(toamount) <= parseFloat(fromamount))
		{
			alert("Check To Value");
			$('#TOAMOUNT'+newval).val("");
			$('#TOAMOUNT'+newval).focus();
		}
	}
}
function checkval(row)
{
	var tablerow = $('#myTable > tbody tr').length;
	var tablerownew = $('#myTable > tbody tr').length+1;
	var taxname = $('#TAX'+tablerow).val();
	var fromamt = $('#FROMAMOUNT'+tablerow).val();
	var toamt = $('#TOAMOUNT'+tablerow).val();
	var cgst = $('#CGST'+tablerow).val();
	var sgst = $('#SGST'+tablerow).val();
	
	if(taxname != '' && fromamt != '' && toamt !='' && cgst !='' && sgst !='')
	{
		$("#myTable > tbody").append('<tr><td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"  readonly value="Tax'+tablerownew+'" placeholder="Tax Name" type="text" required class="form-control" name="taxname[]" id="taxname'+tablerownew+'"></td><td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" placeholder="From Amount" type="number" onchange="checkfromval('+tablerownew+')" required class="form-control" name="from[]" id="from'+tablerownew+'"></td><td><input val="1" num="0" isn="1" ln="30" ty="V" maxlength="30"  onchange="checktoval('+tablerownew+')" placeholder="To Amount" type="number" required class="form-control" name="to[]" id="to'+tablerownew+'"></td><td><input ln="30" maxlength="300" ty="V" placeholder="CGST Per" type="number" required class="form-control" name="cgst[]" id="cgst'+tablerownew+'"></td><td><input ln="30" maxlength="300"  ty="V" placeholder="SGST Per" type="number" required class="form-control" name="sgst[]" id="sgst'+tablerownew+'"></td><td><input onclick="checkval('+tablerownew+')" type="button" value="Add" required class="btn btn-success addbtn" name="add" id="add'+tablerownew+'"></td></tr>');
		$("#add"+tablerow).attr("disabled", true);
	}
	else
	{
		alert("Please fill required details!!");
	}
}
$(document).ready(function(e) {
    $("#TAX").focus();
 
});
</script>