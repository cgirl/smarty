<?php
/* Smarty version 3.1.29, created on 2016-01-16 21:57:29
  from "F:\web\www\smarty\apply\007\template\007_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569a4c49b77341_22848274',
  'file_dependency' => 
  array (
    '2447025057a3266b2523e779d1625938e78b70ce' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\007\\template\\007_01.html',
      1 => 1452952647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569a4c49b77341_22848274 ($_smarty_tpl) {
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
	</p>
	<h2><?php echo $_smarty_tpl->tpl_vars['man']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['man']->value->age;?>
</h2>
	<p>张三说：<?php echo $_smarty_tpl->tpl_vars['man']->value->say();?>
</p>
</body>
</html><?php }
}
