<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
<link href='static/css/main.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title><?php echo $title;?></title>
</head>
<body>
<div class="menu">
    <!-- Menu icon -->
    <div class="icon-close">
        <img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">
    </div>
    <!-- Menu -->
    <ul>
        <li><a href="index.php?view=index">Про конферецію</a></li>
        <li><a href="index.php?view=about_coop">Про співпрацю</a></li>
        <li><a href="index.php?view=university">Університети та лабораторії</a></li>
        <li><a href="index.php?view=members">Учасники</a></li>
    </ul>
</div>

<!-- Menu body -->
<div class="jumbotron">
    <div >
    <div class="icon-menu">
        <i class="fa fa-bars"></i>
        Menu
    </div>

<!-- switch-->
    <form style="position: absolute; right: 1%; top: 7%;" method="post"  onsubmit="<? echo $_SESSION['NowLang'] = $_POST['select_language']?>"   action="<? echo  "index.php?view=".$_GET['view']?>">
        <select name="select_language" onchange="this.form.submit()" >
            <?  for($i=0; $i<count($LangArray); $i++){
                if ($_SESSION['NowLang']==$LangArray[$i]) {
                    echo "<option value=\"$LangArray[$i]\" selected > $LangArray[$i]</option>";
                }else
                echo "<option value=\"$LangArray[$i]\" > $LangArray[$i]</option>"; }?>
        </select>
        <input type="submit" hidden="hidden">
    </form></div>

    <a href="index.php"> <img src="static/img/4.png" class="auto"></a>




</div>
<div class="main">
<div class="container">
<?php include 'views/pages/'.$view.'.php';?>
</div>






<div class="upbutton">Up</div>
<footer>
    <footer>
         <p id="footer">by Alex Zatsepin&copy;</p>
    </footer>
</footer>
</div>
<script src="static/js/jquery-1.11.2.min.js"></script>
<script src="static/js/menu.js"></script>
</body>
</html>