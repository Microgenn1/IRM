<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_R1('Expected Booking','Report'); ?> 
<link rel="stylesheet" href="<?php echo scs_url?>app/css/datatables/dataTables.bootstrap.css" type="text/css" />

<input type="hidden" id="RepName" name="RepName" value="Rep_Booking"  />
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <table width="100%" border="0" align="center" class="list" cellpadding="3" cellspacing="4">
        <thead>
          <tr>
            <td>From Date</td>
            <td>To Date</td>
            </tr>
          </thead>
          <tr>
		  <form action="" method="GET">
            <td width="18%"> 
            <input type="hidden" id="lk" name="lk" value="<?php echo $_REQUEST['lk'] ?>"/>
            <input style="width: 100%" type="text" id="Fdate" name="Fdate" class="Dat"/>
			</td>
            <td width="18%">
            <input style="width: 100%" type="text" id="Tdate" name="Tdate" class="Dat"/>
			</td>
            <td>
			<input style="width: 150px" type="submit" class="btn btn-info btn-sm" value="Get" name="submit" >
			</td>
		  </form>
          </tr>
        </table>
		
		<?php
		
		if(isset($_GET['submit']))
		{
		?>
			<br>
			<hr>
						
			<table id="example" border="1" cellpadding="2" cellspacing="1" class="table table-bordered table-striped">
			<thead>
			<tr>
			<th>SNo</th>
			<th>Guest Name</th>
			<th>Arrival</th>
			<th>Departure</th>
			<th>Room Type</th>
			<th>Pax</th>
			<th>NoofRoom</th>
			<th>Tariff</th>
			</tr>
			</thead>
			<tbody>
		<?php
			$sql = "select ml.FirstName,tm.ChkIn,tm.ChkOut,rt.RoomType,td.Adu,td.NoofRoom,td.Rent from Trans_Receipt_Det td
			inner join Trans_Receipt_Mas tm on tm.Receiptid = td.Rec_Id
			inner join Mas_Ledger ml on ml.Ledger_ID = tm.Ledger_Id
			inner join Mas_irmRoomType rt on rt.RoomType_Id = td.RoomType_Id 
			where tm.ChkIn between '".date("Y-m-d",strtotime($_REQUEST['Fdate']))."' and '".date("Y-m-d",strtotime($_REQUEST['Tdate']))."'";
			$res=$this->db->query($sql);
			$k = 1;
			$no = $res->num_rows();
			$rooms = "0";
			foreach($res->result_array() as $row)
			{
				$rooms = $rooms + $row['NoofRoom'];
				echo "<tr>
				<td>".$k++."</td>
				<td>".$row['FirstName']."</td>
				<td>".date("d-m-Y",strtotime($row['ChkIn']))."</td>
				<td>".date("d-m-Y",strtotime($row['ChkOut']))."</td>
				<td>".$row['RoomType']."</td>
				<td>".$row['Adu']."</td>
				<td>".$row['NoofRoom']."</td>
				<td>".$row['Rent']/$row['NoofRoom']."</td>
				</tr>";
			}
		?>
			</tbody>
			</table>
			<br>
			<h4>Total Expected Booking - <?php echo $no ?> | Total Rooms - <?php echo $rooms ?></h4>
		<?php
		}
		
		?>
      </div>
    </div>
  </div>
</div>
<div id="pri" class="table-responsive" >
<div id="TableView" style="overflow:auto" ></div>
</div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
	<script src="<?php echo scs_url?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <!-- Buttons examples -->
        <script src="<?php echo scs_url?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo scs_url?>assets/plugins/datatables/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );
</script>