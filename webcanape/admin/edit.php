<?
$title="Редиктирование записи №".$_GET['id'];
include_once("head.php");
include_once("../inc/database.php");
include_once("../inc/func.php");
$link=db_connect();
foreach($_POST as $var=>$val){
	$g[$var]=security_strip($link,$val);
}
if(isset($g['action'])&&$g['action']=='update'){
	$author=$g['author'];
	$text=$g['text'];
	$email=$g['email'];
	$id=$g['id'];
	$query = "UPDATE book SET author='$author', text='$text', email='$email' WHERE id=$id";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	echo 'Изменения внесены! <br/><a href="index.php">на главную</a>';
}else{
	$id=security_strip($link,$_GET['id']);
	$query = "SELECT * FROM book WHERE id=$id";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	$d = mysqli_fetch_array($result);
	extract($d);
	echo"<form action='#' method='post'>
		<p>Автор:<br/><input type='text' name='author' value='$author' id='author'></p>
		<p>e-mail:<br/><input type='text' name='email' value='$email' id='email'></p>
		<p>Сообщение:<br/><textarea name='text' id='text' cols='50' rows='6'>$text</textarea></p>
		<input type='hidden' name='action' value='update'>
		<input type='hidden' name='id' value='$id'>
		<input type='button' value='Сохранить' onclick='if(check_form()){this.form.submit()}' /></p>
		</form> ";	
	mysqli_close($link);
}
?>