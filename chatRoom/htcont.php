<?php
    $room=$_POST['room'];
    include 'db_connect.php';
    $sql="SELECT Message,Time,IP FROM message WHERE Room='$room'";
    $result=mysqli_query($conn,$sql);
    $htm="";
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $htm=$htm.'<div class="container">';
            $htm=$htm.'<img src="us.png" alt="Avatar" style="width:100%;">';
            $htm=$htm.'<p>'.$row["Message"].'</p>';
            $htm=$htm.'<span class="time-right">'.$row["Time"].'</span>';
            $htm=$htm.'</div>';
        }
    }
   echo $htm; 
?>