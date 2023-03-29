<?php
require_once '../models/Model_Layout.php';

$id = $_GET['name'];
$object = new Layout();
$object->DownloadLastVersion($id);
