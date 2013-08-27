<?php
//require_once("Controller/Base_Controller.php") ;
class Project_Controller extends Base_Controller{
//class Index_Controller extends Reinforce_Zwei{

	public function Pr_New(){//新規プロジェクト
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
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