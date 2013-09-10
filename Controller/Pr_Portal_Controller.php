<?php
class Pr_Portal extends Base_Controller{
	/* 新規プロジェクト */
	public function Pr_New(){//新規プロジェクト
		//$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
		$this->View->display("Pr_Portal_Index") ;
	}
	
}

?>