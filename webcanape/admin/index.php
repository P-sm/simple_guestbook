<?
 $title="Панель управления гостевой книгой";
 include_once("head.php");
 include_once("../inc/database.php");
 include_once("../inc/func.php");
 $list = get_list(false);
 echo "<table>";
 foreach($list as $r){
	 extract($r);
	 if($show){
		 $cl="show";
		 $link="запр.";
	 }else{
		 $cl="hide"; 
		 $link="одобр.";
	 }
	 echo "<tr class='$cl'><td rowspan='2'>$id</td><td>$datef</td><td>$author</td><td>$email</td>
	 <td rowspan='2'><a href='edit.php?id=$id'>ред.</a></td>
	 <td rowspan='2'><a href='approve.php?id=$id&approve=$cl'>$link</a></td>
	 <td rowspan='2'><a href='javascript:del($id)'>удал.</a></td></tr>";
	 echo "<tr class='$cl'><td colspan='3'>$text</td></tr>";
 }
 echo"</table>";
 include_once("foot.php"); 
 ?>