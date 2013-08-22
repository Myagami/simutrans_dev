<?php
class ReinForce{
	/*
	  proteted vars
	  $import_mod → imported mod class instans
	  $module_path → modules install dir
	 */
	protected $import_mod ;
	protected $module_path = "./Reinforce_Core" ;
	/* private functions */
	protected function escape_response($res){
		
	}

	protected function path_data_parse($path,$exp_str){//path構成データをパースして配列化
		return explode($exp_str,$path) ;
	}

	protected function path_making($ar_path){//pathデータ配列をpath情報を構成
		$class = $ar_path[sizeof($ar_path)-1] ;
		$path = $this->module_path ;
		foreach($ar_path as $f_path){
			$path .= "/".$f_path ;
		}
		$path .= "/".$class.".php" ;
		return array("path"=>$path,"class"=>$class) ;
	}

	/* public functions */
	/*public function __construct(){
	  $init = parse_ini_file("./Reinforce_config.ini") ;

	  
	  }*/
	
	public function import_module($mod,$param=null){//単独リンカーコア蒐集
		try{
			$path = $this->module_path."/".$mod."/".$mod.".php" ;
			if(!file_exists($path)){
				throw new Exception("Load Error: Module - {$mod} ") ;
			}
			require_once($path) ;
			if($param=null){
				
			}else{
				$this->import_mod[$mod] = new $mod() ;
			}
		}catch(Exception $e){
			echo $e->getMessage() ;
		}

	}

	public function import_module_Eins($mod){//複数形リンカーコア蒐集
		try{
			if(preg_match(
					"/^([a-zA-Z0-9_\-]{1,})$/",
					$mod,
					$p_mod)){//親子
				$p_mod = $this->path_data_parse($p_mod[1],"-") ;
				$path_cl = $this->path_making($p_mod) ;

				$path = $path_cl["path"] ;
				$class = $path_cl["class"] ;
				

			}elseif(preg_match(
					"/^([a-zA-Z0-9_]{1,}|[a-zA-Z0-9_\-]{1,})::([a-zA-Z0-9_]{1,})$/",
					$mod,
					$p_mod)){//親子・兄弟複合型
				$path = $this->module_path."/".$p_mod[1]."/".$p_mod[2]."/".$p_mod[2].".php" ;
				throw new Exception("Brother Module Test ") ;

			}else{
				throw new Exception("Load Error: Module - {$mod} ") ;
			}
			
			//ファイルの存在確認
			if(!file_exists($path)){
				throw new Exception("File Path Error: Module - {$path} ") ;
			}
			require_once($path) ;
			$this->import_mod[$p_mod[0]][$p_mod[1]] = new $class() ;
		}catch(Exception $e){
			echo $e->getMessage() ;
		}

	}

	public function cutLine(){//区切り
		echo "<hr>" ;
	}

	public function Load_Method($mod,$method,$param=array()){//蒐集行使 Zwei
		try{
			//タイプ選択
			if(preg_match("/^[a-zA-Z0-9_]{1,}$/",$mod)){//単独型
				if(is_array($param)){//パラメタが配列か否か
					return call_user_func_array(
						array($this->import_mod[$mod],$method),
						$param) ;
				}else{
					return $this->import_mod[$mod]->$method($param) ;
				}
			}else{//親子型
				$mods = explode("-",$mod,2) ;
				if(is_array($param)){//パラメタが配列か否か
					return call_user_func_array(
						array($this->import_mod[$mods[0]][$mods[1]],$method),$param) ;
				}else{

					return $this->import_mod[$mods[0]][$mods[1]]->$method($param) ;
				}
			}
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
	}
}

?>