<?php

abstract class Base_Controller extends Reinforce_Zwei{
	//abstract public function Index();//起点コントローラー
	abstract public function Display($dis_page);//出力コントローラー

	public function __construct($Controller){
		$this->import_module_Zwei("Smarty_Wrapper") ;
		$param = array(
			"template" => "./htdocs/",
			"template_c" => "./Cache/",
			"cache" => "./Cache/",
			"config" => "./Config/"
			) ;
		$this->Load_Method("Smarty_Wrapper","path_set",$param) ;
		$this->Load_Method_Zwei("Smarty_Wrapper","loadpath_set",array(
									"css" => "./htdocs/css",
									"js" => "./htdocs/js",
									"htdocs_lib" => "./htdocs/lib",
									"base_url" => "http://".$_SERVER["HTTP_HOST"]."/~hayate/simutrans_dev/" 
									)
			) ;
	}

}


?>