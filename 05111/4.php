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
	<script type="text/javascript" src="js2.js"></script>
	<script>
		window.onload=function(){
			var form = document.getElementById("form1");
			form1.onsubmit=function(){
				var title = document.getElementById("title").value.replace(/(^\s*)|(\s*$)/g,"");
				var body = document.getElementById("body").value.replace(/(^\s*)|(\s*$)/g,"");
				$.post("4.1.php",{title:title,body:body},function(data){
						if(data==1){
							var ul = document.getElementById("list");
							ul.innerHTML="<li><h3>"+title+"</h3><p>"+body+"</p></li>"+ul.innerHTML;
						}
					})
				// $.ajax({
				// 	url:"4.1.php?webname=houdunwang.com",
				
				// 	success:function(data){
				// 			alert(data);
				// 	},
					
				// })
				 // $.get("4.1.php?webname=baidu",{title:title},function(data){
					// alert(data);
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
	<ul id="list">
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
