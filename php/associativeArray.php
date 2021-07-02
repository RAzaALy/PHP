<?php

//Associative Array in Php:
$favCol = array(
        'Ali Raza' => 'Black', 'Raza Jutt' => "Blue",
        "Haider Ali" => 'Brown', 4 => "Green"
);
//  echo $favCol['Ali Raza'];
//  echo "<br>";
//  echo $favCol['Raza Jutt'];
//  echo "<br>";
//  echo $favCol['Haider Ali'];
//  echo "<br>";
//  echo $favCol[4];
foreach ($favCol as $key => $value) {
        echo "The Favourite Color of $key is $value:<br>";
}
?>