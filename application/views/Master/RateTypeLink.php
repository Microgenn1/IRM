<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('RateTypeLink','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="PRO_Ratecode_Mas <?php echo $_SESSION['Hotel_Id']?>"  />
<input type="hidden" id="RateCode_Id" name="RateCode_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Ratecode_Mas"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" val="1" num="0" isn="1" ln="30" ty="B" value="<?php echo $_SESSION['Hotel_Id']?>" >
<div class="fram" >


</div>
 
<div id="TableView" ></div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $("#ACCODE").focus();
 
});
function RoomTy(aa,bb)
{
	$("#UQ").val(bb+aa);
}
</script>