<!--<script language="JavaScript">
    window.history.back(-1);
    alert("Страница временно не доступна");
</script>--><br>
<center><h1>Участники</h1></center>
<div class="articles container">
<?php
$i=0;
$j=0;
$dirs=array();
if ($handle =opendir($path)) {
while(false !==($dir=readdir($handle))){
    $i+=1;
    if ($i>2){
        array_push($dirs, $dir);
    }
}
}
$rl=true;
for ($j=0 ;$j<=count($dirs)-1;$j++){
?>
    <div class="article
    <?if ($rl==false){echo "slide-in-right";}else{echo "slide-in-left";}; ?>">
        <div class="item row">
            <div class="col-xs-3">
                <p class="source"><? echo $dirs[$j];?></p>
            </div>
            <div class="col-xs-6">
                <p class="title"></p>
            </div>
            <div class="col-xs-3">
                <p class="pubdate">можно роль или чет такое написать?(close)</p>
            </div>
        </div>
        <div class="description row">
            <div class="col-xs-3">&nbsp;</div>
            <div class="col-xs-6">
                <h1><? echo $dirs[$j];?></h1>
                <img src="<?echo $path."/".$dirs[$j]."/foto.jpg"; ?>" class="portrait">
                <p>
                    <? $filename=$path."/".$dirs[$j]."/info.txt";
                    $handle = fopen($filename, "rb");
                    $contents = fread($handle, filesize($filename));
                    fclose($handle);
                    echo $contents;
                    ?>
                </p>
            </div>
            <div class="col-xs-3">Hey</div>
        </div>
    </div>
<?
if ($rl==true){
    $rl=false;
}
else{
    $rl=true;
}
}
?>


</div>
<br>
<br>
<br>
<br>