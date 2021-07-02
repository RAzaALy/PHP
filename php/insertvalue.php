<?php
$servername="localhost";
 $username="root";
 $password="";
 $database="dbjutt";
 //create a connction:
 $conn=mysqli_connect($servername,$username,$password,$database);
 //Die if connections was not successful:
 if(!$conn)
 {
    die("sorry we failed to connect".mysqli_connect_error());
 }
 else{
     echo 'connections was successful <br>';
 }
 //Variables to insert record in a table:
 $sno="4";
 $name="Raza";
 $city="Chowk Azam";
 //Insert a record in a Table in a Database:
 $sql="INSERT INTO `Hen` VALUES('$sno','$name','$city')";
 $result=mysqli_query($conn,$sql);
 //check for record in a table creation:
    if($result)
    {
        echo "<br>The Record in a table was inserted successfully:";
    }
    else{
        echo "<br>The record in a table was not inserted successfully:Due to Error-->".mysqli_error($conn);
    }
