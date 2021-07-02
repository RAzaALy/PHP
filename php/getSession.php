<?php
   //start the session and get Data:
        session_start();
        if(isset($_SESSION['username'])){
            echo "Welcome ".$_SESSION['username'];
            echo "<br>Your favourite category ".$_SESSION['favcat'];
            echo "<br>";
        }
        else{
            echo '<br>Please Login to continue...';
        }
            
?>