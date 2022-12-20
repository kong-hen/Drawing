<?php

include("../includes/function.php");

$pzname = $_POST["lx"];

pzdb();

echo json_encode($pzrow);
?>