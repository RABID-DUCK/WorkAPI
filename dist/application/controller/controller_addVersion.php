<?php
require_once '../models/Model_Layout.php';


$major = $_POST["major"];
$minor = $_POST['minor'];
$micro = $_POST['micro'];
$releaseNote = $_POST['releaseNote'];
$platform = $_POST['platform'];
$file = $_FILES['file'];
$uploadfile = '/uploads/';

if(isset($major) && isset($minor) && isset($micro)
 && isset($releaseNote) && isset($platform) && isset($file)){
    $object = new Layout();
    $object->AddVersion($major, $minor, $micro, $releaseNote, $platform, $file);
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    echo "Данные успешно добавлены!";
}
else{
    echo "Не все данные заполнены";
}
