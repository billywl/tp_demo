<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录页面</title>
</head>
<body>

	    ： 会替换成当前网站的地址（不含域名） <hr />
    /index.php： 会替换成当前应用的URL地址 （不含域名）<hr />
    /index.php：会替换成当前模块的URL地址 （不含域名）<hr />
    /index.php/Member（__或者/index.php/Member 兼容考虑）： 会替换成当前控制器的URL地址（不含域名）<hr />
    /index.php/Member/login：会替换成当前操作的URL地址 （不含域名）<hr />
    /member/login： 会替换成当前的页面URL<hr />
    /Public：会被替换成当前网站的公共目录 通常是 /Public/<hr />
	<form method='post' action='/index.php/Member/checkLogin'>
		用户 <input type='text' name='username' /><hr />
		密码 <input type="password" name="password" /><hr />
		<input type="submit" name="submit" value='登录' />
	</form>
</body>
</html>