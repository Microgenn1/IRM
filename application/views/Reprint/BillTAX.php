 
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #000;font-size:11px"  >
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3" align="center" valign="middle" style="border-right:1px solid #000"  ><h1 style="font-size:20px;" >SENTHUR TRANSPORTS</h1></td>
            <td colspan="2" align="center"><strong>TAX INVOICE</strong></td>
          </tr>
          <tr>
            <td colspan="3" align="center" valign="middle" style="border-right:1px solid #000" ><H1 style="font-size:20px;"  >10/117,RASIPALAYAM(PO)</H1></td>
            <td width="5%" align="left" valign="middle">&nbsp;&nbsp;NO</td>
            <td width="17%" align="left" valign="middle"> :  <?php echo $row->PONO ?></td>
          </tr>
          <tr>
            <td colspan="3" align="center" valign="middle" style="border-right:1px solid #000" ><h1 style="font-size:20px;"  >SULUR,COIMBATORE,TAMILNADU</h1></td>
            <td align="left" valign="middle">&nbsp;&nbsp;DATE  </td>
            <td align="left" valign="middle">: <?php echo $row->PODATE ?></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #000;border-top:1px solid #000;font-size:11px" >
          <tr>
            <td><span style="border-top:1px solid #000">&nbsp;&nbsp; PAN</span></td>
            <td><span style="border-top:1px solid #000">: ACDFS3543F</span></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Service Tax No</td>
            <td>: ACDFS3543FSD001</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Commissionerate</td>
            <td>: COIMBATORE</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Division</td>
            <td>: COIMBATORE-IV. 1441,ELGI BUILDING TRICHY ROAD COIMBATORE</td>
          </tr>
          <tr>
            <td width="16%">&nbsp;&nbsp;Range</td>
            <td width="84%">: COIMBATORE-IV-D,18 A.K.RAMASAMY NAGAR,SULUR COIMBATORE</td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:11px">
          <tr>
            <td style="border-right:1px solid #000" ><strong>&nbsp;&nbsp;TO</strong></td>
            <td style="border-bottom:1px solid #000" rowspan="5"><table width="98%" border="0" align="right" style="font-size:11px">
             <tr>
                  <td><strong>CONSIGNER :</strong></td>
                </tr>
                <tr>
                  <td>M/s <?php echo $row->Consigner ?></td>
                </tr>
                <tr>
                  <td><?php echo $row->RAD1 ?></td>
                </tr>
                <tr>
                  <td><?php echo $row->RAD2 ?></td>
                </tr>
                <tr>
                  <td><?php echo $row->RCITY ?></td>
                </tr>
              </table></td>
          </tr>
                <tr>
            <td  style="border-right:1px solid #000" ><strong>&nbsp;&nbsp; M/s <?php echo $row->LNAME ?></strong></td>
          </tr>
          <tr>
            <td  style="border-right:1px solid #000" ><strong>&nbsp;&nbsp;<?php echo $row->AD1 ?></strong></td>
          </tr>
          <tr>
            <td  style="border-right:1px solid #000" ><strong>&nbsp;&nbsp;<?php echo $row->AD2 ?></strong></td>
          </tr>
        <tr>
          <td  style="border-right:1px solid #000" >
            <strong>&nbsp;&nbsp;<?php echo $row->LCITY ?></strong>
          </td>
        </tr>
          <tr>
            <td width="53%" rowspan="2"  style="border-right:1px solid #000">&nbsp;</td>
          </tr>
          <tr>
            <td width="47%"><table width="98%" border="0" align="right" style="font-size:11px">
                <tr>
                  <td><strong>CONSIGNEE :</strong></td>
                </tr>
                <tr>
                  <td>M/s <?php echo $row->Consignee ?></td>
                </tr>
                <tr>
                  <td><?php echo $row->MAD1 ?></td>
                </tr>
                <tr>
                  <td><?php echo $row->MAD2 ?></td>
                </tr>
                <tr>
                  <td><?php echo $row->MCITY ?></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" style="border-top:1px solid #000;border-bottom:1px solid #000;font-size:11px" >
          <tr>
            <td align="center" valign="middle" style="border-right:1PX solid #000;border-bottom:1px solid #000;"  >S.NO</td>
            <td align="center" valign="middle" style="border-right:1PX solid #000;border-bottom:1px solid #000;"  >GC DATE</td>
            <td align="center" valign="middle" style="border-right:1PX solid #000;border-bottom:1px solid #000;"  >GC . NO</td>
            <td align="center" valign="middle" style="border-right:1PX solid #000;border-bottom:1px solid #000;"  >DESCRIPTION</td>
            <td align="center" valign="middle" style="border-bottom:1px solid #000;" >AMOUNT</td>
          </tr>
          <?php 
		  $TABLE="";
		  $cou=1;$tamtt=0;
		 foreach($res->result_array() as $rw)
		 {
			    $TABLE = $TABLE . "<tr>";
                $TABLE = $TABLE . "  <td style='border-right:0px solid #000' align='left'>&nbsp;" .$cou. "</td>";
                $TABLE = $TABLE . " <td align='center' valign='left'> " .$rw["BookingDate"]. "</td>";
                $TABLE = $TABLE . " <td align='center' valign='left'> " .$rw["GCNO"]. "</td>";
                $TABLE = $TABLE . " <td  align='left'>&nbsp;<P>CONSIGNMENT : " .$rw["Item"]. "</P><P>VEHICLE NO : " .$rw["VehicleNo"]. "</P><P>REF NO : " .$rw["Refno"] . "</P>                <P>" . $rw["NAR"]. "</P></td>";
                $TABLE = $TABLE . " <td  align='RIGHT'>" .$rw["Amount"]. "&nbsp;&nbsp;</td>";
                $TABLE = $TABLE . "</tr>";
			    $cou++;
				$tamtt = $tamtt+$rw["Amount"];
		 }
		  echo $TABLE;
		 $NUM=$this->db->query("SELECT dbo.NumToWords(".$row->NETAMT.",'Y')[NUM]")->row();
		 ?>
          <tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr><tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr><tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr><tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr><tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr><tr>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
            <td align='center' valign='middle'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="middle">&nbsp;</td>
            <td align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="middle">&nbsp;</td>
            <td align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="6%" align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td width="12%" align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td width="15%" align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td width="57%" align="right" valign="middle" style="border-top:1px solid #000;" ><strong>Total Amount</strong></td>
            <td width="10%" align="right" valign="middle" style="border-top:1px solid #000;" ><strong><?php echo $tamtt.".00";?>&nbsp;&nbsp;</strong></td>
          </tr>
          <tr>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><strong><?php echo $row->TAX;?></strong></td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><?php  echo $row->STAX;?>&nbsp;&nbsp;</td>
          </tr>
           <tr>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><strong>EDUCATION CESS @ 2%</strong></td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><?php echo $row->CESS;?>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><strong>SECONDARY &amp; HIGGER EDU CESS @ 1 %</strong></td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><?php echo $row->SHCESS;?>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><strong>Round Off</strong></td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><?php echo $row->ROU;?>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="center" valign="middle" style="border-top:1px solid #000;" >&nbsp;</td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><strong>Grand Total</strong></td>
            <td align="right" valign="middle" style="border-top:1px solid #000;" ><strong><?php echo $row->NETAMT; ?>&nbsp;&nbsp;</strong></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #000" >&nbsp;&nbsp;Amount(in Words) : <?php echo $NUM->NUM; ?>  only </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #000"  ><span style="border-top:1px solid #000;">&nbsp;&nbsp;Wehereby declare that the amount indicated in invoice representing the actually charged by us and that all particulars are true and correct</span></td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #000"  ><strong>&nbsp;&nbsp;TERMS</strong>
        <p>&nbsp;&nbsp;1.Any complaints in respect to this bill must be made within seven days from the date of bill thereof </p>
        <p>&nbsp;&nbsp;2.Subjected to Coimbatore jurisdiction </p></td>
    </tr>
    <tr>
      <td align="right" valign="bottom"><span style="border-top:1px solid #000;">FOR SENTHUR TRANSPORTS&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
      <td align="right" valign="bottom">&nbsp;
        <p>&nbsp;</p>
      <p>AUTHORISED SIGNATORY&nbsp;&nbsp;</p></td>
    </tr>
  </table>
 
