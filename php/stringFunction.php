<?php
//String function in php:

    $name ="Ali Raza Jutt is a bad boy";
    echo $name;
    echo "<br>";
    echo "The length of my string is ".strlen($name);
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($name,"Jutt");
    echo "<br>";
    echo str_replace("Ali Raza","Haider Ali",$name);    
    echo "<br>";
    echo str_repeat($name,3);
    echo "<br>";
    echo "<pre>";
    echo rtrim("   this is a good boy   ");
    echo "<br>";
    echo ltrim("   this is a good boy   ");
    echo "</pre>";
?>