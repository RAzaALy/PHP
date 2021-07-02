<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="formdb";
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
     $sql="DELETE FROM `contact` WHERE `E-mail`='raza@gmail.com' LIMIT 1";
     $result =mysqli_query($conn,$sql);
     if($result){
         echo 'Record is Deleted Successfully<br>';
     }
     else{
         $err=mysqli_error($conn);
         echo "Record is not been deleted successfully Due to this Error<br> $err";
     }
     $aff=mysqli_affected_rows($conn);
     echo "numbers of affected Rows:$aff<br>";
