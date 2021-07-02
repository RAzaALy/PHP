<?php
#Loops in PHP:
echo "Odd and Even Number from 1 to 20: <br>";
$i=2;
$j=1;
echo "Even......Odd <br>";
while ($i <= 20 && $j<=20) {
    echo $i."........".$j;
    echo "<br>";
    $i+=2;
    $j+=2;
}
?>