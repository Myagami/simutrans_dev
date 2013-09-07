<?php
class Reinforce_Zwei extends Reinforce{
	protected $module_path ="./lib" ;
	public function import_module($mod){//モジュール呼出
		try{
			if(!preg_match("/^[A-Z]{1,}[a-zA-Z0-9_]{1,}$/",$mod)){//命名規則の確認
				throw new Exception("<h2>Module:<u><i>{$mod}</i></u> Not Naming Found</h2>") ;
			}
			
			$path = $this->module_path."/".$mod.".php" ;
			
			if(!file_exists($path)){//モジュールの有無
				throw new Exception("<h2>Module:<u><i>{$mod}</i></u> Not Found</h2>") ;
			}
			require_once($path) ;
			$this->import_mod[$mod] = new $mod ;
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
	}
	
	public function import_module_Zwei($mod,$param=array()){//Reinforce向けモジュール読込
		try{
			if(preg_match("/(^[A-Za-z0-9_]{1,}$)/",$mod,$mods)){
				$path = "Reinforce_Core/".$mod."/".$mod.".php" ;
				if(!file_exists($path)){
					throw new Exception("<b>Path Error - {$path} </b><br>") ;

				}
				require_once($path) ;
				$this->import_mod[$mod] = new $mod ;
				//print_r($mods) ;
				//throw new Exception("Test") ;
			}else{
				$this->module_path = "./Reinforce_Core" ;
				$this->import_module_Eins($mod) ;
				$this->module_path = "./lib" ;
				//throw new Exception("<b>Error - {$mod}</b><br>") ;
			}
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
	}

	public function Load_Method_Zwei($mod,$method=null,$param=array()){//モジュールのメソッド実行
		try{
			return $this->import_mod[$mod]->$method($param) ;
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
	}

/* include Model and View*/
	public function Load_Model($model){
		try{
			$model_path = "./Model/Model_{$model}.php" ;

			if(!file_exists($model_path)){//モデルの有無確認
				throw new Exception("<b>Model \"{$model}\" Not found</b><br>") ;
			}
			//モデルデータ呼び出し
			require_once($model_path) ;
			//モデル名構成
			$model = "Model_".$model ;
			//インスタンス返却
			return new $model() ;
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
	}
	
	public function Load_View($View){
		try{
			$View_Path = "./View/View_{$View}.php" ;
			if(!file_exists($View_Path)){//モデルの有無確認
				throw new Exception("<b>View \"{$View}\" Not found</b><br>") ;
			}
			//モデルデータ呼び出し
			require_once($View_Path) ;
			//モデル名構成
			$View = "View_".$View ;
			//インスタンス返却
			return new $View() ;
		}catch(Exception $e){
			echo $e->getMessage() ;
		}
	}
}

?>
