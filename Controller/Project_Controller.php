<?php
class Project_Controller extends Base_Controller{
	/* 新規プロジェクト */
	public function Pr_New(){//新規プロジェクト
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
		$this->display("Pr_New") ;
	}

	public function Pr_New_Add(){//新規プロジェクト
		$this->import_module("URL_Query") ;
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
		$Prj_Prop = $this->Load_Method("URL_Query","get_param",array("Prj")) ;
		$this->Load_Method("Smarty_Wrapper","assign_array",array("Prj",$Prj_Prop)) ;

		//ファイル読出
		$PRJ_Model = $this->Load_Model("Project_DB") ;
		$PRJ_Model->add_Project($Prj_Prop) ;
		/*$this->import_module_Zwei("File_Wrapper") ;
		$DBC = $this->Load_Method("File_Wrapper","Load_File","Config/Database_Setting.ini") ;
		//DB用データ構築
		$PRJ_Data["P_ID"] = date("_ymd_his_").$Prj_Prop["type"] ;
		$PRJ_Data["P_Name"] = $Prj_Prop["name"] ;
		$PRJ_Data["Comments"] = $Prj_Prop["disp"] ;

		//DB接続
		$this->Load_Method_Zwei("Database_Connect","DB_Setting",$DBC["mysql"]) ;
		$this->Load_Method("Database_Connect","set_table","Project_List") ;
		$this->Load_Method_Zwei("Database_Connect","insert",$PRJ_Data) ;*/
		$this->display("Pr_New_Add") ;

	}

	public function Pr_List(){//プロジェクトリスト
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
		$this->display("Pr_List") ;

	}

	public function Pr_Import(){//インポートでのプロジェクト構成
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
		$this->display("Pr_Import") ;

	}

	public function Display($dis_page){//画面出力
		$this->Load_Method("Smarty_Wrapper","display","Project/".$dis_page.".tpl") ;
	}

	
}

?>