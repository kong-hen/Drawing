<?PHP

session_start();
$name = $_SESSION["username"];

if ($name) {
    header("Location:./pages/home.php");
}else{
    header("Location:./login.php");
}

?>