<?php
class Getvals extends CI_Model
{
	function __construct()
    {
        parent::__construct();
		$this->load->database('default');
    }
	public function CommUpdate()
	{
		$qry="exec CommissionPost ".$_REQUEST['MO'].",".$_REQUEST['YR'].",'".$_REQUEST['idd']."'";
		$res=$this->db->query($qry);
		echo '<div class="box box-primary">
              <div class="box-body">
              <p>
              Successfully Commission Posted !!!! ;
              </p>
              </div></div>';
	}
	public function Comm()
	{
		$html="<div class='box-body table-responsive'><table width='100%' id='example' class='table table-striped table-bordered' >";
		$qry="exec Commission ".$_REQUEST['MO'].",".$_REQUEST['YR'].",'".$_REQUEST['idd']."'";
		$res=$this->db->query($qry);
		$bool=true;
		$html .= "<thead><tr>";		
		$html .=  '<th >Receipt No</th>';
		$html .=  '<th >Recdate</th>';
		$html .=  '<th >InsuredName</th>';		 
		$html .=  '<th >PolicyNo</th>';
		$html .=  '<th >Reg No</th>';
		$html .=  '<th >Make</th>';
		$html .=  '<th >Model</th>';
		$html .=  '<th >PremiumAmt</th>';
		$html .=  '<th >ODAmt</th>';
		$html .=  '<th >Grs Comm</th>';	
		$html .=  '<th >TDS</th>';	
		$html .=  '<th >Commission</th>';		 
        $html .= "</tr></thead><tbody>";
		$rw=0;
		$p=0;
		$o=0;
		$g=0;
		$t=0;
		$c=0;
		foreach($res->result_array() as $row)
		{
			$amt=$row['ODAmt']*10;
			$amt=$amt/100;	
			$tds=($amt*10)/100;	
			$comm=$amt-$tds;
			
			
			
			$bool=false; 
			$html .=  "<tr><td >".$row['ReceiptNo']."</td>";
			$html .=  "<td >".$row['RecDate']."</td>";
			$html .=  "<td >".$row['InsuredName']."</td>";
			$html .=  "<td >".$row['PolicyNo']."</td>";
			$html .=  "<td >".$row['VehicleNo']."</td>";
			$html .=  "<td >".$row['Make']."</td>";
			$html .=  "<td >".$row['Model']."</td>";
			$html .=  "<td align='right' >".$row['PremiumAmt']."</td>";
			$html .=  "<td align='right' >".$row['ODAmt']."</td>";
			$html .=  "<td align='right' >".number_format($amt,2,'.','')."</td>";
			$html .=  "<td align='right' >".$tds."</td>";
			$html .=  "<td align='right' >".number_format($comm,2,'.','')."</td>";
			$html .= " </tr>";	
			
			$p=$p+$row['PremiumAmt'];
		    $o= $o+$row['ODAmt'];
		    $g= $g+number_format($amt,2,'.','');
		    $t=$t+$tds;
		    $c=$c+number_format($comm,2,'.','');
			
			$rw++;
		}
		$html .=  "<tr style='font-weight:bold' ><td >&nbsp;</td>";
			$html .=  "<td >&nbsp;</td>";
			$html .=  "<td >&nbsp;</td>";
			$html .=  "<td >&nbsp;</td>";
			$html .=  "<td >&nbsp;</td>";
			$html .=  "<td >&nbsp;</td>";
			$html .=  "<td >TOTAL</td>";
			$html .=  "<td align='right' >".$p."</td>";
			$html .=  "<td align='right' >".$o."</td>";
			$html .=  "<td align='right' >".$g."</td>";
			$html .=  "<td align='right' >".$t."</td>";
			$html .=  "<td align='right' >".$c."</td>";
			$html .= " </tr>";	
		$html .= "</tbody></table><input type='hidden' value='" .$rw."' name='rcount' ></div>";
		if($bool==false){
		echo $html;
		}
		else
		{
			echo '<div class="box box-primary">
              <div class="box-body">
              <p> No Records Found !!!! </p>
              </div></div>';
		}
	}
	
	public function Reprint()
	{
		$html="<div class='box-body table-responsive'><table width='100%' id='example' class='table table-striped table-bordered' >";
		$qry="exec Pro_Sales '".$this->DateSplit($_REQUEST['FDATE'])."','".$this->DateSplit($_REQUEST['TDATE'])."',".$_REQUEST['Ledger_Id'];
		$res=$this->db->query($qry);
		$html .= "<thead><tr>";
		
		$html .=  '<th >LCODE</th>';
		$html .=  '<th >LNAME</th>';
		$html .=  '<th >PONO</th>';		
		$html .=  '<th >PODATE</th>';
		$html .=  '<th >RNO</th>';
		$html .=  '<th >AMT</th>';
		$html .=  '<th >AMOUNT</th>';		 
		$html .= "<th width='100' >Auction</th>";
        $html .= "</tr></thead><tbody>";
		$rw=0;
		foreach($res->result_array() as $row)
		{
			 $html .=  "<tr><td >".$row['LCODE']."</td>";
			 $html .=  "<td >".$row['LNAME']."</td>";
			 $html .=  "<td >".$row['PONO']."</td>";
			 $html .=  "<td >".$row['PODATE']."</td>";
			 $html .=  "<td >".$row['RNO']."</td>";
			 $html .=  "<td >".$row['AMT']."</td>";
			 $html .=  "<td >".$row['AMOUNT']."</td>";
 			$html .= "<td align='center' ><img src='".scs_url."icon/print.png' width='16' onclick='Bill_Reprint(".$row['PPID'].")' height='16' border='0' /></td></tr>";
		}
		$html .= "</tbody></table></div>";
		echo $html;
	}
	public function ColReprint()
	{
		$html="<div class='box-body table-responsive'><table width='100%' id='example' class='table table-striped table-bordered' >";
		 $qry="exec Pro_Col '".$this->DateSplit($_REQUEST['FDATE'])."','".$this->DateSplit($_REQUEST['TDATE'])."',".$_REQUEST['Ledger_Id'];
		$res=$this->db->query($qry);
		$html .= "<thead><tr>";
		
		$html .=  '<th >LCODE</th>';
		$html .=  '<th >LNAME</th>';
		$html .=  '<th >PONO</th>';		
		$html .=  '<th >PODATE</th>';
		$html .=  '<th >RNO</th>';
		 
		$html .=  '<th >AMOUNT</th>';		 
		$html .= "<th width='100' >Auction</th>";
        $html .= "</tr></thead><tbody>";
		$rw=0;
		foreach($res->result_array() as $row)
		{
			 $html .=  "<tr><td >".$row['LCODE']."</td>";
			 $html .=  "<td >".$row['LNAME']."</td>";
			 $html .=  "<td >".$row['PONO']."</td>";
			 $html .=  "<td >".$row['PODATE']."</td>";
			 $html .=  "<td >".$row['RNO']."</td>";
			 
			 $html .=  "<td >".$row['AMOUNT']."</td>";
 			$html .= "<td align='center' ><img src='".scs_url."icon/print.png' width='16' onclick='Bill_Reprint(".$row['PPID'].")' height='16' border='0' /></td></tr>";
		}
		$html .= "</tbody></table></div>";
		echo $html;
	}
public function DateSplit($dat)
{
	 
	$Odate = explode(' ', $dat);
	$date = explode('-',$Odate[0]);
	$month = $date[1];
	$day   = $date[2];
	$year  = $date[0];
	return $day."-".$month."-".$year;
}

}
?>