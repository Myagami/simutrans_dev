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

		//フォームデータ取得
		$Prj_Prop = $this->Load_Method("URL_Query","get_param",array("Prj")) ;
		$this->Load_Method("Smarty_Wrapper","assign_array",array("Prj",$Prj_Prop)) ;

		//DBモデルへ処理引渡し
		$PRJ_Model = $this->Load_Model("Project_DB") ;
		$PRJ_Model->add_Project($Prj_Prop) ;
		$this->display("Pr_New_Add") ;

	}

	public function Pr_List(){//プロジェクトリスト
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - Project List")) ;
		$PRJ_Model = $this->Load_Model("Project_DB") ;
		$PRJ_List = $PRJ_Model->list_Project(array("0","30")) ;
		$this->Load_Method("Smarty_Wrapper","assign",array("Prj_Lists",$PRJ_List)) ;
		//print_r($PRJ_List) ;
		$this->display("Pr_List") ;

	}

	public function Pr_Import(){//インポートでのプロジェクト構成
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
		$this->display("Pr_Import") ;
	}

	public function Pr_Portal(){
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
		$this->display("Pr_Portal") ;
	}

	public function Display($dis_page){//画面出力
		$this->Load_Method("Smarty_Wrapper","display","Project/".$dis_page.".tpl") ;
	}

	
}

?>