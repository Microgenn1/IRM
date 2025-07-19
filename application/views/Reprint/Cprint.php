<?php
 $qry="

SELECT *,s.PONO as Po,c.PONO as Cno,convert(varchar,c.PODATE,106) as Pdat,d.Colamt as am,c.TOTALAMT as TAMT FROM Trans_Collection c
INNER JOIN Trans_Collection_Det d ON d.CloMas_ID=c.PPID
INNER JOIN Trans_Sales s ON s.PPID=d.Bill_ID
INNER JOIN Mas_Store st ON st.MSID=s.STOREID
INNER JOIN Mas_Ledger l ON l.LGID=s.LID WHERE c.PPID=".$_REQUEST['idd'];
$row=$this->db->query($qry)->row();
$res=$this->db->query($qry);
?>
<div id="PRI" >
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center" valign="middle"><span style="font-size:20px;"><strong>SENTHUR TRANSPORTS</strong></span></td>
    <td align="center"><strong><span style="font-size:18px;border-bottom:1px solid #000">RECEIPT VOUCHER</span></strong></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><span style="font-size:20px;"><strong>10/117,RASIPALAYAM(PO)</strong></span></td>
    <td align="left" valign="middle">NO : <?php echo $row->Cno; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><span style="font-size:20px;"><strong>SULUR,COIMBATORE,TAMILNADU</strong></span></td>
    <td>DATE : <?php echo $row->Pdat; ?></td>
  </tr>
  <tr>
    <td width="77%" align="center" valign="middle">&nbsp;</td>
    <td width="23%">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>Received From : </td>
  </tr>
</table>
<table width="100%"   cellspacing="1" cellpadding="1" border="1">
  <tr>
    <td align="center" valign="middle"><strong>S.No</strong></td>
    <td align="center" valign="middle"><strong>PARTICULARS</strong></td>
    <td align="center" valign="middle"><strong>AMOUNT</strong></td>
  </tr>
  <?php 
  $count=1;
  foreach ($res->result_array() as $col)
  {
  echo '<tr>
    <td align="center" valign="middle">'.$count.'</td>
    <td align="center" valign="middle">BILL NO : '.$col['Po'].'</td>
    <td align="center" valign="middle">'.$col['am'].'</td>
  </tr>';
  }
  ?>
  <tr>
    <td width="8%" align="center" valign="middle">&nbsp;</td>
    <td width="76%" align="center" valign="middle">&nbsp;</td>
    <td width="16%" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td style="border-bottom:1px solid #000" >&nbsp;&nbsp;Amount(in Words) : <?php
	
	 $NUM=$this->db->query("SELECT dbo.NumToWords(".$row->TAMT.",'Y')[NUM]")->row();
	
	 echo $NUM->NUM; ?> Only </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="94%" align="right" valign="middle"><strong>Received By</strong></td>
    <td width="6%" align="right" valign="middle">&nbsp;</td>
  </tr>
</table>
</div>