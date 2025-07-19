<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_S1('CollectionReprint','Reprint'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Trans_sales"  />
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <table width="100%" border="0" cellspacing="1" cellpadding="1" class="table">
          <tr>
            <td width="8%" align="left" valign="middle">&nbsp;<strong>From Date</strong></td>
            <td width="15%" align="left" valign="middle"><input   class="form-control Dat" type="text" name="FDATE" id="FDATE"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
            <td width="5%" align="left" valign="middle"><strong>To Date </strong></td>
            <td width="22%" align="left" valign="middle"><input   class="form-control Dat" type="text" name="TDATE" id="TDATE"   val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" ></td>
            <td width="9%" align="left" valign="middle"><strong>Customer</strong></td>
            <td width="20%" align="left" valign="middle"><?php $this->Ctrl->OptionBox("LGID#LNAME#mas_ledger  #Ledger_Id","1","1","Select","","form-control","","B");?></td>
            <td width="21%" align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <a type="button" class="btn btn-info"     onclick="BillEntry()"      > Get </a>
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
function BillEntry()
{
   if($('#Ledger_Id').val()!="")
   { 
		$.ajax({			
					type:window.post,
					url: "<?php echo scs_url ?>index.php/GetVal/ColReprint",
					data: $("#Fram").serialize(),
					success: function (html) {
						
						$("#TableView").html(html);
						//$htb_();
					}
		})
   }
   else
   {
	   scsbox('Please Select Ledger !!! ');
   }

}
function Bill_Reprint(idd)
{
 	$.ajax({			
					type:window.post,
					url: "<?php echo scs_url ?>index.php/Reprint/CReprint?idd="+idd,
					data: $("#Fram").serialize(),
					success: function (html) {
						
						$("#TableView").html(html);
						//$htb_();
					}
		})
}
</script>