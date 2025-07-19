<?php
include(scs_path."Header.php");
include(scs_path."Admenu.php");
 
$this->Table->Panel_S1('Hotel','Master'); ?>

<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Admin_Hotel"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Hotel"  />
<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >HotelCode</label>
        <?php $this->Ctrl->AutNum('HotelCode','','Mas_Hotel',1,'','form-control')?>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >HotelName</label>
        <input   class="form-control" type="text" name="HotelName" id="HotelName" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Address </label>
        <input   class="form-control" type="text" name="Address" id="Address" val="1" num="0" isn="1" ln="300" ty="V" maxlength="900" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >State</label>
        <select class="form-control" val="1" num="0" isn="1" ln="300" ty="V" name="State" id="State">
          <option selected value=''>Select</option>
          <option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
          <option value='Andhra Pradesh'>Andhra Pradesh</option>
          <option value='Arunachal Pradesh'>Arunachal Pradesh</option>
          <option value='Assam'>Assam</option>
          <option value='Bihar'>Bihar</option>
          <option value='Chandigarh'>Chandigarh</option>
          <option value='Chhattisgarh'>Chhattisgarh</option>
          <option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
          <option value='Daman and Diu'>Daman and Diu</option>
          <option value='Delhi'>Delhi</option>
          <option value='Goa'>Goa</option>
          <option value='Gujarat'>Gujarat</option>
          <option value='Haryana'>Haryana</option>
          <option value='Himachal Pradesh'>Himachal Pradesh</option>
          <option value='Jammu and Kashmir'>Jammu and Kashmir</option>
          <option value='Jharkhand'>Jharkhand</option>
          <option value='Karnataka'>Karnataka</option>
          <option value='Kerala'>Kerala</option>
          <option value='Lakshadweep'>Lakshadweep</option>
          <option value='Madhya Pradesh'>Madhya Pradesh</option>
          <option value='Maharashtra'>Maharashtra</option>
          <option value='Manipur'>Manipur</option>
          <option value='Meghalaya'>Meghalaya</option>
          <option value='Mizoram'>Mizoram</option>
          <option value='Nagaland'>Nagaland</option>
          <option value='Odisha'>Odisha</option>
          <option value='Puducherry'>Puducherry</option>
          <option value='Punjab'>Punjab</option>
          <option value='Rajasthan'>Rajasthan</option>
          <option value='Sikkim'>Sikkim</option>
          <option value='Tamil Nadu'>Tamil Nadu</option>
          <option value='Telengana'>Telengana</option>
          <option value='Tripura'>Tripura</option>
          <option value='Uttar Pradesh'>Uttar Pradesh</option>
          <option value='Uttarakhand'>Uttarakhand</option>
          <option value='West Bengal'>West Bengal</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >City</label>
        <select class="form-control" val="1" num="0" isn="1" ln="300" ty="V" name="City" id="City">
          <option selected value=''>Select</option>
          <option value="Chennai">Chennai (Madras)</option>
          <option value="Madurai">Madurai</option>
          <option value="Coimbatore">Coimbatore</option>
          <option value="Tiruchirapalli">Tiruchirapalli</option>
          <option value="Salem">Salem</option>
          <option value="Tiruppur">Tiruppur (Tirupper)</option>
          <option value="Ambattur">Ambattur</option>
          <option value="Thanjavur">Thanjavur</option>
          <option value="Tuticorin">Tuticorin</option>
          <option value="NagarCoil">NagarCoil</option>
          <option value="Avadi">Avadi</option>
          <option value="Dindigul">Dindigul</option>
         
        </select>
        
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Pine Code</label>
        <input   class="form-control" type="text" name="Pincode" id="Pincode" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >AreaCode</label>
        <input   class="form-control" type="text" name="AreaCode" id="AreaCode" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Mobile</label>
        <input   class="form-control" type="text" name="Mobile" id="Mobile" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Email</label>
        <input   class="form-control" type="text" name="Email" id="Email" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Phone</label>
        <input   class="form-control" type="text" name="Phone" id="Phone" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Property types</label>
        <select   class="form-control" type="text" name="Property" id="Property" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
        <option value="Apartment">Apartment</option>
        <option value="Hotels">Hotels</option>
        <option value="Resort">Resort</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Pay at hotel</label>
        <select   class="form-control" type="text" name="PayHotel" id="PayHotel" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
        <option value="1">Yes</option>
        <option value="0">No</option>
        
        </select>
      </div>
    </div>
  </div>  
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Hotel_Id"    >
        SAVE
        </button>
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
$(document).ready(function(e) {
    $("#LCODE").focus();
	 
});
</script>