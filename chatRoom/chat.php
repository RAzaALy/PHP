<?php
//gettting the values of post parameters:
if($_SERVER['REQUEST_METHOD']=='POST'){
  $room=$_POST['room'];
  if(strlen($room)>20 or strlen($room)<3){
    $message="Please choose a name between 3 or 20 characters long";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatRoom";';
    echo '</script>';
  }
  else if(!ctype_alnum($room)){
    $message="Please choose an alphanumeric room name is between 2 or 20 character long.";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatRoom";';
    echo '</script>';
  }
  else{
    //connect to the database:
    include 'db_connect.php';
  }
  //check if room is already exits:
    $sql="SELECT * FROM `room` WHERE `roomName`='$room'";
    $result=mysqli_query($conn,$sql);
    if($result){
      if(mysqli_num_rows($result)>0){
        $message="Please choose another name this room name is  available.";
        echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
        echo 'window.location="http://localhost/chatRoom";';
        echo '</script>';
      }
      else{
        $sql="INSERT INTO `room` (`roomName`) VALUES ('$room')";
        if(mysqli_query($conn,$sql))
        {
          $message="Your Chat room is ready and you can chat Now!";
        echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
        echo 'window.location="http://localhost/chatRoom/room.php?roomname='.$room.'"';
        echo '</script>';
        }
      }
      
    }
    else{
      echo "Error:".mysqli_error($conn);
    }

}
?>

