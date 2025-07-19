<?php
class Ctrl extends CI_Model
{
	function __construct()
    {
        parent::__construct();
		$this->load->database('default');
    }
	function HH($nam,$class,$fun,$dtest,$dval,$idd)
	{
		$ggg="";
		$getv="<option  value='".$dval."'  >".$dtest."</option>\n";
			for($i=0;$i<24;$i++)
				{
					
					if($i==$idd){$getv="<option  value=\"{$i}\"  >{$i}</option>\n";}
					$ggg=$ggg."<option  value=\"{$i}\"  >{$i}</option>\n";
	
				} 
				$ggg=$getv.$ggg;
			if($fun!=""){$fun="onchange='".$fun."'"; }
			$ggg="<select class=\"{$class}\" name=\"{$nam}\" id=\"{$nam}\"  ".$fun."   >".$ggg."</select>";
			return $ggg;
	}
	function MM($nam,$class,$fun,$dtest,$dval,$idd)
	{
		$ggg="";
		$getv="<option  value='".$dval."'  >".$dtest."</option>\n";
			for($i=0;$i<60;$i++)
				{
					
					if($i==$idd){$getv="<option  value=\"{$i}\"  >{$i}</option>\n";}
					$ggg=$ggg."<option  value=\"{$i}\"  >{$i}</option>\n";
	
				} 
				$ggg=$getv.$ggg;
			if($fun!=""){$fun="onchange='".$fun."'"; }
			return	$ggg="<select class=\"{$class}\" name=\"{$nam}\" id=\"{$nam}\"  ".$fun."   >".$ggg."</select>";
	}
	public	function OptionBox($CTRL,$isn,$val,$msg,$msgval,$class,$fun,$type)
	{
	
		$fname = explode("#",$CTRL);
	 	$qryy="select * from ".$fname[2]." order by ".$fname[1];
		$nam=$fname[3];
		$restrr = $this->db->query($qryy);
		$ggg="";$getv="";$idd="";
		$getv="<option  value='".$msgval."'   >".$msg."</option>\n";
			foreach ($restrr->result_array() as $row)
				{
					 
				 $bname =$row[$fname[1]];	
					$ids =$row[$fname[0]];
					if($idd==""){}
					if($ids==$idd){$getv="<option  value=\"{$ids}\"  >{$bname}</option>\n";}
					$ggg=$ggg."<option  value=\"{$ids}\"  >{$bname}</option>\n";
	
				} 
			$ggg=$getv.$ggg;
			$func="";
			if($fun!=''){$func="onchange='".$fun."'";}
			$ggg="<select ln='30' ty='".$type."' ".$func."  isn=\"{$isn}\" type='select' val=\"{$val}\" class=\"selectpicker show-tick form-control {$class}\" name=\"{$nam}\" id=\"{$nam}\" data-live-search='true' >".$ggg."</select>";;
			echo $ggg;
	}
	public	function OptionBox_O($CTRL,$isn,$val,$msg,$msgval,$class,$fun,$type,$ord)
	{
	
		$fname = explode("#",$CTRL);
	 	$qryy="select * from ".$fname[2]." order by ".$ord;
		$nam=$fname[3];
		$restrr = $this->db->query($qryy);
		$ggg="";$getv="";$idd="";
		$getv="<option  value='".$msgval."'   >".$msg."</option>\n";
			foreach ($restrr->result_array() as $row)
				{
					 
				 $bname =$row[$fname[1]];	
					$ids =$row[$fname[0]];
					if($idd==""){}
					if($ids==$idd){$getv="<option  value=\"{$ids}\"  >{$bname}</option>\n";}
					$ggg=$ggg."<option  value=\"{$ids}\"  >{$bname}</option>\n";
	
				} 
			$ggg=$getv.$ggg;
			$func="";
			if($fun!=''){$func="onchange='".$fun."'";}
			$ggg="<select ln='30' ty='".$type."' ".$func."  isn=\"{$isn}\" type='select' val=\"{$val}\" class=\"selectpicker show-tick form-control {$class}\" name=\"{$nam}\" id=\"{$nam}\" data-live-search='true' >".$ggg."</select>";;
			echo $ggg;
	}
	public	function Autocom($CTRL,$ArryName)
	{
	
		$fname = explode("#",$CTRL);
	 	$qryy="select * from ".$fname[2]." order by ".$fname[1];
		$nam=$fname[3];
		$restrr = $this->db->query($qryy);
		$htmls='<script>var '.$ArryName.' = [';	 
			foreach ($restrr->result_array() as $row)
				{
					$htmls .='"'.$row[$fname[1]].' <'.$row[$fname[0]].'",'; 
				 	 
				} 
		$htmls .=']; </script>';
		return $htmls;
	}
public	function OptionBox2($CTRL,$dval)
	{
	
		$fname = explode("#",$CTRL);
	 	$qryy="select * from ".$fname[2]." order by ".$fname[1];
		$nam=$fname[3];
		$restrr = $this->db->query($qryy);
		$ggg="";$getv="";$idd="";		 
			foreach ($restrr->result_array() as $row)
				{
					 
				 	$bname =$row[$fname[1]];	
					$ids =$row[$fname[0]];
					if($dval==$ids){
					$ggg=$ggg.'<option selected="selected"  value="'.$ids.'"  >'.$bname.'</option>\n';
					}
					else
					{
						$ggg=$ggg.'<option   value="'.$ids.'"  >'.$bname.'</option>\n';
					}
				} 
			$ggg=$getv.$ggg; 
			 
		 
			return  $ggg;
	}
public function DateSplit($dat)
{
	 
	$Odate = explode(' ', $dat);
	$date = explode('-',$Odate[0]);
	$month = $date[2];
	$day   = $date[1];
	$year  = $date[0];
	return $day."-".$month."-".$year;
}
public function AutNum($ID,$PRFX,$FTABLE,$ISN,$where,$class)
	{
		$qry="select Count(*)+1 as cou from ".$FTABLE." where ".$ID." like '%".$PRFX."%'".$where;
		$restrr = $this->db->query($qry);
		 $row = $restrr->row_array(); 
		$str= $row['cou'];
		if(strlen($str)==1)
		{
			$str="000".$str;
		}
		if(strlen($str)==2)
		{
			$str="00".$str;
		}
		if(strlen($str)==3)
		{
			$str="0".$str;
		}
		
		$html='<input class="'.$class.'" name="'.$ID.'" type="text" id="'.$ID.'" value="'.$PRFX.$str.'" isn="'.$ISN.'" readonly="readonly" ln="20" ty="V"  />';
		echo $html;
		return;
	}
 
	
}
?>