<?php
require_once dirname(__DIR__, 1). '/models/Model_Layout.php';

class Controller_ListPlatforms{
    public $list_platforms = array();

    function __construct()
    {
        $this->GetPlatforms();
    }

    function GetPlatforms(){
        $model = new Layout();
        $data = $model->GetListPlatforms();
        $this->list_platforms = $data;
    }
}