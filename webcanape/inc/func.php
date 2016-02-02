<?
function get_list($approve){
	$link=db_connect();
	if($approve){
		$where=" WHERE `show`='1' ";
	}else{
		$where="";
	}
	$query = "SELECT *,DATE_FORMAT(`date` ,'%d.%m.%Y %H:%i') as datef  FROM book $where ORDER BY date DESC";
	//в date возыращается дата в формате по умолчанию (YYYY-MM-DD HH:MM:SS) для правильной сортировки
	//в datef возыращается дата в "русском" формате
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	while ($d = mysqli_fetch_array($result)) { 
		$list[]=$d;
	}	
	mysqli_close($link);
	return $list;
}
function security_strip($link,$str){
	$r=strip_tags($str); 
	$r=htmlspecialchars($r); 
	$r=mysqli_real_escape_string($link,$r);
	return $r;
}
?>