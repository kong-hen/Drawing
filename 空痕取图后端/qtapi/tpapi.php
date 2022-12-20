<?php

include("../includes/function.php");

$zyfl = $_GET["fl"];
$zykl = $_POST["kl"];

if($zykl == NULL){
    zycx();
}elseif($zyfl == NULL){
    cxkl();
}
$jarr = array();
    while ($rows=mysqli_fetch_array($zyres,MYSQLI_ASSOC)){
        $count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小  
        for($i=0;$i<$count;$i++){  
            unset($rows[$i]);//删除冗余数据  
        }
        array_push($jarr,$rows);
    }
echo json_encode($jarr);
?>