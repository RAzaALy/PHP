<?php
// Operators in PHP:
// 1.Arithmatic Operators
// 2.Assignment Operators
// 3.Comparison Operators
// 4.Logical Operators
$a=45;
$b=8;
// 1.Arithmatic Operators
// echo "For "."$a+$b"." the result is ". ($a+$b)."<br>";
// echo "For "."$a-$b"." the result is ". ($a-$b)."<br>";
// echo "For "."$a*$b"." the result is ". ($a*$b)."<br>";
// echo "For "."$a/$b"." the result is ". ($a/$b)."<br>";
// echo "For "."$a%$b"." the result is ". ($a%$b)."<br>";
// echo "For "."$a**$b"." the result is ". ($a**$b)."<br>";
// 2.Assignment Operators
// $x=$a;
// echo "The value of X:".$x."<br>";
// $x+=6;
// echo "The value of x+=6: $x"."<br>";
// $x*=6;
// echo "The value of x+=6: $x"."<br>";
// 3.Comparison Operators
$x=7;
$y=7;
// echo "The value of x==y is ";
// echo var_dump($x==$y);
// echo var_dump($x>$y);
// echo var_dump($x<>$y);//This <> operator means not equal to :
// echo "<br>";
// 4.Logical Operators
$m=true;
$n=false;
echo "For m and n:";
echo var_dump($m and $n)."<br>";
echo var_dump($m && $n)."<br>";
$m=true;
$n=false;
echo "For m or n:";
echo var_dump($m or $n)."<br>";
echo var_dump($m || $n)."<br>";
$c=false;
echo "For !c the result is: ";
echo var_dump(!$c);

?>
