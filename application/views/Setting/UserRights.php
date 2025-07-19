<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('rights','Setting'); ?>

<div class="fram" >
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%">&nbsp;</td>
      <td width="13%" align="right">User Name</td>
      <td width="19%" align="left"><?php $this->Ctrl->OptionBox("User_id#EmailId#usertable#User_id","1","1","Select","","form-control","","B");?></td>
      <td width="58%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right">Menu Name</td>
      <td align="left"><?php $this->Ctrl->OptionBox("Menu_Id#Menu#menu#Menu_Id","1","1","Select","","form-control","","B");?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right">&nbsp;</td>
      <td align="left"><?php echo '<button type="button" class="btn btn-info"    onclick="urights()" type="button"  >Get</button>'; ?></td>
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
    $("#User_id").focus();
 
});

function urights()
{
	$("#TableView").html('').load('<?php echo scs_url?>index.php/Setting/Rig/?Mid='+$("#Menu_Id").val()+'&Uid='+$("#User_id").val());
}
function MUrights(a)
{
	$.ajax({
		
		type : "POST",
		url  : "<?php echo scs_url?>index.php/Setting/Mrig/",
		data : "count="+a,
		success : function (html)
		{
			alert(html);
		}
		
	})
}
</script>