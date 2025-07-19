<?php
$qry=" SELECT *,convert(varchar,m.ADDDATE,106)[dat] FROM Mas_Agent m
INNER JOIN Mas_Region r ON r.Region_Id=m.Region_Id WHERE m.Agent_Id=".$_REQUEST['idd'];
$Res=$this->db->query($qry)->row();
?>
<table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">
  
  <tr>
    <td align="center"><h2>SHRI SAKTHI INSURANCE (P) LTD</h2></td>
  </tr>
  <tr>
    <td align="center">1-C Jammanai 2nd Street,Near LIC Office,Tiruppur - 641604</td>
  </tr>
  <tr>
    <td align="center">Phone : 0421 4254355</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="10%"><strong> Code :</strong></td>
    <td width="70%"><?php echo $Res->IdNo?> </td>
    <td width="7%" align="right"><strong>Date : </strong></td>
    <td width="13%"><?php echo $Res->dat?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><?php echo $Res->Title.$Res->Name ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><?php echo $Res->Address?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><?php echo $Res->City?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><?php echo $Res->State.$Res->Pincode ?> Phone : <?php echo $Res->Mobile ?></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="5">
  <tr>
    <td align="left" valign="bottom">Dear Sir/Madam,</td>
  </tr>
  <tr>
    <td align="center" valign="bottom"><strong>Ref : Appointment as <?php echo $Res->Region ?> </strong></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td><p>Welcome to <strong>SHRI SAKTHI INSURANCE (P) LTD </strong>, the fascinating world of financial services.<strong>SHRI SAKTHI INSURANCE (P) LTD</strong> is a unit of the prestigious Sakthi Group,which has an annual turnover of Rs.32000 Crores.</p>
    <p>As an agent and part of M/s <strong>SHRI SAKTHI INSURANCE (P) LTD</strong>,you would enjoy the liberty to market a spectrum of financial products,the following are some to quote instantly:</p>
    <p><ul><li>Investments</li>
      <li>Motor Insurance</li>
      <li>Life Insurance</li>
      <li>Fire Insurance</li>
      <li>House Holders Insurance</li>
      <li>Shopkeepers Insurance</li>
      <li>Health Insurance</li>
      </ul>
    <p>And many more products that would be added on in future.</p>
    <p>Our team of Executives are always with you to update and make you more comfortable with the products where you feel it is required.</p>
    <p>As always we believe,the agent`s role in the business will duly be recognized and we always consider the agents as our frontline team!</p>
    <p>We once again welcome you into the team &amp; we assure you that you have a prosperous future with us.</p>
    <p>Wishing you all the very best!</p>
    <p>&nbsp;</p>
    <p><strong>SUGUMAR .S</strong></p>
    <p>Vice President</p>    </p></td>
  </tr>
</table>
