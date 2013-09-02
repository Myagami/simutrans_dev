<?php
/*

フォームデータ取得モデル基礎フレーム

*/
class Model_Form_Base extends Reinforce_Zwei{
	/* public methods */
	public function __construct(){//モジュール呼び出し
		$this->import_module("URL_Query") ;	
	}
	
	/* Protected Methods */
	
	protected function get_Param($param){//パラメタ情報取得
		return $this->Load_Method("URL_Query","get_param",array($param)) ;
	}
}
?>