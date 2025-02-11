<?php 
    session_start();

    $name = $_POST['name'];
    $role = $_POST['role'];

    $_SESSION["username"] = $name;
    $_SESSION["role"] = $role;

    $_SESSION["logged_in"] = true;

    echo "Session variables are set. Welcome !!<br>"; 

?>

<a href='dashboard.php'> Go to Dashboard </a>