<?php

    //require in php:if there is an syntax error in file than error through
    // include 'connectMysql.php';

    //require in php:if there is an syntax error in file than error through
    require 'connectMysql.php';
    $sql = "SELECT * FROM `emp`";
   $result = mysqli_query($conn, $sql);
   // echo var_dump($result);
   //Find the numbers of record return:
  $num = mysqli_num_rows($result);
  echo $num." Records found in The DataBase:";
  echo '<br>';
  while ($row=mysqli_fetch_assoc($result)) {
    echo $row['EMPNO']." ";
    echo $row['ENAME'];
    echo '<br>';
}
?>
