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
 //Create a Table in a Database:
 $sql="CREATE Table `Hen`(`sno`int(6)NOT NULL,`Name` varchar(30)NOT NULL,`City` varchar(30)NOT NULL,PRIMARY KEY(`sno`))";
 $result=mysqli_query($conn,$sql);
 //check for table creation:
    if($result)
    {
        echo "<br>The table was created successfully:";
    }
    else{
        echo "<br>The table was not created successfully:Due to Error-->".mysqli_error($conn);
    }
?>