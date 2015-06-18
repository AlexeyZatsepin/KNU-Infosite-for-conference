<?php
$_SESSION['NowLang']=$_POST['select_language'];
#echo $_SESSION['NowLang'];
header("Location: ".$_SERVER['HTTP_REFERER']);
