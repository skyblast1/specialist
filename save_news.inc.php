<?php
//function __autoload($name){
//    require ($name.'class.php');
//}
$errMsg = "";

$save = new NewsDB();
$title = $_POST['title'];
$category = $_POST['category'];
$description = $_POST['description'];
$source = $_POST['source'];

if (!$save->saveNews($title, $category, $description, $source)){
    $errMsg = "Ошибка в сохранении в БД!";
    echo $errMsg;
} else {
    header('Location: http://test/spec/news.php');
    exit;
}
