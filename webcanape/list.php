<?
 include_once("inc/database.php");
 include_once("inc/func.php");
 $list = get_list(true);
 $page=1;
 if(count($list)>10&&array_key_exists('page',$_GET)){
	$start=($_GET['page']-1)*10;
	$page=$_GET['page'];
 }else{
	 $start=0;
 }
 echo "<ul>";
 for($i=$start;$i<$start+10&&$i<count($list);$i++){
	 $r=$list[$i];
	 echo "<li><i>".$r['datef']."</i> <a href='mailto:".$r['email']."'>".$r['author']."</a> написал:<p>".$r['text']."</p></li>";
 }
 echo "</ul>";
 if(count($list)>10){
	 echo "<p>";
	 for($i=1;$i<count($list)/10+1;$i++){
		 if($i!=$page){
			 echo"<a href='#' onclick='$(\"#list_div\").load(\"list.php?page=$i\")'>$i</a> ";
		 }else{
			 echo"$i ";
		 }
	 }
	 echo "</p>";
 }
?>