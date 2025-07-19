<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_MT('RoomType','Upload');
$qry="SELECT * FROM Mas_irmRoomType WHERE Hotel_Id=".$_SESSION['Hotel_Id'];
$qry=$this->db->query($qry);


?>

<div class="fram" >
  <table class="table">
  <?php 
  foreach($qry->result_array() as $row)
  {
  ?>
    <tr>
      <td style="border-bottom:1px solid #DFDBDB !important" ><div id="selectImage">
          <h5 style="color:#B31518" ><?php echo $row['RoomType'];?> (Perfect Resolution - 1024 X 768)</h5>
          <br>
          <?php echo form_open_multipart('upload/do_upload?id='.$row['RoomType_Id'].'&pat=Rtype&ul=RoomType');?> <?php echo "<input type='file' name='userfile'   id='file'/>"; ?>
          <input type="hidden" id="lk" name="lk" value="<?php echo base64_encode('RoomType');?>"  />
          <?php echo "<input type='submit' name='submit' value='Upload' class='submit'/> ";?> </div>
        <?php echo "</form>"?></td>
      <td style="border-bottom:1px solid #DFDBDB !important"><img height="150" width="150" class="img-thumbnail" src="<?php echo scs_url."uploads/Rtype/".$row['RoomType_Id'].".jpg"; ?>" /></td>
    </tr>
 <?php } ?>
  </table>
</div>
<?php
 
$this->Table->Panel_E2();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $("#ACCODE").focus();
 
});
</script>