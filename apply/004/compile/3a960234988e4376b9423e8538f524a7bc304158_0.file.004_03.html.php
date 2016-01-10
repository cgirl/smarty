<?php
/* Smarty version 3.1.29, created on 2016-01-10 10:52:01
  from "F:\web\www\smarty\apply\004\template\004_03.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5691c7517b2d34_69161056',
  'file_dependency' => 
  array (
    '3a960234988e4376b9423e8538f524a7bc304158' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\004\\template\\004_03.html',
      1 => 1452394318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5691c7517b2d34_69161056 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<style>
	table{background:blue;}
</style>
<body>
	<pre>
	
		-如果smarty的标签的定界符{}与css的{}块冲突了，可以用个如下两种方法来解决：
		-1.修改smarty的默认定界符，如改成{> <};
		-2.也可以用{literal}{/literal}标签，来告诉smarty，此处照常输出，不用解析
		-  literal在英语里，是“字面值，原义”的意思
	
	</pre>
	<table>
		<!-- 
		方法一：真正执行时，没有和标志
		<tr><td>姓名：</td><td>{>$gy[0]<}</td></tr>
		<tr><td>年龄：</td><td>{>$gy['age']<}</td></tr>
		<tr><td>兵器：</td><td>{>$gy['weapon']<}</td></tr>
		-->
		<!-- 方法二 -->
		<tr><td>姓名：</td><td><?php echo $_smarty_tpl->tpl_vars['gy']->value[0];?>
</td></tr>
		<tr><td>年龄：</td><td><?php echo $_smarty_tpl->tpl_vars['gy']->value['age'];?>
</td></tr>
		<tr><td>兵器：</td><td><?php echo $_smarty_tpl->tpl_vars['gy']->value['weapon'];?>
</td></tr>
	</table>
</body>
</html><?php }
}
