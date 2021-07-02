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
    $sql = "SELECT * FROM `contact` WHERE Name='Raza'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
echo $num." Records found in The DataBase:";
echo '<br>';
$no=1;
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $no."   ".$row['NAME']."     ".$row['E-mail']."     ".$row['Password'];
            echo '<br>';
            $no++;
        }

    }
    //Update a record throught where clause:
    $sql="UPDATE `contact` SET `NAME`='3Brothers' WHERE `ID`=5";
    $result=mysqli_query($conn,$sql);
    // echo $result;
    $aff=mysqli_affected_rows($conn);
    echo 'Numbers of affected Rows:'.$aff.'<br>';
    if($result){
        echo "Record is updated successfully";
    }
    else{
        echo "Record not  updated successfully";
    }

?>     