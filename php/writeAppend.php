<?php
        echo '<br>Fwirte and Append in PhP:';
        //write to a file in Php:
        // $fptr=fopen("demo2.txt","w");
        // fwrite($fptr,"This is the best File in The world i like the most one also.\n");
        // fwrite($fptr,"This is the best content.\n");
        // fwrite($fptr,"3rd latest content.\n");
        // fclose($fptr);

        //Append to a  file in php:
        $fptr=fopen("demo2.txt","a");
        fwrite($fptr,"\nThis sentence is after apend mode:");
        fclose($fptr);


?>