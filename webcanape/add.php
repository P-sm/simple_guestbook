<?
	include_once("inc/database.php");
	include_once("inc/func.php");
	$link=db_connect();// из database.php
	foreach($_GET as $var=>$val){
		$g[$var]=security_strip($link,$val);
	}
	$author=$g['author'];
	$text=$g['text'];
	$email=$g['email'];
	$get['author']=substr($get['author'],0,255);//обрезаетя на случай если пользователь обойдет js
	$get['text']=substr($get['text'],0,512);//обрезаетя на случай если пользователь обойдет js
	$query = "INSERT INTO `book` (`id`, `text`, `author`, `email`, `date`, `show`) VALUES (NULL, '$text', '$author', '$email', CURRENT_TIMESTAMP, 0)";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	mysqli_close($link);
	echo"Уважаемый(ая) $author, Ваше сообщение \"$text\" поступило на обработку, и будет показано после модерации. Спасибо!";

?>