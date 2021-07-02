<?php
$servername="localhost";
 $username="root";
 $password="";
 //create a connction:
 $conn=mysqli_connect($servername,$username,$password);
 //Die if connections was not successful:
 if(!$conn)
 {
    die("sorry we failed to connect".mysqli_connect_error());
 }
 else{
     echo 'connections was successful <br>';
 }
 //Create Database:
 $sql="CREATE DATABASE dbjutt";
 $result=mysqli_query($conn,$sql);
 echo "The result is ";
 echo var_dump($result);
 //check for database creation:
    if($result)
    {
        echo "<br>The database was created successfully:";
    }
    else{
        echo "<br>The database was not created successfully:Due to Error-->".mysqli_error($conn);
    }
?>