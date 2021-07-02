<?php
$showError=false;
     if($_SERVER['REQUEST_METHOD']=='POST'){
         include "_dbconnect.php";
         $userEmail=$_POST['signupEmail'];
         $password=$_POST['password'];
         $cpassword=$_POST['cpassword'];
         //check whether this email exits:
         $existSql="SELECT * FROM `users` WHERE `user_email`= '$userEmail'";
         $result=mysqli_query($conn,$existSql);
         $numRows=mysqli_num_rows($result);
         if($numRows>0) {
             $showError="Email already in use.";
         }else{
             if($password==$cpassword){
                 $hash=password_hash($password,PASSWORD_DEFAULT);
                 $userEmail=$_POST['signupEmail'];
                 $sql="INSERT INTO `users` (`sno`, `user_email`, `password`, `time`) VALUES (NULL, '$userEmail', '$hash', current_timestamp())";
                  $result2=mysqli_query($conn,$sql);
                 if($result2){
                     $showAlert=true;
                     header("Location: /forum/index.php?signupsuccess=true");
                     exit();
                    }
                    
                }else{
                    $showError="Password do not match.";
                }
            }
            header("Location: /forum/index.php?signupsuccess=false");
     }
?>