<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/8/15
 * Time: 12:23 AM

if (empty($_SESSION['NowLang'])){
session_start();
}*/
$LangArray = array("ua", "en","fr");
$_SESSION['NowLang']=(empty($_SESSION['NowLang'])) ? 'ua' : $_SESSION['NowLang'];
include 'util/functions.php';
include 'util/layouts_list.php';
$view=(empty($_GET['view'])) ? 'index' : $_GET['view'];
switch($view)
{
    case ('index'):
        $file="static/text/about_conf.txt";
        $title="Конфереція Київ-Тулуза";
        break;
    case ('university'):
        $title="Університети і лабораторії";
        break;
    case ('members'):
        $title="Учасники";
        $path="static/text/members";
        break;
    case ('about_coop'):
        $title="Кооперація";
        break;
}
if(in_array($view,$list)){
    include 'views/layouts/main_layout.php';
}
else{
    include 'views/layouts/404_layout.php';
}
