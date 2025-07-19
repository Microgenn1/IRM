<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_R1('Appointment','Reprint'); ?>
 
 
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-12"><div id="pri" class="table-responsive" ><div id="TableView" style="overflow:auto" >
        <?php 
		$this->htable->Html_Grid_Agent();
		?>
        
</div>
</div>
      </div>
    </div>
  </div>
</div>

<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $htb_();
});

function $Agent_(idd)
{
	$.ajax({
		type : "POST",
		url : "<?php echo scs_url?>index.php/Reprint?lk=<?php echo base64_encode('AppPrint')?>",
		data:"idd="+idd,
		success:function(html)
		{
			$("#TableView").html(html);
		}
	})
}

</script>