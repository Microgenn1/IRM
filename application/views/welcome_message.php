<?php 
 
include(scs_path.'Header.php'); 
include(scs_path.'Top.php');
 
?>
<?php
$qry1="select * from Trans_Order_Mas where StatusID='1' and CAST (OrderDate AS DATE)='".date("Y-m-d")."' and Hotel_Id=".$_SESSION['Hotel_Id'];
$res1=$this->db->query($qry1);
$no1 = $res1->num_rows();

$qry2="select * from Trans_Order_Mas where StatusID='1' and CAST (OrderDate AS DATE) between '".date("Y-m-d",strtotime("-30 days"))."' and '".date("Y-m-d")."' and Hotel_Id=".$_SESSION['Hotel_Id'];
$res2=$this->db->query($qry2);
$no2 = $res2->num_rows();

$qry3="select * from Trans_Order_Mas where StatusID='1' and CAST (OrderDate AS DATE) between '".date("Y-m-d",strtotime("-90 days"))."' and '".date("Y-m-d")."' and Hotel_Id=".$_SESSION['Hotel_Id'];
$res3=$this->db->query($qry3);
$no3 = $res3->num_rows();

$qry4="select * from Trans_Order_Mas where StatusID='1' and CAST (OrderDate AS DATE) between '".date("Y-01-01")."' and '".date("Y-m-d")."' and Hotel_Id=".$_SESSION['Hotel_Id'];
$res4=$this->db->query($qry4);
$no4 = $res4->num_rows();
?>
<div class="col-sm-12">
  <div class="panel b-a">
    <div class="row m-n">
      <div class="col-md-3 b-b b-r"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-book i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger"><?php echo $no1; ?></span> <small class="text-muted text-u-c">Today's Booking</small> </span> </a> </div>
      <div class="col-md-3 b-b"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-book i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success"><?php echo $no2; ?></span> <small class="text-muted text-u-c">Last 30 Days Booking</small> </span> </a> </div>
      <div class="col-md-3 b-b b-r"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-book i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info"><?php echo $no3; ?> <span class="text-sm">m</span></span> <small class="text-muted text-u-c">Last 90 Days Booking</small> </span> </a> </div>
      <div class="col-md-3 b-b"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-book i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary"><?php echo $no4; ?></span> <small class="text-muted text-u-c">This Year</small> </span> </a> </div>
    </div>
  </div>
</div>
<!--Start-->
<?php
$qry="exec Das_Order ".$_SESSION['Hotel_Id'];
$res=$this->db->query($qry);
?>
<div class="row">
  <div class="col-sm-12">
  <div class="col-sm-12">
    <section class="panel panel-default">
      <header class="panel-heading"> Booking Order </header>
      <table id="example" class="table table-striped m-b-none">
        <thead>
          <tr>
            <th>#</th>
            <th>NAME</th>
            <th>ORD NO</th>
            <th>ORD DATE</th>
            <th>CHKIN</th>
            <th>CHKOUT</th>
            <th>NO.ROOMS</th>
            <th>AMOUNT</th>
            <th>STATUS</th>
          </tr>
        </thead>
		
		<tbody>
		<?php
		$cou=1;
		foreach($res->result_array() as $row)
		{	
			if($row['StatusID'] == '1')
			{
				$status = "Success";
			}
			else
			{
				$status = "Pending";
			}
			echo '<tr>
				<td>'.$cou.'</td>
				<td>'.$row['FirstName'].'</td>
				<td>'.$row['OrdNo'].'</td>
				<td>'.$row['Odate'].'</td>
				<td>'.$row['ChkIn'].'</td>
				<td>'.$row['ChkOut'].'</td>
				<td>'.$row['NoofRoom'].'</td>
				<td>'.$row['Amount'].'</td>
				<td>'.$status.'</td>
			</tr>';
			$cou++;
		}
		?>	
		</tbody>
      </table>
	  
    </section>
  </div>
  </div>
  
<?php include(scs_path.'footer.php') ?>