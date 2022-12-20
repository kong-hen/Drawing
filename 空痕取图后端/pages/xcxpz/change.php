<?php

$change = $_GET["pzname"];
$appid = $_POST["appid"];
$appsecret = $_POST["appsecret"];
$adjili = $_POST["adjili"];
$advideo = $_POST["advideo"];
$adcp = $_POST["adcp"];
$adbanner = $_POST["adbanner"];
$adtp = $_POST["adtp"];
$adys = $_POST["adys"];

include("../../includes/function.php");
include("../function.php");

pzxg();
mysqli_close($connect);
echo "<script>alert('修改成功');window.history.go(-1);</script>"

?>