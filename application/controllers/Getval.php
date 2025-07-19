<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getval extends CI_Controller {

	public function index()
	{
		  //$this->Getvals->Options();
	}
 
	public function Region()
	{
		$this->Ctrl->OptionBox_O("Region_Id#Region#Mas_Region 
		 WHERE Channel_Id=".$_REQUEST['Channel_Id']." #Region_Id","1","1","Select","","form-control","Spid(this.value)","B",'Region_Id');
	}
	public function Spid()
	{
		$qry="SELECT count(*)+1 as co FROM Mas_Agent   WHERE  Region_Id=".$_REQUEST['val'];
		$qrys="SELECT * FROM Mas_Region   WHERE  Region_Id=".$_REQUEST['val'];
		$cou=$this->db->query($qry)->row();
		$reg=$this->db->query($qrys)->row();
		$str="";
		switch(strlen($cou->co))
		{
			case"1":
			$str=$reg->RegionCode."00000".$cou->co;
			break;
			case"2":
			$str=$reg->RegionCode."0000".$cou->co;
			break;
		}
		echo $str;
	}
	public function SponsorCode()
	{
		$qry="SELECT * FROM Mas_Agent WHERE IdNo='".$_REQUEST['IdNo']."' ";
		$cou=$this->db->query($qry)->row();
		echo @$cou->Name;
	}
	public function Comm()
	{
		$this->Getvals->Comm();
	}
    public function Urg()
	{
		$this->db->query("UPDATE USERRIGHTS SET USHOW ='".$_REQUEST['vlu']."' WHERE URID = '".$_REQUEST['IDD']."'");
		echo 'Successfully Updated !!!! ';
	}
	public function FacUpdate()
	{
		$this->db->query("UPDATE Mas_Facility SET Ap ='".$_REQUEST['val']."' WHERE Fac_Id = '".$_REQUEST['idd']."'");
		echo 'Successfully Updated !!!! ';
	}
	public function CommUpdate()
	{
		 $this->Getvals->CommUpdate();
	}
	public function Ability()
	{
		$this->load->view('Process/avb');
	}
	public function Abilitychart()
	{
		$this->load->view('Process/avb2');
	}
	public function Avbprice()
	{
		$this->load->view('Process/avbpr');
	}
	
	public function MailDet()
	{
	
		$sk = "select * from Mas_MailServer where Hotel_Id='".$_SESSION['Hotel_Id']."'";
		$skres = $this->db->query($sk);
		foreach ($skres->result_array() as $rowk)
		{
			$smtp = $rowk['Smtp'];
			$port = $rowk['Port'];
			$essl = $rowk['Essl'];
			$header = $rowk['Header'];
			$footer = $rowk['Footer'];
			$emailid = $rowk['Email'];
			$password = $rowk['Password'];
		}
		
		$ska = "select * from Mas_Color where Hotel_Id='".$_SESSION['Hotel_Id']."'";
		$skresa = $this->db->query($ska);
		foreach ($skresa->result_array() as $rowka)
		{
			$color = $rowka['Color'];
		}
		
		$sk1 = "select * from Mas_Hotelpolice where Hotel_Id='".$_SESSION['Hotel_Id']."'";
		$skres1 = $this->db->query($sk1);
		foreach ($skres1->result_array() as $rowk1)
		{
			$bookpolicy = $rowk1['Hotelpolice'];
		}
		
		$sk2 = "select * from Mas_Cancellationpolicy where Hotel_Id='".$_SESSION['Hotel_Id']."'";
		$skres2 = $this->db->query($sk2);
		foreach ($skres2->result_array() as $rowk2)
		{
			$cancelpolicy = $rowk2['Cancellationpolicy'];
		}
		
		$mqry2 = "select ord.Total,ord.Transaction_Ref,ord.OrderDate,ord.RecNo,ml.LastName,ml.Email,ord.Ledger_Id,ord.Hotel_Id,t.RoomType_Id,ml.FirstName,ord.RecNo,ord.ChkIn,ord.ChkOut,t.NoofRoom,t.Adu,t.Amount,r.RoomType from Trans_Receipt_det t
		INNER join Trans_Receipt_Mas ord on ord.Rec_Id = t.Rec_Id
		Inner join Mas_irmRoomType r on r.RoomType_Id=t.RoomType_Id
		Inner join Mas_Ledger ml on ml.Ledger_ID = ord.Ledger_Id where ord.RecNo='".$_REQUEST['ORDNO']."'";
		$sqlres = $this->db->query($mqry2);
		$nos = $sqlres->num_rows();
		$message1 = "";
		$noroom = "0";
		$noadult = "0";
		$totamt = "0";
		$j = 1;
		foreach ($sqlres->result_array() as $row)
		{
			$sq = "select * from Mas_Hotel where Hotel_Id='".$row['Hotel_Id']."'";
			$sqrs = $this->db->query($sq);
			foreach ($sqrs->result_array() as $rowh)
			{
				$name = $rowh['HotelName'];
				$add1 = $rowh['Address'];
				$city = $rowh['City'];
				$pincode = $rowh['Pincode'];
				$mobile = $rowh['Mobile'];
				$emailadmin = $rowh['Email'];
				$web = $rowh['WebUrl'];
				$intime = $rowh['CheckIn'];
				$outtime = $rowh['CheckOut'];
			}
			
			$billno = $row['RecNo'];
			$orderdate = date("d-m-Y h:i",strtotime($row['OrderDate']));
			$email = $row['Email'];
			$first = $row['FirstName'];
			$last = $row['LastName'];
			
			$refno = $row['Transaction_Ref'];
			
			$logo = "http://".$_SERVER['HTTP_HOST']."/admin/uploads/hotellogo_1.jpg";
			$pax = $row['Adu'];
			
			if($j == 1)
			{
				$message1= " <table style='width: 100%'>
				<tbody>
				<tr>
				<td>
				
				<table height=50px style='width: 100%'>
				<tr  style='background: ".$color."'>
				<td cellpadding= 3 align=center text-decoration = none>
				<img style='background-color: #fff; border-radius: 25px' src='".$logo."'>
				</td>
				</tr>
				</table>
				<br>
				
				<table> 
				<tr>
				<td><b>Dear ".$first." ".$last.",</b><br></td>
				</tr> 
				<tr>
				<td>".$header."<br><br>
				</tr>
				</table>";
			}
			
			if($j == 1)
			{
				$message1 .="<table style='color: ".$color."; width: 100%' border=1px cellspacing=0 cellpadding=5>
				<tr>
				<td><b>Booking No</b></td>
				<td>".$billno."</td>
				</tr>
				<tr>
				<td><b>Booking Date & Time</b></td>
				<td>".$orderdate."</td>
				</tr>
				<tr>
				<td><b>Arrival Date & Time</b></td>
				<td>".date("d-m-Y",strtotime($row['ChkIn']))." ".$intime."</td>
				</tr>
				<tr>
				<td><b>Departure Date & Time</b></td>
				<td>".date("d-m-Y",strtotime($row['ChkOut']))." ".$outtime."</td>
				</tr>";
			}
			
			$message1 .= "<tr>
				<td><b>Room Type - Room(s) - Pax - Rent</b></td>
				<td>".$row['RoomType']." - ".$row['NoofRoom']." - ".$row['Adu']." - &#2352; ".round($row['Amount'])."</td>
				</tr>";
			
			$noroom = $noroom + $row['NoofRoom'];
			$noadult = $noadult + $row['Adu'];
			$totamt = $totamt + $row['Amount'];
			$gtotamt = $row['Total'];
			
			if($j == $nos)
			{
				$message1 .= "<tr border=2>
				<td style='border: 1px solid #000; text-align: left'><b>Total Amount Paid</b></td>
				<td style='border: 1px solid #000; text-align: left'>&#2352; ".round($gtotamt)."</td>
				</tr>
				<tr border=2>
				<td style='border: 1px solid #000; text-align: left'><b>Bank Transaction No</b></td>
				<td style='border: 1px solid #000; text-align: left'>".$refno."</td>
				</tr>";
			
				$message1 .= "</table>";

				$message1 .="<br>
				<table style='color: #fff; background: ".$color."; width:100%' cellpadding = 10px>
				<tr>
				<td>
				<hr>
				<h4>Booking Policy</h4>
				<pre style='font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif!important'><b>".$bookpolicy."</b></pre>
				<h4>Cancellation Policy</h4>
				<pre style='font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif!important'><b>".$cancelpolicy."</b></pre>
				<b>".$footer."</b>
				</td>
				</tr>
				</table>";
			}
			
			$j++;
		}
		
		$message1 .="</td></tr></tbody></table>";
		
		$from_name="Microgenn IRM";

		$subject="Booking ".$_REQUEST['ORDNO']."";

		include("phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();

		$mail->SMTPDebug = 0;
		$mail->IsSMTP();
		$mail->Host = "".$smtp."";
		$mail->SMTPAuth= true;
		$mail->Port = $port;
		$mail->Username= $emailid;
		$mail->Password= $password;
		if(strtolower($essl) == 'yes')
		{
			$mail->SMTPSecure = 'ssl';
		}
		else
		{
			$mail->SMTPSecure = 'tls';
		}
		$mail->From = $emailid;
		$mail->FromName= $from_name;
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = "Test";
		$mail->MsgHTML($message1);
		$mail->addAddress($email);

		if(!$mail->send())
		{ 
			echo "E-Mail sent failed";
		}
		else
		{
			echo "E-Mail has been sent";
		}
		
	}
	public function OrderDet()
	{
		echo "<style>
		#customers {
		  border-collapse: collapse;
		  width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #70348d;
		  color: white;
		}
		</style><table id='customers'>";
		$sql = " SELECT om.OrderDate,om.Transaction_Ref,om.RecNo,om.Hotel_Id,l.Title,om.Ord_Id,m.Adu,m.NoofRoom,convert(VARCHAR,om.ChkOut,106)Depdate,convert(VARCHAR,om.ChkIn,106)Ardate,ord.StatusID,rt.RoomType,om.Ord_Refno,l.Mobile,l.FirstName,convert(VARCHAR,m.OrderDate,106)Dat,sum(m.Amount) Amount,ss.STATUS FROM dbo.Trans_Receipt_Det M
		INNER JOIN Trans_Receipt_Mas om on om.Rec_Id = M.Rec_Id
		INNER JOIN Trans_Order_Mas ord on ord.Ord_Id = om.Ord_Id
		INNER JOIN mas_ledger l ON l.Ledger_ID=om.Ledger_Id
		INNER JOIN mas_irmroomtype rt on rt.RoomType_Id=m.RoomType_Id
		INNER JOIN mas_status ss ON ss.StatusID=ord.StatusID where om.RecNo='".$_REQUEST['ORDNO']."'
		GROUP BY om.OrderDate,om.Transaction_Ref,om.RecNo,om.Hotel_Id,l.Title,ord.StatusID,rt.RoomType,om.Ord_Refno,om.Ord_Id,l.FirstName,l.Mobile,m.OrderDate,ss.STATUS,m.Adu,m.NoofRoom,om.ChkOut,om.ChkIn
		ORDER BY M.OrderDate";
		$res = $this->db->query($sql);
		$cou = 1;
		foreach ($res->result_array() as $row)
		{
			$sqkw = "select * from Mas_Hotel where Hotel_Id='".$row['Hotel_Id']."'";
			$reskw = $this->db->query($sqkw);
			foreach ($reskw->result_array() as $rowkw)
			{
				$checkindate = $rowkw['CheckIn'];
				$checkoutdate = $rowkw['CheckOut'];
			}
			$title = $row['Title'];
			if($title == 1)
			{
				$titlecaption = "Mr.";
			}
			else if($title == 2)
			{
				$titlecaption = "Mrs.";
			}
			if($title == 3)
			{
				$titlecaption = "Ms.";
			}
			if($cou == 1)
			{
				echo "<tr><td colspan='9'>
				<div style='width: 100%'>
				<div style='width: 50%; float: left'>
				
				<div style='width: 50%; float: left'><b>Booking No</b></div>
				<div style='width: 50%; float: right'>: ".$row['RecNo']."</div>
				
				<div style='width: 50%; float: left'><b>Booking Date</b></div>
				<div style='width: 50%; float: right'>: ".date("d-m-Y h:i",strtotime($row['OrderDate']))."</div>
				
				<div style='width: 50%; float: left'><b>Bank RefNo</b></div>
				<div style='width: 50%; float: right'>: ".$row['Transaction_Ref']."</div>

				</div>
				<div style='width: 50%; float: right'>
				
				<div style='width: 30%; float: left'><b>Guest Name</b></div>
				<div style='width: 70%; float: right'>: ".$titlecaption."".$row['FirstName']."</div>

				<div style='width: 30%; float: left'><b>Mobile</b></div>
				<div style='width: 70%; float: right'>: ".$row['Mobile']."</div>

				<div style='width: 30%; float: left'><b>Arrival</b></div>
				<div style='width: 70%; float: right'>: ".$row['Ardate']." ".$checkindate."</div>

				<div style='width: 30%; float: left'><b>Departure</b></div>
				<div style='width: 70%; float: right'>: ".$row['Depdate']." ".$checkoutdate."</div>

				</div>
				</div>
				</td></tr>";
				
				echo "<tr>
				<th>SNo</th>
				<th>Room Type</th>
				<th>Amount</th>
				<th>Room</th>
				<th>Pax</th>
				</tr>";
			}
			$pax = $row['Adu'];
			echo "<tr>
			<td>".$cou++."</td>
			<td>".$row['RoomType']."</td>
			<td>".$row['Amount']."</td>
			<td>".$row['NoofRoom']."</td>
			<td>".$pax."</td>
			</tr>";
		}
		echo "</table>";
	}
	
	public function OrderDetRef()
	{
		echo "<style>
		#customers {
		  border-collapse: collapse;
		  width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #70348d;
		  color: white;
		}
		</style><table id='customers'>";
		$sql = " SELECT ord.OrderDate,ord.Transaction_Ref,ord.OrdNo,ord.Hotel_Id,l.Title,m.Ord_Id,m.Adu,m.NoofRoom,convert(VARCHAR,ord.ChkOut,106)Depdate,convert(VARCHAR,ord.ChkIn,106)Ardate,rt.RoomType,ord.Ord_Refno,l.Mobile,l.FirstName,convert(VARCHAR,m.OrderDate,106)Dat,sum(m.Amount) Amount FROM dbo.Trans_Order_Det M
		INNER JOIN Trans_Order_Mas ord on ord.Ord_Id = m.Ord_Id
		INNER JOIN mas_ledger l ON l.Ledger_ID=ord.Ledger_Id
		INNER JOIN mas_irmroomtype rt on rt.RoomType_Id=m.RoomType_Id where ord.OrdNo='".$_REQUEST['ORDNO']."'
		GROUP BY ord.OrderDate,ord.Transaction_Ref,ord.OrdNo,ord.Hotel_Id,l.Title,rt.RoomType,ord.Ord_Refno,m.Ord_Id,l.FirstName,l.Mobile,m.OrderDate,m.Adu,m.NoofRoom,ord.ChkOut,ord.ChkIn
		ORDER BY M.Ord_Id";
		$res = $this->db->query($sql);
		$cou = 1;
		foreach ($res->result_array() as $row)
		{
			if($cou == 1)
			{
				$sqkw = "select * from Mas_Hotel where Hotel_Id='".$row['Hotel_Id']."'";
				$reskw = $this->db->query($sqkw);
			foreach ($reskw->result_array() as $rowkw)
			{
				$checkindate = $rowkw['checkin'];
				$checkoutdate = $rowkw['checkout'];
			}
			$title = $row['Title'];
			if($title == 1)
			{
				$titlecaption = "Mr.";
			}
			else if($title == 2)
			{
				$titlecaption = "Mrs.";
			}
			if($title == 3)
			{
				$titlecaption = "Ms.";
			}
			
				echo "<tr><td colspan='9'>
				<div style='width: 100%'>
				<div style='width: 50%; float: left'>
				
				<div style='width: 50%; float: left'><b>Order No</b></div>
				<div style='width: 50%; float: right'>: ".$row['OrdNo']."</div>
				
				<div style='width: 50%; float: left'><b>Order Date</b></div>
				<div style='width: 50%; float: right'>: ".date("d-m-Y h:i",strtotime($row['OrderDate']))."</div>
				
				<div style='width: 50%; float: left'><b>Bank RefNo</b></div>
				<div style='width: 50%; float: right'>: ".$row['Transaction_Ref']."</div>
				
				</div>
				<div style='width: 50%; float: right'>
				
				<div style='width: 30%; float: left'><b>Guest Name</b></div>
				<div style='width: 70%; float: right'>: ".$titlecaption."".$row['FirstName']."</div>

				<div style='width: 30%; float: left'><b>Mobile</b></div>
				<div style='width: 70%; float: right'>: ".$row['Mobile']."</div>

				<div style='width: 30%; float: left'><b>Arrival</b></div>
				<div style='width: 70%; float: right'>: ".$row['Ardate']." ".$checkindate."</div>

				<div style='width: 30%; float: left'><b>Departure</b></div>
				<div style='width: 70%; float: right'>: ".$row['Depdate']." ".$checkoutdate."</div>
				
				</div>
				</div>
				</td></tr>";
				
				echo "<tr>
				<th>SNo</th>
				<th>Ref No</th>
				<th>Room Type</th>
				<th>Order Date</th>
				<th>Amount</th>
				<th>Room</th>
				<th>Pax</th>
				</tr>";
			}
			$pax = $row['Adu'];
			echo "<tr>
			<td>".$cou++."</td>
			<td>".$row['Ord_Refno']."</td>
			<td>".$row['RoomType']."</td>
			<td>".$row['Dat']."</td>
			<td>".$row['Amount']."</td>
			<td>".$row['NoofRoom']."</td>
			<td>".$pax."</td>
			</tr>";
		}
		echo "</table>";
	}
	
	public function AvbInsert()
	{
		$RCOU= $_REQUEST['RCOU'];
		$qry="";
		for($i=1;$i<=$RCOU;$i++)
		{
			$str =$_REQUEST['I'.$i];
			$ary = explode('K', $str);	
			
			$qry1= "select * from Trans_RecTable where Hotel_Id='".$_SESSION['Hotel_Id']."' and RoomType_Id='".$ary[0]."' and DA='".$ary[3]."' and MO='".$ary[1]."' and YE='".$ary[2]."'";
			$res1 = $this->db->query($qry1);
			$num = $res1->num_rows();
			if($num >= 1)
			{
				foreach ($res1->result_array() as $row)
				{
					$avl = $row['AVB'];
				}
				$newavl = $_REQUEST['R'.$i];
				$qry .=" update Trans_RecTable set AVB=".$newavl." where MO=".$ary[1]." and YE=".$ary[2]." and DA=".$ary[3]." and RoomType_Id=".$ary[0]." ";
				
			}
			else
			{
				$qry2 = "select * from Mas_irmRoomType where Hotel_Id='".$_SESSION['Hotel_Id']."' and RoomType_Id='".$ary[0]."'";
				$res2 = $this->db->query($qry2);
				foreach ($res2->result_array() as $row2)
				{
					$amt = $row2['Amount'];
				}
				
				$sqlk ="select * from Mas_Tax where ".$amt." between FROMAMOUNT and TOAMOUNT";
				$resk=$this->db->query($sqlk);
				foreach($resk->result_array() as $rowk)
				{
					$cgst = $rowk['CGST'];
					$sgst = $rowk['SGST'];
				}
			
				$qry .=" Insert Into Trans_RecTable(Hotel_Id,RoomType_Id,DA,AVB,MO,YE,DAT,RENT,CGST,SGST) values ('".$_SESSION['Hotel_Id']."','".$ary[0]."','".$ary[3]."','".$_REQUEST['R'.$i]."','".$ary[1]."','".$ary[2]."','".$ary[2]."-".$ary[1]."-".$ary[3]." 00:00:00','".$amt."','".$cgst."','".$sgst."') ";
			}
		}
		if($this->db->query($qry))
		{
		  echo 'Successfully Saved !!!';
		}
		
	}
	
	public function AvbUpdate()
	{
		$RCOU= $_REQUEST['RCOU'] ;
		$qry="";
		for($i=1;$i<=$RCOU;$i++)
		{
			$str =$_REQUEST['I'.$i];
			$ary = explode('K', $str);
			$qry .=" update Trans_RecTable set AVB=".$_REQUEST['R'.$i]." where MO=".$ary[1]." and YE=".$ary[2]." and DA=".$ary[3]." and RoomType_Id=".$ary[0]." ";
		}
		if($this->db->query($qry))
		{
		  echo 'Successfully Saved !!!';
		}
	}
	
	public function AvbUpdateprice()
	{
		$RCOU= $_REQUEST['RCOU'] ;
		$qry="";
		
		for($i=1;$i<=$RCOU;$i++)
		{
			$str =$_REQUEST['I'.$i];
			$ary = explode('K', $str);	
			
			$qry1= "select * from Trans_RecTable where Hotel_Id='".$_SESSION['Hotel_Id']."' and RoomType_Id='".$ary[0]."' and DA='".$ary[3]."' and MO='".$ary[1]."' and YE='".$ary[2]."'";
			$res1 = $this->db->query($qry1);
			$num = $res1->num_rows();
			if($num >= 1)
			{
				$newavl = $_REQUEST['R'.$i];
				
				$sqlk ="select * from Mas_Tax where ".$newavl." between FROMAMOUNT and TOAMOUNT";
				$resk=$this->db->query($sqlk);
				foreach($resk->result_array() as $rowk)
				{
					$cgst = $rowk['CGST'];
					$sgst = $rowk['SGST'];
				}
				
				$qry .=" update Trans_RecTable set SGST=".$sgst.",CGST=".$cgst.",RENT=".$newavl." where MO=".$ary[1]." and YE=".$ary[2]." and DA=".$ary[3]." and RoomType_Id=".$ary[0]." ";
			}
			else
			{
				
			}
		}
		if($this->db->query($qry))
		{
		  echo 'Successfully Saved !!!';
		}
	}
}
