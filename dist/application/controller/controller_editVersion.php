<?php

require_once '../models/Model_Layout.php';

$id = $_POST["id"];
if(isset($id)){
    $layout = new Layout();
    $major = $_POST["major"];
    $minor = $_POST["minor"];
    $micro = $_POST["micro"];
    $releaseNote = $_POST["releaseNote"];
    $platform = $_POST['platform'];
    $file = $_FILES['file'];
    $uploadfile = '/uploads/';
    $layout->EditVersion($id, $major, $minor, $micro, $releaseNote, $file);
    echo "Данные успешно отредактированы!";
}
else{
    echo "Данных нет!";
}
