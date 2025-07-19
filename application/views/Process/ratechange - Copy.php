<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_MT('Special Pice','Process'); 
date_default_timezone_set("Asia/Kolkata"); 
?>

<table  class="table table-bordered table-striped" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td align="left"> 
	  <strong>Room Type</strong>
	 
		<select style="height: 34px!important" name="roomtype" id="roomtype" size='1'>
		<option value="0">Select RoomType</option>
		<?php
		$htmsql="SELECT Hotel_Id,RoomType_Id,RoomType FROM Mas_irmRoomType WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
		$htmrsql=$this->db->query($htmsql);
		foreach ($htmrsql->result_array() as $row)
		{
		?>
			<option value="<?php echo $row['RoomType_Id'] ?>"><?php echo $row['RoomType'] ?></option>
		<?php
		}
		?>
		</select>
	  
	    <strong>From </strong><input type="text" id="FDATE" name="FDATE" value="<?php echo date('d-m-Y')?>" style="padding:6px"   />&nbsp;<strong>To</strong>&nbsp;<input onchange="dateset()" type="text" id="TDATE" name="TDATE" value="<?php echo date('d-m-Y')?>"  style="padding:6px"   />
		<input checked style="margin-left: 5px; visibility: hidden" type="radio" name="mode" value="1">
		<!--<input style="margin-left: 5px" type="radio" name="mode" value="2"> Reduce&nbsp;-->
	  
       <a class="btn btn-info" onClick="Avbprice()" >Get</a> &nbsp;<a class="btn btn-success" onClick="Apply()" >Apply</a></td> 
    </tr>
  </tbody>
</table>
<div class="avb" style="overflow:scroll;width:100%" ></div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $("#ACCODE").focus();
});

function dateset()
{
	var today = document.getElementById("TDATE").value;
	today = new Date(today.split('-')[2],today.split('-')[1]-1,today.split('-')[0]);
	var date2 = document.getElementById("FDATE").value;
	date2 = new Date(date2.split('-')[2],date2.split('-')[1]-1,date2.split('-')[0]);
	var timeDiff = Math.abs(today.getTime() - date2.getTime());
	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
	if(diffDays > 10)
	{
		alert("Maximum 10 Days Allowed");
				window.location.reload();

	}
}

function getval(val,id)
{
	var minval = document.getElementById(id).min;
	if(parseInt(val)>=parseInt(minval))
	{
		document.getElementById(id).value = val;
	}
	else
	{
		document.getElementById(id).value = 1;
		alert("Invalid Room Rent");
	}
}

function Avbprice()
{
	var roomtype = $('#roomtype :selected').val();
	if(roomtype == 0)
	{
		scsbox("Select RoomType");
	}
	else
	{
		$.ajax({
			type:"POST",
			url:'<?php echo scs_url?>index.php/Getval/Avbprice?RTYPE='+roomtype+'&FDATE='+$('#FDATE').val()+'&TDATE='+$('#TDATE').val(),
			dataType: "html",
			success: function(html){
				$(".avb").html(html);
				NumOnly();
			}
			
		})
	}
}
function Apply()
{
	$.ajax({
		type:"POST",
		url:"<?php echo scs_url?>index.php/Getval/AvbUpdateprice",
		data:$('#Avbb').serialize(),
		success: function(html){
			scsbox(html);
		}
		
	})
}




$(function() {
$( "#FDATE" ).datepicker({
defaultDate: "+1w",
  minDate: 0,
numberOfMonths: 1,
 dateFormat:'dd-mm-yy',
onClose: function( selectedDate ) {
$( "#TDATE" ).datepicker( "option", "minDate", selectedDate );
 
}
});
$( "#TDATE" ).datepicker({
defaultDate: "+1w",
numberOfMonths: 1,
dateFormat: 'dd-mm-yy',
onClose: function( selectedDate ) {
$( "#FDATE" ).datepicker( "option", "maxDate", selectedDate ); 
}
});
});


function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}
</script>