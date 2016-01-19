<?php
/* Smarty version 3.1.29, created on 2016-01-19 13:19:08
  from "G:\wamp\www\smarty\senior\024\template\024_02.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569dc74c8cf177_93249774',
  'file_dependency' => 
  array (
    '8f2ece77215500a4f5c6c767eeb223fdd2edc400' => 
    array (
      0 => 'G:\\wamp\\www\\smarty\\senior\\024\\template\\024_02.html',
      1 => 1453180746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569dc74c8cf177_93249774 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>对象注册</title>
</head>
<body>
	<pre>
		
		对于注册得来的对象，如lisi，可以调用其方法，{lisi->say},
		注意lisi前不加$,say后不加()
		
	</pre>

 	<h1>姓名：<?php echo $_smarty_tpl->smarty->registered_objects['lisi'][0]->name;?>
</h1>
	<h1>年龄：<?php echo $_smarty_tpl->smarty->registered_objects['lisi'][0]->age;?>
</h1>
	
	<p>他说：<?php echo $_smarty_tpl->smarty->registered_objects['lisi'][0]->say(array(),$_smarty_tpl);?>
</p>
	<p>改密：{lisi->modPass}</p>
</body>
</html><?php }
}
