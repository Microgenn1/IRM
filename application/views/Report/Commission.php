<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_R1('Commission','Report'); ?>
<style>
.form-control {
	margin-left:10px;
}
legend {
	font-size:16px;
	color:#1D659A
}
 [val="1"] {
border-right:1px solid #D20015 !important;
}
.ful{ width:100% !important }
.Sele{ width:80% !important }
</style>
 
<div class="fram" >
 <form id="come" name="come" method="post" >
  <table width="100%" border="0" cellspacing="2" cellpadding="1" style="margin-top:-30px"  >
    <tr>
      <td colspan="11">&nbsp;</td>
    </tr>
    <tr>
      <td width="1%">&nbsp;</td>
      <td width="14%" align="right" valign="middle">Agent Code</td>
      <td width="16%" align="left" valign="middle"><input onblur="Sp(this.value)"   class="form-control" type="text" name="SponsorCode" id="SponsorCode"   val="1" num="0" isn="1" ln="300" ty="V" maxlength="300" ></td>
      <td width="9%" align="right" valign="middle">Agent Name</td>
      <td width="19%" align="left" valign="middle"><input readonly="readonly"  class="form-control" type="text" name="SponsorName" id="SponsorName"   val="1" num="0" isn="1" ln="300" ty="V" maxlength="300" ></td>
      <td width="8%" align="right" valign="middle">Month</td>
      <td width="5%" align="left" valign="middle">
      <select id="MO" name="MO" >
      <?php for($i=1;$i<13;$i++)
	  {
        echo '<option value="'.$i.'" >'.$i.'</option>';
	  }
	  ?>
      </select>
      </td>
      <td width="5%" align="right" valign="middle">Year</td>
      <td width="9%"><select id="YR" name="YR" >
       <option value="2014" selected="selected" >2014</option> 
       <option value="2015" >2015</option>
       </select></td>
      <td width="6%"><a class="btn btn-info" onclick="Comm()" >Get</a></td>
      <td width="8%">&nbsp;</td>
    </tr>
     
    <tr>
      <td colspan="11">&nbsp;</td>
    </tr>
  </table>
</form>
</div>
<div id="pri" ></div>
<?php
 
$this->Table->Panel_E1();
include(scs_path."footer.php");
?>
<script>
$(document).ready(function(e) {
    $("#ACCODE").focus();
 
});

function Sp(ival)
{
	$.ajax({
		
		type : "POST",
		url : "<?php echo scs_url ?>index.php/Getval/SponsorCode?IdNo="+ival,
		data : "",
		success : function(html)
		{			
			$("#SponsorName").val(html);
		}
	})
}

function Comm()
{
	
	$.ajax({
		
		type : "POST",
		url : "<?php echo scs_url ?>index.php/Getval/Comm",
		data :"idd="+$("#SponsorCode").val()+"&MO="+$("#MO").val()+"&YR="+$("#YR").val(),
		success : function(html)
		{			
			$("#pri").html(html);
		}
	})
}

function CommPost()
{
	$.ajax({
		
		type : "POST",
		url : "<?php echo scs_url ?>index.php/Getval/CommUpdate",
		data :"idd="+$("#SponsorCode").val()+"&MO="+$("#MO").val()+"&YR="+$("#YR").val(),
		success : function(html)
		{			
			$("#pri").html(html);
		}
	})
}
</script>