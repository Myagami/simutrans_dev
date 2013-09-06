<?php
require_once("./Model/Model_DB_Base.php") ;
class Model_Project_DB extends Model_DB_Base{

	public function add_Project($PRJ_Prop){//プロジェクトデータ追加
		$this->Use_Table("Project_List") ;
		
		//データ構成
		$PRJ_Data["P_ID"] = date("ymd_His_").$PRJ_Prop["type"] ;
		$PRJ_Data["P_Type"] = $PRJ_Prop["type"] ;
		$PRJ_Data["P_Name"] = $PRJ_Prop["name"] ;
		$PRJ_Data["Comments"] = $PRJ_Prop["disp"] ;

		//データ投入
		//$this->Load_Method("Database_Connect","set_table","Project_List") ;
		$this->Load_Method_Zwei("Database_Connect","insert",$PRJ_Data) ;
		//print_r($PRJ_Data) ;
	}
	/*
	  プロジェクトデータ取得

	  $area = array("start","end") 
	 */
	public function List_Project($area){//プロジェクト一覧を返却
		$this->Use_Table("Project_List") ;
		return $this->Load_Method("Database_Connect","select_All") ;
	}

	public function Prop_Project($P_ID){//プロジェクト情報の取得
		$this->Use_Table("Project_List") ;
		$query = array("match" => array("P_ID"=>$P_ID)) ;
		return $this->Load_Method_Zwei("Database_Connect","select_where",$query) ;
	}
}
?>