<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/Css/css.css" rel="stylesheet" type="text/css">
<script language='javascript' src='/Public/Js/public.js'></script>
</head>

<SCRIPT language=javascript>
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.value="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.value="关闭左边管理菜单";
	}
}

function fullmenu(url){
	if (url==null) {url = "admin_left.asp";}
	parent.leftFrame.location = url;
}

//-->
</SCRIPT>


<body>
<form method="POST" action="/admin.php/Category/addOk">
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">添加分类信息</th>
    </tr>
     <tr>
      <td class="td_bg" width="17%" height="23" align="right">所属分类</td>
      <td width="83%" class="td_bg">
      <select name='cate_cid'>
      	<option value='0'>一级分类</option>
      	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">分类名</td>
      <td width="83%" class="td_bg">
      	<input type="text" name="cate_name" />
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">分类描述</td>
      <td width="83%" class="td_bg">
      	<textarea name='cate_content'  rows='4' cols='80'></textarea>
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23"></td>
      <td class="td_bg" width="83%">
      	<input type="submit" name="submit" value="添加" />
      </td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>