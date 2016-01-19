<?php
/* Smarty version 3.1.29, created on 2016-01-19 13:00:24
  from "G:\wamp\www\smarty\senior\024\template\024_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569dc2e8d274f0_47670302',
  'file_dependency' => 
  array (
    '035156c2f77c27ed969f974a343e8a4f87a86235' => 
    array (
      0 => 'G:\\wamp\\www\\smarty\\senior\\024\\template\\024_01.html',
      1 => 1453179601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569dc2e8d274f0_47670302 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>对象注册</title>
</head>
<body>
	<h1>姓名：<?php echo $_smarty_tpl->tpl_vars['lisi']->value->name;?>
</h1>
	<h1>年龄：<?php echo $_smarty_tpl->tpl_vars['lisi']->value->age;?>
</h1>
	
	<p>他说：<?php echo $_smarty_tpl->tpl_vars['lisi']->value->say();?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['lisi']->value->modPass();?>
</p>
</body>
</html><?php }
}
