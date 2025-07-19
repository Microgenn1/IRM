<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_R1('Payment History','Report'); ?>
<link rel="stylesheet" href="<?php echo scs_url?>app/css/datatables/dataTables.bootstrap.css" type="text/css" />

<?php
$qry="exec PRO_Trans_Paymentresponse_Easebuzz";
$res=$this->db->query($qry);
?>
<div class="fram" >
<table id="example" border="1" cellpadding="2" cellspacing="1" class="table table-bordered table-striped">
<thead>
  <tr>
    <th>SNO</th>
    <th>Refno</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Other Details</th>
  </tr>
 </thead>
 <tbody>
 <?php
 $cou=1;
foreach($res->result_array() as $row)
{
	echo '<tr>';
	echo '<td>'. $cou.'</td>';
	echo '<td>'.$row['Refno'].'</td>';
	echo '<td>'.$row['Amount'].'</td>';
	echo '<td>'.$row['Status'].'</td>';
	echo '<td><b>Transaction No :</b> '.$row['Trans_Id'].'<br><b>Source :</b> '.$row['Paymentsource'].'<br><b>Deduction % :</b> '.$row['Deduction_Per'].'</td>';
	echo '</tr>';
	 $cou++;
}


  ?>
 </tbody>
  
</table>

 </div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order Details</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
function chk_(ordid)
{
	var ordno = document.getElementById("ord"+ordid).value;
	$.ajax({
		type:"POST",
		url:'<?php echo scs_url?>index.php/Getval/OrderDet?ORDNO='+ordno,
		dataType: "html",
		success: function(html){
			$(".modal-body").html(html);
			$('#myModal').modal('toggle');
		}
		
	})
}
$(document).ready(function(e) {
    $("#ACCODE").focus();
 
});

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>