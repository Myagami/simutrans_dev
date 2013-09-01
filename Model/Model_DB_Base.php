<?php
/*

DB接続モデル基礎フレーム

*/
class Model_DB_Base extends Reinforce_Zwei{
	/* public methods */
	protected $Use_Table ;
	public function __construct(){//接続を確立させる
		/* DB接続モジュール呼出 */
		$this->import_module_Zwei("Database_Connect") ;

		/* 設定ファイルを参照する */
		$DBC = $this->Load_DB_Config() ;

		/* 接続開始 */
		$this->Load_Method_Zwei("Database_Connect","DB_Setting",$DBC) ;

	}

	protected function Use_Table($table){//使用テーブルを設定する
		$this->Load_Method("Database_Connect","set_table",$table) ;
		//$this->Use_Table = $table ;
	}

	/*protected methods */
	protected function Load_DB_Config(){
		$this->import_module_Zwei("File_Wrapper") ;
		$DBC = $this->Load_Method("File_Wrapper","Load_File","Config/Database_Setting.ini") ;
		return $DBC["mysql"] ;
	}

	
}
?>