<!--<script language="JavaScript">
    window.history.back(-1);
    alert("Страница временно не доступна");
</script>-->

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
for ($j=0 ;$j<=count($dirs);$j++){
?>
<div class="text">
    <div class="person">
        <h1><? echo $dirs[$j];?></h1>
        <img src="<?echo $path."/".$dirs[$j]."/foto.jpg"; ?>" class="portrait">
        <div class="description">
            <? $filename=$path."/".$dirs[$j]."/info.txt";
            $handle = fopen($filename, "rb");
            $contents = fread($handle, filesize($filename));
            fclose($handle);
            echo $contents;
            ?>
        </div>
    </div>
</div>
<?
}
?>
<br>
<br>
<br>
<br>