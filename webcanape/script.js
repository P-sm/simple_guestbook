
function AjaxFormRequest(result_id,form_id,url) {
	if(check_form()){
		jQuery.ajax({
			url:     url, //Адрес подгружаемой страницы
			type:     "GET", //Тип запроса
			dataType: "html", //Тип данных
			data: jQuery("#"+form_id).serialize(), 
			success: function(response) { //Если все нормально
            document.getElementById(result_id).innerHTML = response;
			},
			error: function(response) { //Если ошибка
			document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
			}
		});
	}
}
function check_form(){
	msg="";
	if(document.getElementById("author").value.length>255){msg+="Поле \"Ваше имя\" должно быть не более 255 симвовлов."}
	if(document.getElementById("text").value.length>512){msg+="\r\nПоле \"Сообщение\" должно быть не более 512 симвовлов."}
	if(!check_email(document.getElementById("email").value)){msg+="\r\nНекорректен адрес электронной почты."}
	if(msg==""){return true}else{
		alert(msg)
		return false
	}	
}
function check_email(str)
{
	str = str.replace(/^\s+|\s+$/g, '');//обрезаем пробелы в начале и конце адреса
 return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(str);
	//        симв.кот.м.б.    остальные     начало не с точки  остальные    длина полсе точки от 2 до 4
	//        в начале 
}
function del(id){
	if(confirm('Вы уверены что собираетесь удалить запись №'+id)){
		document.location.href='delete.php?id='+id;
	}
}