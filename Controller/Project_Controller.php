<?php
class Project_Controller extends Base_Controller{
	/* 新規プロジェクト */
	public function Pr_New(){//新規プロジェクト
		//$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
		$this->View->display("Pr_New") ;
	}

	public function Pr_New_Add(){//新規プロジェクト
		$this->import_module("URL_Query") ;
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;

		//フォームデータ取得
		$Prj_Prop = $this->Load_Method("URL_Query","get_param",array("Prj")) ;
		$this->Load_Method("Smarty_Wrapper","assign_array",array("Prj",$Prj_Prop)) ;

		//DBモデルへ処理引渡し
		$PRJ_DB_Model = $this->Load_Model("Project_DB") ;
		$PRJ_DB_Model->add_Project($Prj_Prop) ;

		$this->View->display("Pr_New_Add") ;

	}

/* プロジェクトのインポート*/
	public function Pr_Import(){//インポートでのプロジェクト構成
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
		$this->View->display("Pr_Import") ;
	}

	public function Pr_New_Import(){//インポートでのプロジェクト構成
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools")) ;
		$this->View->display("Pr_Import") ;
	}

	/* ポータル */

	public function Pr_List(){//プロジェクトリスト
		$PRJ_DB_Model = $this->Load_Model("Project_DB") ;
		$PRJ_List = $PRJ_DB_Model->List_Project(array("0","30")) ;
		$this->View->assigns("Prj_Lists",$PRJ_List) ;
		//print_r($PRJ_List) ;
		$this->View->display("Pr_List") ;

	}

	public function Pr_Portal(){
		$PRJ_Form_Model = $this->Load_Model("Project_Form") ;		
		$PRJ_DB_Model = $this->Load_Model("Project_DB") ;
		$P_ID = $PRJ_Form_Model->Portal_Page_ID() ;
		$P_Props = $PRJ_DB_Model->Prop_Project($P_ID) ;
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - ".$P_Props["p_name"])) ;
		//print_r($P_Props) ;
		$this->View->assigns("P_Prop",$P_Props) ;
		$this->View->assigns("P_ID",$P_ID) ;
		$this->View->display("Pr_Portal") ;
	}



	public function Display($dis_page){//画面出力
		$this->Load_Method("Smarty_Wrapper","display","Project/".$dis_page.".tpl") ;
	}

	
}

?>