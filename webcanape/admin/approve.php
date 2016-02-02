<?
include_once("../inc/database.php");
include_once("../inc/func.php");
$link=db_connect();
$id=security_strip($link,$_GET['id']);
$approve=security_strip($link,$_GET['approve']);
$show=$approve=='show'?'0':'1';
$query = "UPDATE book SET `show`='$show' WHERE id=$id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
include_once("index.php");
?>