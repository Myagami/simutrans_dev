<?php

class URL_Query{
	private $url_query ;
	/* public methods */
	public function __construct(){
		$this->set_Query_Value() ;
		$this->set_Post_Value() ;


	}

	public function get_param($key){
		return $this->url_query[$key] ;
	}

	public function get_param_All(){
		return $this->url_query ;
	}

	/* private methods */
	private function set_Query_Value(){
		if($_GET != null){
			foreach($_GET as $key => $val){
				$this->url_query[$key] = $val ;
			}
		}
	}

	private function set_Post_Value(){
		if($_POST != null){
			foreach($_POST as $key => $val){
				$this->url_query[$key] = $val ;
			}
		}
	}
}

?>