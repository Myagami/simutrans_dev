<?php
class Project_Controller extends Base_Controller{
	/* 新規プロジェクト */
	public function Pr_New(){//新規プロジェクト
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
	}

	public function Pr_New_Add(){//新規プロジェクト
		$this->import_module("URL_Query") ;
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
		$Prj_Prop = $this->Load_Method("URL_Query","get_param",array("Prj")) ;
		$this->Load_Method("Smarty_Wrapper","assign_array",array("Prj",$Prj_Prop)) ;
		//ファイル読出
		$this->import_module_Zwei("File_Wrapper") ;
		$DBC = $this->Load_Method("File_Wrapper","Load_File","Config/Database_Setting.ini") ;
		//DB接続
		echo "<pre>" ;
		print_r($DBC) ;
		echo "</pre>" ;

		//$this->import_module("Database_Connect") ;
	}

	public function Pr_List(){//プロジェクトリスト
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
	}

	public function Pr_Import(){//インポートでのプロジェクト構成
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
	}

	public function Display($dis_page){//画面出力
		$this->Load_Method("Smarty_Wrapper","display","Project/".$dis_page.".tpl") ;
	}

	
}

?>