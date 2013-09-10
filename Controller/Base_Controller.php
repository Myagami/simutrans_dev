<?php

abstract class Base_Controller extends Reinforce_Zwei{
	//View Mods
	protected $View ;

	//初回起動
	public function __construct($Controller){
		$this->View = $this->Load_View($Controller) ;
		/*$this->import_module_Zwei("Smarty_Wrapper") ;
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
									) ;*/
	}

}


?>