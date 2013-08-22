<?php
header( 'Pragma: no-cache' );
try{
//require Core Reinforce Zwei
	require_once("Reinforce.php") ;
	require_once("Reinforce_Zwei.php") ;
	require_once("Controller/Base_Controller.php") ;

	

	$Reinforce_Zwei = new Reinforce_Zwei ;
	/*Controll with Method*/
	if($_GET == null){
		$Dis_Controll = "Index" ;
		$Dis_Method = "Index" ;
	}elseif( $_GET["Method"] == null){
		$Dis_Controll = $_GET["Controll"] ;
		$Dis_Method = "Index" ;
	}else{
		$Dis_Controll = $_GET["Controll"] ;
		$Dis_Method = $_GET["Method"] ;
	}
	
	$Reinforce_Zwei->import_module("Dispatcher") ;
	$Reinforce_Zwei->load_method("Dispatcher","dispatch",array($Dis_Controll,$Dis_Method)) ;


}catch(Exception $e){
	
}

?>
