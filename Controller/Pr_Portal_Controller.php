<?php
class Pr_Portal_Controller extends Base_Controller{
	/* 新規プロジェクト */
	public function Index(){//新規プロジェクト
		
		$this->View->display("Pr_Portal_Index") ;
	}
	
	public function Import(){
		$this->View->display("Pr_Portal_Import") ;
	}
	
}

?>