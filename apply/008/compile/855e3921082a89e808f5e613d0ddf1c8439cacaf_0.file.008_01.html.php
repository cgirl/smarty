<?php
/* Smarty version 3.1.29, created on 2016-01-16 22:25:27
  from "F:\web\www\smarty\apply\008\template\008_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569a52d7d5aa50_54563047',
  'file_dependency' => 
  array (
    '855e3921082a89e808f5e613d0ddf1c8439cacaf' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\008\\template\\008_01.html',
      1 => 1452952852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569a52d7d5aa50_54563047 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>对象的赋值与引用</title>
</head>
<body>
	<p>
		-对象的引用是$标签->属性名;
		-还可以调用对象的方法，如何调用？
		-$标签->method()
		
		-但是！！！！！！-
		-我们设计模板时的初衷，是为了什么？
		-就是为了分离php与html代码，让代码简洁
		-所以，模板中的标签，应该尽量的是，只负责变量的输出，就是负责显示数据的，不要负责太多的逻辑判断，函数调用等
		-所以我们不推荐在模板里调用函数和方法
	</p>
	<h2><?php echo $_smarty_tpl->tpl_vars['man']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['man']->value->age;?>
</h2>
	<p>张三说：<?php echo $_smarty_tpl->tpl_vars['man']->value->say();?>
</p>
</body>
</html><?php }
}
