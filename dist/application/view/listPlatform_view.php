<?php

require_once dirname(__DIR__, 1).'/controller/controller_listPlatforms.php';
$arr = new Controller_ListPlatforms();

if(isset($arr->list_platforms) && !empty($arr->list_platforms)){
    foreach ($arr->list_platforms as $value) {
        echo $html = "<option value='".$value."'>". $value .'</option>';
    }
}