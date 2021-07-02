<?php
//connecting to the database:
    include 'db_connect.php';
    $msg=$_POST['userMsg'];
    $room=$_POST['room'];
    $ip=$_POST['ip'];
    $sql="INSERT INTO `message` (`Message`, `Room`, `IP`) VALUES ('$msg', '$room', '$ip')";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
