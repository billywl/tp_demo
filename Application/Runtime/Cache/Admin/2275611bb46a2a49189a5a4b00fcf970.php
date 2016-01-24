<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>在此处插入标题</title>
<script>
	function genghuan() {
		var img1 = document.getElementById('img1');
		img1.src = '/admin.php/Admin/createCode/' + new Date().getTime();
	}
</script>
</head>
<body>
	<form method='post' action='/admin.php/Admin/checkLogin'>
		用户：
		<input type='text' name='username' />
		<hr>
		密码：
		<input type='password' name='password' />
		<hr>
		验证：
		<input type='text' name='code' />
		&nbsp;
		<img id='img1' src="/admin.php/Admin/createCode" />
		<span onclick="genghuan()">看不清，请换一张</span>
		<hr>
		<input type='submit' name='btnOk' value='登录' />
	</form>
</body>
</html>