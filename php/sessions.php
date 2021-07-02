<?php
    // What is Session?-->Use to manage information across different pages:
        // syntax of session:Verify the user login info(suppose)
        session_start();
        $_SESSION['username']="Raza Jutt";
        $_SESSION['favcat']="Programmings";
        echo "We have saved your session";

?>