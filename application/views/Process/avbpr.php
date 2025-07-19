<?php
header('Content-Type: text/html; charset=utf-8');
		$Fdate=$this->scssql->Dat($_REQUEST['FDATE']);
		$Tdate=$this->scssql->Dat($_REQUEST['TDATE']);
		
		$Rtype=$_REQUEST['RTYPE'];
		$qry="SELECT datediff(month,'".$Fdate."','".$Tdate."') MO,month('".$Fdate."') mn,year('".$Fdate."') Yr";
		$MO=$this->db->query($qry)->row();
		
		$Cou=0;
		$html="<form id='Avbb'> <table id='grid' ><tr bgcolor='#ededed'>";
		for($m=0;$m<($MO->MO+1);$m++)
		{
			$mname=$this->db->query("select left(DATENAME(m,dateadd(month,".$m.",'".$Fdate."')),3) MN,year(dateadd(month,".$m.",'".$Fdate."')) YR")->row();
			$html .="<td><strong>".$mname->MN."-".$mname->YR."</strong></td>";
		}
		$html .="</tr><tr>";
		
		for($m=0;$m<($MO->MO+1);$m++)
		{		    
			if($m==0)
			{
				if($MO->MO !=0)
				{
					$sq=" select month('".$Fdate."') Mo,year('".$Fdate."') Yr,Day(DateAdd(day, -Day(DateAdd(month, 1,'".$Fdate."')),DateAdd(month, 1, '".$Fdate."'))) Day";
				    $sq=$this->db->query($sq)->row();
					$htm ="EXEC Calenderprice '".$Rtype."','".$Fdate."','".$sq->Yr."/".$sq->Mo."/".$sq->Day."',".$Cou.",".$_SESSION['Hotel_Id'];
					$htm=$this->db->query($htm)->row();
					$Cou=$htm->Cou;
					$htm = preg_replace("[^A-Za-z0-9\-]", "",$htm->Ht. $htm->Html.$htm->Html2);
				    $html .="<td>".$htm."</td>";
				}
				else
				{
					$htm ="EXEC Calenderprice '".$Rtype."','".$Fdate."','".$Tdate."',".$Cou.",".$_SESSION['Hotel_Id'];
					$htm=$this->db->query($htm)->row();					
					$Cou=$htm->Cou;
					$htm = preg_replace("[^A-Za-z0-9\-]", "",$htm->Ht. $htm->Html.$htm->Html2);
			        $html .="<td>".$htm."</td>";
				}
			}
			else
			{
				$sq=" select month('".$Tdate."') Mo,year('".$Tdate."') Yr";
				$sq=$this->db->query($sq)->row();
				$htm ="EXEC Calenderprice '".$Rtype."','".$sq->Yr."/".$sq->Mo."/01','".$Tdate."',".$Cou.",".$_SESSION['Hotel_Id'];
				$htm=$this->db->query($htm)->row();
				$Cou=$htm->Cou;
				$htm = preg_replace("[^A-Za-z0-9\-]", "",$htm->Ht. $htm->Html.$htm->Html2);
				$html .="<td>".$htm."</td>";
			}
		}
		$html .="</tr>";
		$html .="</table><input name='RCOU' value='".$Cou."' type='hidden' ></form>";
		echo $html;

	function Cale($fdat,$tdat)
	{
	    $htm ="EXEC Calenderprice '".$Rtype."','".$fdat."','".$tdat."',".$_SESSION['Hotel_Id'];
		$htm=$this->db->query($htm)->row()->Html;
	 	$htm = preg_replace("[^A-Za-z0-9\-]", "", $htm);	
		return $htm;
	}
		?>