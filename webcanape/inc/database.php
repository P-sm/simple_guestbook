<?
function db_connect(){
	$dbHost = "mysql.hostinger.ru";
	$dbName = "u734430506_shara";
	$dbUser = "u734430506_shara";
	$dbPass = "cGJSxv5pyR";//теперь весь мир будет знать пароль от моей сверхсекретной базы данный
	$link = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
	if (!$link) {
		printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
		exit;
	}
	return $link;
}
?>