<?php
//fgets() function in php:Reading a file line by line:

$fptr = fopen("demo.txt", "r");
//  echo fgets($fptr);
//  echo fgets($fptr);
//  //if file ends than fgets() function returns false:
//     while($a=fgets($fptr)){
//         echo $a;
//     }
//      echo "<br>File End<br>";
//fgetc() function i php:Reading a file character by character

// echo fgetc($fptr);
// while($a=fgetc($fptr)){
//     echo $a;
// }

// write a program which read a file until fullstop has encountered(.);
while ($a = fgetc($fptr)) {
    echo $a;
    if ($a == '.') {
        break;
    }
}
fclose($fptr);
?>
