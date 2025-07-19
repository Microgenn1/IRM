<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SqlDb extends CI_Controller {
	public function index()
	{
		if (strtolower(str_replace(' ','',$_REQUEST['Sbutton']))== "save")
		{
			$this->scssql->Data_Insert();	
		}
		if (strtolower(str_replace(' ','',$_REQUEST['Sbutton']))== "update")
		{
			$this->scssql->Data_Update();
		}
		if (strtolower(str_replace(' ','',$_REQUEST['Sbutton']))== "delete")
		{
						
		}
		if (strtolower(str_replace(' ','',$_REQUEST['Sbutton']))== "savetax")
		{
			$this->scssql->Data_InsertTax();	
		}
	}
	public function HtmlTable()
	{
		$this->htable->Html_Grid();
	}
	public function DEdit()
	{
		$this->scssql->dataedit();
	}
}
?>
