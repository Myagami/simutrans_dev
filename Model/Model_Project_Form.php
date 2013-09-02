<?php
require_once("./Model/Model_Form_Base.php") ;
class Model_Project_Form extends Model_Form_Base{
	public function Portal_Page_ID(){//プロジェクト管理ページ識別ID取得
		return $this->get_Param("ID") ;
	}
}
?>