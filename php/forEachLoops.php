<?php
       $arr=array("Apple","Banana","Orange","Grapes","Pineapple");

     /*for ($i=0; $i < count($arr); $i++) { 
            echo $arr[$i];
            echo "<br>";
       }*/
    //ForEach Loops better way than traditional for loop:
    foreach ($arr as $value) {
            echo $value."<br>";
    }

?>