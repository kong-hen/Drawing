<!--作者：空痕-->
<!--合作：KongHen02（微信）-->
<!--版权所有：空痕网络服务工作室-->
<!--使用请保留版权信息-->
<?php
include("./function.php");
session_start();
$_SESSION = array();
session_destroy();
header("Location:../login.php");

?>
