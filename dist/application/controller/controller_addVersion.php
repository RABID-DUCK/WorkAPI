<?php
require_once '../models/Model_Layout.php';


$major = $_POST['major'];
$minor = $_POST['minor'];
$micro = $_POST['micro'];
$releaseNote = $_POST['releaseNote'];
$platform = $_POST['platform'];
$file = $_FILES['file'];

if(empty($major) && empty($minor) && empty($micro)
 && empty($releaseNote) && isset($file)){
    echo "Не все данные заполнены";
}
else{
    $object = new Layout();
    $object->AddVersion($major, $minor, $micro, $releaseNote, $platform);
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    echo "Данные успешно добавлены!";
}
