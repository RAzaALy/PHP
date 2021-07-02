<?php
//Functions in pHp:
   echo "Functions In PHP:<br>";
   function totalMarks($marksArr){
       $sum=0;
       foreach ($marksArr as  $value) {
            $sum+=$value;
       }
       return $sum;
   }
   
   function avgMarks($marksArr){
       $sum=0;
       foreach ($marksArr as  $value) {
            $sum+=$value;
       }
       return $sum/count($marksArr);
   }

$stud1=[74,89,52,89,68,98];
$total1=totalMarks($stud1);
$avg1=avgMarks($stud1);

$stud2=[84,82,32,89,38,98];
$total2=totalMarks($stud2);
$avg2=avgMarks($stud2);

echo "Total Marks 1st Student:$total1<br>";
echo "Average:$avg1<br>";
echo "Total Marks 2nd Student:$total2<br>";
echo "Average:$avg2<br>";

?>