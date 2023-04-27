<?php



session_start();

$_SESSION["authentication"] = "";
$_SESSION["promptName"] = "";
session_destroy();
header("Location: homepage.php");
exit();
?>