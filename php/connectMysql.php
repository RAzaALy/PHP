<?php
 //Ways To connect  Mysql Database:
 //1. Mysql extensions:
 //2.PDO
 //connecting to the database:     
 $servername="localhost";
 $username="root";
 $password="";
 $database="myblog";
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
 
 ?>
