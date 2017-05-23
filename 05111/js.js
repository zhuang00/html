function getAjax(){
	return window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
}
var ajax = getAjax();
ajax.onreadystatechange=function(){
	if(ajax.readyState==4){
		if(ajax.status==200){
	 	alert(ajax.responseText)
	}else{
		alert("error");
		}
  }
}
ajax.open("get","2.php");
ajax.send();