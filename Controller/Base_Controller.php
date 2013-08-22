<?php

abstract class Base_Controller extends Reinforce_Zwei{
	abstract public function Index();//起点コントローラー
	abstract protected function Display($dis_page);//出力コントローラー

	public function __construct($Controller){
		$this->import_module_Zwei("Smarty_Wrapper") ;
		$param = array(
			"template" => "./htdocs/{$Controller}/",
			"template_c" => "./Cache/",
			"cache" => "./Cache/",
			"config" => "./Config/"
			) ;
		$this->Load_Method("Smarty_Wrapper","path_set",$param) ;
		$this->Load_Method_Zwei("Smarty_Wrapper","loadpath_set",array(
									"css" => "./htdocs/css",
									"js" => "./htdocs/js",
									"htdocs_lib" => "./htdocs/lib"
									)
			) ;
	}

}


?>