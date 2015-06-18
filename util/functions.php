<?php
function read_file($filename){
    $handle = fopen ($filename, "r");
    while (!feof ($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose ($handle);
}
?>