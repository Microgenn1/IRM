<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$this->Table->Panel_R1('BillSummery','Report'); ?>
<input type="hidden" id="RepName" name="RepName" value="Rep_billing"  />
<input type="hidden" id="Rfld" name="Rfld" value="Fdate,Tdate,Ledger_Id"  />
<input type="hidden" id="SCLM" name="SCLM" value="`5`"  />
 
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <table width="100%" border="0" align="center" class="list" cellpadding="3" cellspacing="4">
        <thead>
          <tr>
            <td>From Date</td>
            <td>To Date</td>
            <td>Ledger</td>
            <td> </td>
            </tr>
          </thead>
          <tr>
            <td width="17%"> 
            <input type="text" id="Fdate" name="Fdate" class="Dat"  /></td>
            <td width="18%">
            <input type="text" id="Tdate" name="Tdate" class="Dat"  /></td>
            <td width="24%"> 
            <?php $this->Ctrl->OptionBox("LGID#LNAME#mas_ledger where LGID in (SELECT Ledger_Id FROM Trans_booking) #Ledger_Id","0","0","All","0","form-control","0","B");?></td>
            <td><a class="btn btn-info btn-sm" onclick="Rep_(this)" scs="<?php echo scs_url ?>index.php/Report/Rep" >Get</a>&nbsp; &nbsp;</td>
          </tr>
        </table>
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
<script>



</script>