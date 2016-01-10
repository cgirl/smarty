<?php
/* Smarty version 3.1.29, created on 2016-01-10 10:39:29
  from "F:\web\www\smarty\apply\004\template\004_02.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5691c4613f3dd4_74222947',
  'file_dependency' => 
  array (
    'f6b085217efb312d9e2b6058c3df517629f2160f' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\004\\template\\004_02.html',
      1 => 1452393387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5691c4613f3dd4_74222947 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<table>
		<tr><td>姓名：</td><td>{$name}</td></tr>
		<tr><td>年龄：</td><td>{$age}</td></tr>
		<tr><td>兵器：</td><td>{$weapon}</td></tr>
	</table>
	<table>
		<tr><td>姓名：</td><td>{$zf.name}</td></tr>
		<tr><td>年龄：</td><td>{$zf.age}</td></tr>
		<tr><td>兵器：</td><td>{$zf.weapon}</td></tr>
	</table>
	<table>
		<tr><td>姓名：</td><td>{$gy[0]}</td></tr>
		<tr><td>年龄：</td><td>{$gy['age']}</td></tr>
		<tr><td>兵器：</td><td>{$gy['weapon']}</td></tr>
	</table>
</body>
</html><?php }
}
