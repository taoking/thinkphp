<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
* { margin:0; padding:0;}
body { font-size:12px;}
.comment { margin-top:10px; padding:10px; border:1px solid #ccc;background:#DDD;}
.comment h6 { font-weight:700; font-size:14px;}
.para { margin-top:5px; text-indent:2em;background:#DDD;}
</style>
 <!--   引入jQuery -->
  <script type="text/javascript" src="/Public/static/jquery-1.3.1.js"></script>
<script type="text/javascript">
//<![CDATA[
	$(function(){
	   $("#send").click(function(){
			$.get("/index.php/Home/Zhengze", { 
						username :  $("#username").val() , 
						content :  $("#content").val()  
					}, function (data, textStatus){
					    var username = data.username;
						var content = data.content;
					    var txtHtml = "<div class='comment'><h6>"+username+":</h6><p class='para'>"+content+"</p></div>";
                        $("#resText").html(txtHtml); // 把返回的数据添加到页面上
					},"json");
	   })
	})
	$(function(){
	//	$("#username").focus(function(){ alert("a"); });
		$("#username").blur(function(){ 
			$.get('/index.php/Home/Zhengze',{
				username : $("#username").val() , 
				content :  $("#content").val()  
			},function (data,textStatus){
	//			var username1 = data.result;
//			alert(username1);
				$("#p_name").text(data.result);
			},"json");
		})
	})
//]]>
</script>
</head>
<body>
<form id="form1" action="#">
<p>评论:</p>
 <p >姓名: <input type="text" name="username" id="username" /><strong id = "p_name"></strong></p>
 <p>内容: <textarea name="content" id="content"  rows="2" cols="20"></textarea></p>
 <p><input type="button" id="send" value="提交"/></p>
</form>


<div  class='comment'>已有评论：</div>
<div id="resText" >
</div>

</body>
</html>