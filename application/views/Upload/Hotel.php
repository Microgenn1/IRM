<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_MT('Hotel','Upload'); ?>


<div class="fram" >
 
	<div id="selectImage">
		<label>Select Your Image or File (Perfect Resolution - 1024 X 768)</label><br>
		<?php echo form_open_multipart('upload/do_upload');?> 
		<?php echo "<input type='file' name='userfile'   id='file'/>"; ?>
        <input type="hidden" id="lk" name="lk" value="<?php echo base64_encode('Hotel');?>"  />
        <input type="hidden" id="id" name="id" value="<?php echo $_SESSION['Hotel_Id'];?>"  />
		<?php echo "<input type='submit' name='submit' value='Upload' class='submit'/> ";?>
	</div>
<?php echo "</form>"?>

	<img height="300" width="300" class="img-thumbnail" src="<?php echo scs_url."uploads/".$_SESSION['Hotel_Id'].".jpg"; ?>" ?>

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