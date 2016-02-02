<?
 $title="Гостевая книга";
 include_once("head.php");
 echo"<div id='list_div'>";

 ?></div>
 <div id="div2result">
<form method="post" action="" id="forma">
 <p>Ваше имя (не более 255 символов):<br/><input type="text" name="author" id="author"></p>
 <p>Ваш e-mail:<br/><input type="text" name="email" id="email"></p><!-- type="email" не пишу, т.к. не все браузеры поддерживают html5 -->
 <p>Сообщение (не более 512 символов):<br/><textarea name="text" id="text" cols="50" rows="6"></textarea></p>
 <input type="button" value="Отправить" onclick="AjaxFormRequest('div2result','forma','add.php')" /></p>
 </form>
 </div>
<?
 include_once("foot.php");
?>