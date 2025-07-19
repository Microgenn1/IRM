<?php 
 
include(scs_path.'Header.php'); 
include(scs_path.'Admenu.php');
$res=$this->db->query("SELECT count(*) co FROM Mas_Hotel WHERE isnull(act,0)=0")->row();

?>
 
 <!---->
 <div class="col-sm-12 " style="margin-top:10px;">
  <div class="panel b-a">
    <div class="row m-n">
      <div class="col-md-3 b-b b-r"> <a class="block padder-v hover" href="<?php echo scs_url?>index.php/Master?lk=<?php echo base64_encode('HotelCreation');?>"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-book i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger"><?php echo $res->co;?></span> <small class="text-muted text-u-c">HOTELS</small> </span> </a> </div>
      <div class="col-md-3 b-b"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-book i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success">0</span> <small class="text-muted text-u-c">Last 30 Days Booking</small> </span> </a> </div>
      <div class="col-md-3 b-b b-r"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-book i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">0 <span class="text-sm">m</span></span> <small class="text-muted text-u-c">Last 90 Days Booking</small> </span> </a> </div>
      <div class="col-md-3 b-b"> <a class="block padder-v hover" href="#"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-book i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">0</span> <small class="text-muted text-u-c">This Year</small> </span> </a> </div>
    </div>
  </div>
</div>
 <!---->
 
<?php include(scs_path.'footer.php') ?>
 