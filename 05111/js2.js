$={};
$.getAjax=function(){
	return window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
}


$.ajax=function(arg){
	var url = arg.url;
	var data = arg.data?arg.data:false;
	var ajax = this.getAjax();
	ajax.onreadystatechange=function(){
	if(ajax.readyState==4){
		if(ajax.status==200){
			arg.success(ajax.responseText);
	 
	 	}else{
	 		ajax.error();
		}
  }

}
var questType =arg.type=="get"?"get":"post";
var isSync = arg.sync?arg.sync:true;
var questArgs="";
if(data!==false){
	for(var i in data){
		questArgs+=i+"="+data[i]+"&";
	}
	
}
ajax.open(questType,url,isSync);
if(questType=='post'){
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
}
ajax.send(questArgs);
}
$.get=function(url,data,func){
$.ajax({
	url:url,
	data:data,
	success:func
	});
}
$.post=function(url,data,func){
	$.ajax({url:url,data:data,success:func});
}