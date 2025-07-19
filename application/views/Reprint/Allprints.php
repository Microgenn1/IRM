<a class="btn btn-success" onclick="$winprint_('PRI','')" >PRINT</a>
<div id="PRI"  >
<?php

  $qt="select * from Trans_Sales where LID=".$_REQUEST['idd'];
$main=$this->db->query($qt);
 foreach($main->result_array() as $mw)
		 {
echo '</br>';
  $qry="SELECT T.BookingNo,L.CITY,L.LCODE,l.LNAME,p.PONO,CONVERT(VARCHAR,P.PODATE,106)[PODATE],p.RNO,p.TOTALAMT,p.TOT,p.NETAMT,P.ROU,
        l.LNAME,l.AD1,l.AD2,l.CITY[LCITY],l.PIN,l.EMAIL,l.PHONE,l.TIN[LTIN],l.CST[L.CST],T.VehicleNo,
          S.SNAME,S.ADD1,S.ADD2,S.CITY[CITY],S.PIN,S.PHONE,S.EMAIL,S.MOBILENO,S.TIN,S.CST,CONVERT(VARCHAR,T.BookingDate,106)[BookingDate],T.GCNO,T.Item,T.Refno,T.Amount,
          P.STAX,P.CESS,P.ROU,P.SHCESS,P.NAR,MC.Consignee,MC.AD1[MAD1],MC.AD2[MAD2],MC.CITY[MCITY],MR.Consigner,MR.AD1[RAD1],MR.AD2[RAD2],MR.CITY[RCITY]
          
          FROM Trans_Sales p
         INNER JOIN Trans_Booking T ON T.BILL_ID=P.PPID
         INNER JOIN Mas_Consignee mc ON mc.Consignee_Id=t.Consignee_Id
         INNER JOIN Mas_Consigner mr ON mr.Consigner_Id=t.Consigner_Id
          INNER JOIN mas_ledger L ON L.LGID=P.LID
 		  INNER JOIN Mas_Store s ON s.MSID=p.STOREID 
 		  
 		  WHERE p.PPID=". $mw['PPID'];
$row=$this->db->query($qry)->row();
$res=$this->db->query($qry);

 $sqry="SELECT * FROM Trans_Sales_Det WHERE POMID=".$mw['PPID'];
$sres=$this->db->query($sqry);

if($row->STAX=="00.0")
{
	 include('Bill.php');
}
else
{
	 include('BillTAX.php');
}

		 }
?>
</div>