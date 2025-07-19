<?php
class scssql extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	public function Data_InsertTax()
	{
		echo 'Successfully Saved !!!';
	}
    
	public function Data_Insert()
	{
		$qry = "";
		try {
                $hotelcode=$_SESSION['Hcode'];
			    $Table=$_REQUEST['TableName'];
				$STOREID=$_SESSION['STOREID'];
				 $Fild=$_REQUEST['Colm'];
				$Typ=explode(',',$_REQUEST['typ']);
				$Len=explode(',',$_REQUEST['len']);
				$arry=explode(',',$Fild);
				$cou=0;
				$colm="";
				foreach( $arry as $str)
				{
				    $colm = $colm . "@" .$str . ",";
				    $val=$_REQUEST[trim($str)];
					if(strtoupper($Typ[$cou])=="DA")
					{
					    $val =  $this->Dat($val);
					}
					$qry = $qry . $this->Data_type($str, $Typ[$cou], $Len[$cou]);
					$qry = $qry . " set @".$str . "='".$val."' ";
					$cou++;
				}
				 $qry = $qry . " insert into " . $Table . " (" . $Fild . ",ADDDATE,STOREID,hotelcode)values(" . $colm . "getdate()," . $STOREID . ",'".$hotelcode."')";
				try
				{
					$qry = $qry.str_replace("`","'",@$_REQUEST["DetQry"]);			 
				}
				catch (Exception $ee)  { }	  
			} catch (Exception $e)    {  }
			$qry =str_replace("~","'",$qry);
			// echo $qry; exit;
			if($this->db->query($qry))
			{
			echo 'Successfully Saved !!!';
			}
	} 
    public function Data_Update()
    {
          $Table=$_REQUEST['TableName'];           
          $whfld = $_REQUEST["idv"];
          $Fild=$_REQUEST['Colm'];
          $Typ=explode(',',$_REQUEST['typ']);
          $Len=explode(',',$_REQUEST['len']);
          $fldval =$_REQUEST[$whfld];
          $arry=explode(',',$Fild);
          $colm = "";
          $qry = "";
          $uqry = "";
          $cou = 0;
          foreach( $arry as $str)
                {
                     $val = $_REQUEST[$str];
					 
                    if(strtoupper($Typ[$cou])=="DA")
                           {
                               $val = $this->Dat($val);
                           }
                    $qry = $qry . $this-> Data_type($str, $Typ[$cou], $Len[$cou]);
                    $qry = $qry . " set @" . $str . "='" . $val . "' ";
                    $uqry = $uqry . $str . "=" . "@" . $str.", ";
                    $cou++;
                }
                    $qry =$qry. " Update  " . $_REQUEST["TableName"] . "  set " .$uqry;
                    $qry = $qry . "EDDATE=getdate() where " . $whfld . "=" . $fldval;
                  try
                   {
                        $qry = $qry.str_replace("`","'",@$_REQUEST["DetQry"]);
                   }
                   catch (Exception $e) { }
				   
				   if($_REQUEST["TableName"]=="Trans_Booking"){
					   $qry=$qry." UPDATE Trans_Sales SET LID=".$_REQUEST['Ledger_Id']." WHERE PPID IN (SELECT BILL_ID FROM Trans_Booking WHERE Booking_Id=".$fldval.")";
					   }
				   
				 $qry =str_replace("~","'",$qry);  
				 
				 //echo $qry; exit;
       if($this->db->query($qry))
			 {
				 echo 'Successfully Updated !!!';
			 }     
    }  
    public function Delete()
    {
      echo  $Table =$_REQUEST['TableName'];
        $Fild = $_REQUEST["Colm"];
        $whfld = $_REQUEST["idv"];
        $fldval = $_REQUEST[$whfld];
        $qry = "";
        $qry = $qry . " delete from  ".$_REQUEST['TableName'];
        $qry = $qry . " where " . $whfld . "=" . $fldval;
        if($this->db->query($qry))
			 {
				 echo 'Successfully Deleted !!!';
			 }
    }  
    public function Dat($arr)
    {
		$Odate = explode(' ', $arr);
		$aryy =str_replace('-','/',$Odate[0]) ;
	$date = explode('/',$aryy);
	$month = $date[1];
	$day   = $date[2];
	$year  = $date[0];
	return $day."/".$month."/".$year;
        
    }
    public function Data_type($val,$type,$len)
    {
        $Dtype = "";
        $type =strtoupper($type);
        switch ($type)
        {
            case"B":
                $Dtype = " DECLARE @".$val." BIGINT ";
                break;
            case "DE":
                $Dtype = " DECLARE @" . $val . " DECIMAL(".str_replace('`',',',$len).")";
                break;
            case "DA":
                $Dtype = " DECLARE @" . $val . " DATETIME ";
                break;
            case "V":
                $Dtype = " DECLARE @" . $val . " varchar(" . $len . ") ";
                break;
            case "NV":
                $Dtype = " DECLARE @" . $val . " nvarchar(". $len . ") ";
                break;
            case "Bi":
                $Dtype = " DECLARE @" . $val . " bit ";
                break;
        }

        return $Dtype;
    }
    public function dataedit()
    {
        $idd = $_REQUEST["idd"];
        $qry = "select * from " . $_REQUEST["TableName"]. " where " . $_REQUEST["fn"] . "='" . $idd . "'";          
        $res=$this->db->query($qry)->row();
		$query = $this->db->query( $qry ); 
        $html = "";
		foreach ($query->list_fields() as $field)
			{
				$vall =chr(61).$res->$field.chr(35);
				 if(strpos(strtoupper($field),"DATE"))
                 {
					 $vall= chr(61).$this->Dat($res->$field).chr(35);
			     }
				 if($field=="DOB")
                 {
					 $vall= chr(61).$this->Dat($res->$field).chr(35);
			     }
				  
			    $html .=  $field . $vall;
				 
			} 
             

        echo $html;
    }
  }
?>
