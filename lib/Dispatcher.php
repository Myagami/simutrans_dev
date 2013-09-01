<?php
class Dispatcher{
	public function dispatch($Controll,$Method){//振分
		$Controll_Name = $Controll."_Controller" ;
		$Controll_Path = "Controller/".$Controll_Name.".php" ;
		
		try{
			if(file_exists($Controll_Path)){
				require_once("Controller/".$Controll_Name.".php") ;
				$Disp = new $Controll_Name($Controll) ;
				$Disp->$Method() ;
				//$Disp->display($Method) ;
			}else{
				require_once("Controller/Index_Controller.php") ;
				//throw new Exception("Load Error: Module - {$Controll} ") ;
				$Disp = new Index_Controller("Index") ;
				$Disp->Index() ;
				//$Disp->display("Index") ;

			}
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
		
	}
}

?>