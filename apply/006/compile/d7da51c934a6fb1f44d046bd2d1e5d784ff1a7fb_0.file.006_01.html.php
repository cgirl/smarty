<?php
/* Smarty version 3.1.29, created on 2016-01-16 21:18:44
  from "F:\web\www\smarty\apply\006\template\006_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569a4334375447_78768320',
  'file_dependency' => 
  array (
    'd7da51c934a6fb1f44d046bd2d1e5d784ff1a7fb' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\006\\template\\006_01.html',
      1 => 1452950303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569a4334375447_78768320 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>深入探讨assign append方法</title>
</head>
<body>
	<table>
		<tr><td>姓名：</td><td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td></tr>
		<tr><td>年龄：</td><td><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</td></tr>
	</table>
	<p><?php echo $_smarty_tpl->tpl_vars['arr']->value['country']['prov']['city'];?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['stu']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['stu1']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['stu1']->value[0];?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['stu1']->value[1];?>
</p>
</body>
</html><?php }
}
