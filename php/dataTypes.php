<?php
//var_dump tell us datatype of variable:
/*
 Data types in php:
 1. Integer
 2. Float
 3. String
 4. Blooean
 5. Object
 6. Array
 7. Null
 */
//String -sequence of character:
$name="Ali Raza Jutt";
$friend='jutt007';
echo "$name ka friend $friend";
echo "<br>";
//Integer - non-decimal number:
$number =345;
$neg=-322;
echo $number;echo "<br>",$neg;
//Float - Decimal number:
$decimal=34.6;
echo "<br>";
$flt=-0.534;
echo var_dump($decimal);
echo "<br>",$flt;
echo "<br>";
//Boolean either true or false:
$cond=true;
$cond2=false;
echo var_dump($cond);
echo "<br>";
echo var_dump($cond2);
//Object -instances of classes:
//Array use to store multiple values in single variable:
$arr=["Raza","jutt","haider","Harry"];
echo "<br>";
echo var_dump($arr);
echo "<br>";
echo $arr[3];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
//Null:
$name=NULL;
echo var_dump($name);

?>