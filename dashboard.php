<?php 
    session_start();
    if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] == true){
        echo "Access Denied. Please login first";
        exit;
    }

    echo "Welcome ".$_SESSION["username"]."<br>";
    echo "Your role is ".$_SESSION["role"]."<br>";

?>
<a href='logout.php'> Logout </a>
<a href='update.php'> Update </a>
<> 