<?php
include(scs_path."Header.php");
include(scs_path."Top.php");
include(scs_path."Menu.php");
$ho=$this->db->query("exec HotelDetails_Web ".$_SESSION['Hotel_Id'])->row();
 
$this->Table->Panel_S1('HotelCreation','Master'); ?>
<input type="hidden" id="HtmlForm" name="HtmlForm" value="Pro_Mas_Hotel <?php echo $_SESSION['Hotel_Id']; ?>"  />
<input type="hidden" id="Hotel_Id" name="Hotel_Id" value="<?php echo $_SESSION['Hotel_Id']; ?>"  />
<input type="hidden" id="TableName" name="TableName" value="Mas_Hotel"  />

<div class="fram" >
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >HotelCode <?php echo $_SESSION['Hotel_Id'] ?></label>
     
         <input type="text" ty="V" ln="20" readonly isn="1" value="<?php echo $ho->HCode; ?>" id="HCode" name="HCode" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >HotelName</label>
        <input   class="form-control" type="text" value="<?php echo $ho->Company; ?>" name="Company" id="Company" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
    
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Address  </label>
        <input   class="form-control" type="text" name="Address" value="<?php echo $ho->Address; ?>" id="Address" val="1" num="0" isn="1" ln="300" ty="V" maxlength="900" >
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >City</label>
        <input   class="form-control" type="text"  name="City" id="City" value="<?php echo $ho->City; ?>" val="0" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
   
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Pin Code</label>
        <input   class="form-control" type="text" name="PinCode" id="PinCode" value="<?php echo $ho->PinCode; ?>" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >AreaCode</label>
        <input   class="form-control" type="text" name="AreaCode" id="AreaCode" value="<?php echo $ho->AreaCode; ?>" val="1" num="0" isn="1" ln="30" ty="V" maxlength="30" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Mobile</label>
        <input   class="form-control" type="text" name="MobileNo" id="MobileNo" value="<?php echo $ho->MobileNo; ?>" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Email</label>
        <input   class="form-control" type="text" name="Email" id="Email" value="<?php echo $ho->Email; ?>" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >Phone</label>
        <input   class="form-control" type="text" name="Phone" id="Phone" value="<?php echo $ho->Phone; ?>" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
      </div>
    </div>
  </div>
  
    <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >CheckIn Time</label>
        <select   class="form-control" type="text" name="checkin" id="checkin" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
            <option <?php if($ho->checkin == "00:00:00"){ echo "selected";} ?> value="00:00:00">00:00:00</option>
            <option <?php if($ho->checkin == "00:30:00"){ echo "selected";} ?> value="00:30:00">00:30:00</option>
			<option <?php if($ho->checkin == "01:00:00"){ echo "selected";} ?> value="01:00:00">01:00:00</option>
			<option <?php if($ho->checkin == "01:30:00"){ echo "selected";} ?> value="01:30:00">01:30:00</option>
			<option <?php if($ho->checkin == "02:00:00"){ echo "selected";} ?> value="02:00:00">02:00:00</option>
			<option <?php if($ho->checkin == "02:30:00"){ echo "selected";} ?> value="02:30:00">02:30:00</option>
			<option <?php if($ho->checkin == "03:00:00"){ echo "selected";} ?> value="03:00:00">03:00:00</option>
			<option <?php if($ho->checkin == "03:30:00"){ echo "selected";} ?> value="03:30:00">03:30:00</option>
			<option <?php if($ho->checkin == "04:00:00"){ echo "selected";} ?> value="04:00:00">04:00:00</option>
			<option <?php if($ho->checkin == "04:30:00"){ echo "selected";} ?> value="04:30:00">04:30:00</option>
			<option <?php if($ho->checkin == "05:00:00"){ echo "selected";} ?> value="05:00:00">05:00:00</option>
			<option <?php if($ho->checkin == "05:30:00"){ echo "selected";} ?> value="05:30:00">05:30:00</option>
			<option <?php if($ho->checkin == "06:00:00"){ echo "selected";} ?> value="06:00:00">06:00:00</option>
			<option <?php if($ho->checkin == "06:30:00"){ echo "selected";} ?> value="06:30:00">06:30:00</option>
			<option <?php if($ho->checkin == "07:00:00"){ echo "selected";} ?> value="07:00:00">07:00:00</option>
			<option <?php if($ho->checkin == "07:30:00"){ echo "selected";} ?> value="07:30:00">07:30:00</option>
			<option <?php if($ho->checkin == "08:00:00"){ echo "selected";} ?> value="08:00:00">08:00:00</option>
			<option <?php if($ho->checkin == "08:30:00"){ echo "selected";} ?> value="08:30:00">08:30:00</option>
			<option <?php if($ho->checkin == "09:00:00"){ echo "selected";} ?> value="09:00:00">09:00:00</option>
			<option <?php if($ho->checkin == "09:30:00"){ echo "selected";} ?> value="09:30:00">09:30:00</option>
			<option <?php if($ho->checkin == "10:00:00"){ echo "selected";} ?> value="10:00:00">10:00:00</option>
			<option <?php if($ho->checkin == "10:30:00"){ echo "selected";} ?> value="10:30:00">10:30:00</option>
			<option <?php if($ho->checkin == "11:00:00"){ echo "selected";} ?> value="11:00:00">11:00:00</option>
			<option <?php if($ho->checkin == "11:30:00"){ echo "selected";} ?> value="11:30:00">11:30:00</option>
			<option <?php if($ho->checkin == "12:00:00"){ echo "selected";} ?> value="12:00:00">12:00:00</option>
			<option <?php if($ho->checkin == "12:30:00"){ echo "selected";} ?> value="12:30:00">12:30:00</option>
			<option <?php if($ho->checkin == "13:00:00"){ echo "selected";} ?> value="13:00:00">13:00:00</option>
			<option <?php if($ho->checkin == "13:30:00"){ echo "selected";} ?> value="13:30:00">13:30:00</option>
			<option <?php if($ho->checkin == "14:00:00"){ echo "selected";} ?> value="14:00:00">14:00:00</option>
			<option <?php if($ho->checkin == "14:30:00"){ echo "selected";} ?> value="14:30:00">14:30:00</option>
			<option <?php if($ho->checkin == "15:00:00"){ echo "selected";} ?> value="15:00:00">15:00:00</option>
			<option <?php if($ho->checkin == "15:30:00"){ echo "selected";} ?> value="15:30:00">15:30:00</option>
			<option <?php if($ho->checkin == "16:00:00"){ echo "selected";} ?> value="16:00:00">16:00:00</option>
			<option <?php if($ho->checkin == "16:30:00"){ echo "selected";} ?> value="16:30:00">16:30:00</option>
			<option <?php if($ho->checkin == "17:00:00"){ echo "selected";} ?> value="17:00:00">17:00:00</option>
			<option <?php if($ho->checkin == "17:30:00"){ echo "selected";} ?> value="17:30:00">17:30:00</option>
			<option <?php if($ho->checkin == "18:00:00"){ echo "selected";} ?> value="18:00:00">18:00:00</option>
			<option <?php if($ho->checkin == "18:30:00"){ echo "selected";} ?> value="18:30:00">18:30:00</option>
			<option <?php if($ho->checkin == "19:00:00"){ echo "selected";} ?> value="19:00:00">19:00:00</option>
			<option <?php if($ho->checkin == "19:30:00"){ echo "selected";} ?> value="19:30:00">19:30:00</option>
			<option <?php if($ho->checkin == "20:00:00"){ echo "selected";} ?> value="20:00:00">20:00:00</option>
			<option <?php if($ho->checkin == "20:30:00"){ echo "selected";} ?> value="20:30:00">20:30:00</option>
			<option <?php if($ho->checkin == "21:00:00"){ echo "selected";} ?> value="21:00:00">21:00:00</option>
			<option <?php if($ho->checkin == "21:30:00"){ echo "selected";} ?> value="21:30:00">21:30:00</option>
			<option <?php if($ho->checkin == "22:00:00"){ echo "selected";} ?> value="22:00:00">22:00:00</option>
			<option <?php if($ho->checkin == "22:30:00"){ echo "selected";} ?> value="22:30:00">22:30:00</option>
			<option <?php if($ho->checkin == "23:00:00"){ echo "selected";} ?> value="23:00:00">23:00:00</option>
			<option <?php if($ho->checkin == "23:30:00"){ echo "selected";} ?> value="23:30:00">23:30:00</option>
        </select>
      </div>
    </div>
  </div>


    <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow" >CheckOut Time</label>
        <select   class="form-control" type="text" name="checkout" id="checkout" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
            <option <?php if($ho->checkout == "00:00:00"){ echo "selected";} ?> value="00:00:00">00:00:00</option>
            <option <?php if($ho->checkout == "00:30:00"){ echo "selected";} ?> value="00:30:00">00:30:00</option>
			<option <?php if($ho->checkout == "01:00:00"){ echo "selected";} ?> value="01:00:00">01:00:00</option>
			<option <?php if($ho->checkout == "01:30:00"){ echo "selected";} ?> value="01:30:00">01:30:00</option>
			<option <?php if($ho->checkout == "02:00:00"){ echo "selected";} ?> value="02:00:00">02:00:00</option>
			<option <?php if($ho->checkout == "02:30:00"){ echo "selected";} ?> value="02:30:00">02:30:00</option>
			<option <?php if($ho->checkout == "03:00:00"){ echo "selected";} ?> value="03:00:00">03:00:00</option>
			<option <?php if($ho->checkout == "03:30:00"){ echo "selected";} ?> value="03:30:00">03:30:00</option>
			<option <?php if($ho->checkout == "04:00:00"){ echo "selected";} ?> value="04:00:00">04:00:00</option>
			<option <?php if($ho->checkout == "04:30:00"){ echo "selected";} ?> value="04:30:00">04:30:00</option>
			<option <?php if($ho->checkout == "05:00:00"){ echo "selected";} ?> value="05:00:00">05:00:00</option>
			<option <?php if($ho->checkout == "05:30:00"){ echo "selected";} ?> value="05:30:00">05:30:00</option>
			<option <?php if($ho->checkout == "06:00:00"){ echo "selected";} ?> value="06:00:00">06:00:00</option>
			<option <?php if($ho->checkout == "06:30:00"){ echo "selected";} ?> value="06:30:00">06:30:00</option>
			<option <?php if($ho->checkout == "07:00:00"){ echo "selected";} ?> value="07:00:00">07:00:00</option>
			<option <?php if($ho->checkout == "07:30:00"){ echo "selected";} ?> value="07:30:00">07:30:00</option>
			<option <?php if($ho->checkout == "08:00:00"){ echo "selected";} ?> value="08:00:00">08:00:00</option>
			<option <?php if($ho->checkout == "08:30:00"){ echo "selected";} ?> value="08:30:00">08:30:00</option>
			<option <?php if($ho->checkout == "09:00:00"){ echo "selected";} ?> value="09:00:00">09:00:00</option>
			<option <?php if($ho->checkout == "09:30:00"){ echo "selected";} ?> value="09:30:00">09:30:00</option>
			<option <?php if($ho->checkout == "10:00:00"){ echo "selected";} ?> value="10:00:00">10:00:00</option>
			<option <?php if($ho->checkout == "10:30:00"){ echo "selected";} ?> value="10:30:00">10:30:00</option>
			<option <?php if($ho->checkout == "11:00:00"){ echo "selected";} ?> value="11:00:00">11:00:00</option>
			<option <?php if($ho->checkout == "11:30:00"){ echo "selected";} ?> value="11:30:00">11:30:00</option>
			<option <?php if($ho->checkout == "12:00:00"){ echo "selected";} ?> value="12:00:00">12:00:00</option>
			<option <?php if($ho->checkout == "12:30:00"){ echo "selected";} ?> value="12:30:00">12:30:00</option>
			<option <?php if($ho->checkout == "13:00:00"){ echo "selected";} ?> value="13:00:00">13:00:00</option>
			<option <?php if($ho->checkout == "13:30:00"){ echo "selected";} ?> value="13:30:00">13:30:00</option>
			<option <?php if($ho->checkout == "14:00:00"){ echo "selected";} ?> value="14:00:00">14:00:00</option>
			<option <?php if($ho->checkout == "14:30:00"){ echo "selected";} ?> value="14:30:00">14:30:00</option>
			<option <?php if($ho->checkout == "15:00:00"){ echo "selected";} ?> value="15:00:00">15:00:00</option>
			<option <?php if($ho->checkout == "15:30:00"){ echo "selected";} ?> value="15:30:00">15:30:00</option>
			<option <?php if($ho->checkout == "16:00:00"){ echo "selected";} ?> value="16:00:00">16:00:00</option>
			<option <?php if($ho->checkout == "16:30:00"){ echo "selected";} ?> value="16:30:00">16:30:00</option>
			<option <?php if($ho->checkout == "17:00:00"){ echo "selected";} ?> value="17:00:00">17:00:00</option>
			<option <?php if($ho->checkout == "17:30:00"){ echo "selected";} ?> value="17:30:00">17:30:00</option>
			<option <?php if($ho->checkout == "18:00:00"){ echo "selected";} ?> value="18:00:00">18:00:00</option>
			<option <?php if($ho->checkout == "18:30:00"){ echo "selected";} ?> value="18:30:00">18:30:00</option>
			<option <?php if($ho->checkout == "19:00:00"){ echo "selected";} ?> value="19:00:00">19:00:00</option>
			<option <?php if($ho->checkout == "19:30:00"){ echo "selected";} ?> value="19:30:00">19:30:00</option>
			<option <?php if($ho->checkout == "20:00:00"){ echo "selected";} ?> value="20:00:00">20:00:00</option>
			<option <?php if($ho->checkout == "20:30:00"){ echo "selected";} ?> value="20:30:00">20:30:00</option>
			<option <?php if($ho->checkout == "21:00:00"){ echo "selected";} ?> value="21:00:00">21:00:00</option>
			<option <?php if($ho->checkout == "21:30:00"){ echo "selected";} ?> value="21:30:00">21:30:00</option>
			<option <?php if($ho->checkout == "22:00:00"){ echo "selected";} ?> value="22:00:00">22:00:00</option>
			<option <?php if($ho->checkout == "22:30:00"){ echo "selected";} ?> value="22:30:00">22:30:00</option>
			<option <?php if($ho->checkout == "23:00:00"){ echo "selected";} ?> value="23:00:00">23:00:00</option>
			<option <?php if($ho->checkout == "23:30:00"){ echo "selected";} ?> value="23:30:00">23:30:00</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <label class="text-yellow">Same Day Checkin</label>
        <select class="form-control" type="text" name="todays_checkin" id="todays_checkin" val="1" num="0" isn="1" ln="30" ty="V" maxlength="300" >
        <option <?php if($ho->todays_checkin == "1"){ echo "selected";} ?> value="1">Yes</option>
        <option <?php if($ho->todays_checkin == "0"){ echo "selected";} ?> value="0">No</option>
        </select>
      </div>
    </div>
  </div>
  
 
 
  <div class="form-group">
    <div class="row">
      <div class="col-xs-5">
        <button type="button" class="btn btn-info"  scs="<?php echo @NET ?>" onclick="eva_(this)" type="button" id="BUTS" value="Save" name="BUT" idn="Hotel_Id"    >
        Update
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