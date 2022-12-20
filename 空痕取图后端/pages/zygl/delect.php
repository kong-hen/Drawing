<?php

$zyid = $_GET["zyid"];
include("../../includes/function.php");
include("../function.php");
zydel();
echo "<script>alert('删除成功');window.history.go(-1);</script>"

?>