<?
include_once("../inc/database.php");
include_once("../inc/func.php");
$link=db_connect();
$id=security_strip($link,$_GET['id']);
$query = "DELETE FROM book WHERE id=$id LIMIT 1";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
include_once("index.php");
?>