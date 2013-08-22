<?php
class URL_Query{
	
	public function __construct(){
		if($_GET == null){
			
		}
	}

	public function get_Query($que){
		return $this->Query_Data[$que] ;
	}

}

?>