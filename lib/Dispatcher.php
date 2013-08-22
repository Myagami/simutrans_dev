<?php
class Dispatcher{
	public function dispatch($Controll,$Method){//振分
		$Controll_Name = $Controll."_Controller" ;
		require_once("Controller/".$Controll_Name.".php") ;
		$Disp = new $Controll_Name($Controll) ;
		$Disp->$Method() ;
	}
}

?>