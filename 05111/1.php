<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style type="text/css">
	#msg{width:800px;border:solid 1px #ddd;padding:10px;}
	ul{list-style:none;}
	#msg h3{border-bottom:solid 1px #555;padding-bottom:5px;}
	#msg ul li{border:solid 1px #666;padding:10px;}
	</style>
	<script type="text/javascript" src="js.js"></script>
	<script>
		window.onload=function(){
			var form = document.getElementById("form1");
			form.onsubmit=function(){
				var title = document.getElementById("title").value.replace(/(^\s*)|(\s*$)/g,"");
				var body = document.getElementById("body").value.replace(/(^\s*)|(\s*$)/g,"");
				if(title==""){
					alert('title not null');
				}
				if(body==""){
					alert('body not null');
				}
						var ajax = getAjax();
ajax.onreadystatechange=function(){
	if(ajax.readyState==4){
		if(ajax.status==200){
			// alert(ajax.responseText);return;
	 	if(ajax.responseText==1){
	 		var ul = document.getElementById("msg").getElementsByTagName("ul")[0];
	 			var liData ="<li><h3>"+title+"</h3><p>"+body+"</p></li>";
	 			ul.innerHTML+=liData;
	 	}else{
	 		alert("insert error");
	 	}
	}else{
		//alert("error");
		}
  }
}
var data="title="+title+"&body="+body;
// ajax.open("get","2.php?"+data);
ajax.open("post","2.php");
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send(data);
return false;
			}
		}

	</script>
</head>
<body>
	<h1><script>document.write(new Date()*1);</script></h1>
	<form id="form1" onsubmit="return false">
	   标题:<input type="text" name="title" id="title"/><br/>
	   内容:<textarea name="body" cols="30" rows="6" id="body"></textarea><br/>
	   <input type="submit"/>
	</form>
	<div id="msg">
	<ul>
		<?php
			$db= include "db.php";
			foreach($db as $v):
		?>
		<li>
			<h3><?php echo $v['title'];?></h3>
			<p><?php echo $v['body'];?></p>
		</li>
		<?php
		endforeach;
		?>
	</ul>
	</div>
</body>
</html>
