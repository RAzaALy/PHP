<?php
#switch Case in PHP:
$marks=60;
switch ($marks) {
    case 100:
        echo "Your Grade  is A+:";
        break;
    case 80;
        echo "Your Grade is A:";
        break;
    case 70;
        echo "Your Grade is B+:";
        break;
    case 60;
        echo "Your Grade is B:";
        break;
    default:
        echo "Invalid Marks!";
        break;
}

?>