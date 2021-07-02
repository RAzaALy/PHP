<?php
    //start,unset and destroy the session:
    session_start();
    session_unset();
    session_destroy();
    echo '<br>You have been Logout.';
?>