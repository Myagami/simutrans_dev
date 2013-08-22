<?php
class Suidou_Controller extends Base_Controller{
	public function Index(){
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","水曜どうでしょう")) ;
		$this->Display("index") ;
	}

	public function HTB(){
		$this->Display("Hiragishi") ;
		
	}

	protected function Display($dis_page){
		$this->Load_Method("Smarty_Wrapper","display",$dis_page.".tpl") ;
		
	}

}

?>