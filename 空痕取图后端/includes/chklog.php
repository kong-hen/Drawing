<?php
session_start();
$rpath = $_SERVER['DOCUMENT_ROOT'];

$username = $_POST["uname"];
$password = $_POST["pword"];

include("$rpath/includes/function.php");
addb();
$adname = $adrow["adname"];
$adpass = $adrow["adpass"];

// $result = $adname . $adpass;

if($username == $adname && $password == $adpass){
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $user = $_SESSION["username"];
    $result =  "{\"flag\":\"1\"}";
}elseif($username == $adname && $password != $adpass){
    $result =  "{\"flag\":\"0\",\"error\":\"密码错误！！\"}";
}else{
    $result =  "{\"flag\":\"0\",\"error\":\"账号密码错误,请重试~~\"}";
}

exit ($result);

?>