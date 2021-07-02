<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formdb";
//create a connction:
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connections was not successful:
if (!$conn) {
    die("sorry we failed to connect" . mysqli_connect_error());
} else {
    echo 'connections was successful <br>';
}
$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
//  echo var_dump($result);
//Find the numbers of record return:
$num = mysqli_num_rows($result);
echo $num." Records found in The DataBase:";
echo '<br>';
//Display the rows returned by mysqli query:
if ($num > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo '<br>';
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo '<br>';
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo '<br>';
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo '<br>';
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo '<br>';
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo '<br>';
      
      while ($row=mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row['ID']."   ".$row['NAME']."     ".$row['E-mail']."     ".$row['Password'];
            echo '<br>';
      }
}
