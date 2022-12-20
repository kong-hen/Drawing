<?php

session_start();
$name = $_SESSION["username"];
if ($name){}else {
    header("Location:/login.php");
    exit;
}

?>