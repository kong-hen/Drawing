<!--作者：空痕-->
<!--合作：KongHen02（微信）-->
<!--版权所有：空痕网络服务工作室-->
<!--使用请保留版权信息-->

<?php

session_start();
$name = $_SESSION['username'];
$pword = $_SESSION["password"];

$rpath = $_SERVER['DOCUMENT_ROOT'];

include("$rpath/includes/database.php");

// 用户登录
function addb(){
    
    $conn = $GLOBALS['connect'];
    
    $sql = "SELECT * FROM admin";
    $res = mysqli_query($conn,$sql);
    $GLOBALS['adrow'] = mysqli_fetch_array($res);
}

// 小程序配置查询
function pzdb(){
    
    $conn = $GLOBALS['connect'];
    $pzname = $GLOBALS['pzname'];
    $sql = "SELECT * FROM xcxpz WHERE pzname = '$pzname'";
    $res = mysqli_query($conn,$sql);
    $GLOBALS['pzrow'] = mysqli_fetch_array($res);
}

// 小程序配置修改
function pzxg(){
    $conn = $GLOBALS['connect'];
    $change = $GLOBALS['change'];
    $appid = $GLOBALS["appid"];
    $appsecret = $GLOBALS["appsecret"];
    $adjili = $GLOBALS["adjili"];
    $advideo = $GLOBALS["advideo"];
    $adcp = $GLOBALS["adcp"];
    $adbanner = $GLOBALS["adbanner"];
    $adtp = $GLOBALS["adtp"];
    $adys = $GLOBALS["adys"];
    
    $sql = "UPDATE xcxpz SET appid='$appid',appsecret='$appsecret',adjili='$adjili',advideo='$advideo',adcp='$adcp',adbanner='$adbanner',adtp='$adtp',adys='$adys' WHERE pzname='$change'";
    
    mysqli_query($conn,$sql);
}

// 资源查询
function zycx(){
    
    $conn = $GLOBALS['connect'];
    $zyfl = $GLOBALS['zyfl'];
    $sql = "SELECT * FROM allzy WHERE zyfl = '$zyfl'";
    $GLOBALS['zyres'] = mysqli_query($conn,$sql);
}

// 资源查询(口令)
function cxkl(){
    
    $conn = $GLOBALS['connect'];
    $zykl = $GLOBALS['zykl'];
    $sql = "SELECT * FROM allzy WHERE zykl = '$zykl'";
    $GLOBALS['zyres'] = mysqli_query($conn,$sql);
}

// 资源删除
function zydel(){
    
    $conn = $GLOBALS['connect'];
    $zyid = $GLOBALS['zyid'];
    $sql = "DELETE FROM allzy WHERE id='$zyid'";
    mysqli_query($conn,$sql);
}

//资源添加
function zytj(){
    
    $conn = $GLOBALS['connect'];
    $zyfl = $GLOBALS['zyfl'];
    $zykl = $GLOBALS['zykl'];
    $zyurl = $GLOBALS['zyurl'];
    
    $sql = "INSERT INTO allzy (zyfl,zykl,zyurl,zyzt) VALUES ('$zyfl','$zykl','$zyurl','1')";
    mysqli_query($conn,$sql);
}
?>
