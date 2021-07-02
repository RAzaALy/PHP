<?php
    $fptr=fopen("demo.txt","r");
    if(!$fptr){
        echo "Unable to open a file";
    }
    $content=fread($fptr,filesize("demo.txt"));
    echo $content;
    fclose($fptr);
    
    //does not excuate bexause file is closed:
    // $str=fread($fptr,5);
    // echo $str;

    $fptr=fopen("index.html","r");
    if(!$fptr){
        echo "Unable to open a file";
    }
    $content=fread($fptr,filesize("index.html"));
    echo $content;
    fclose($fptr);
    
?>
