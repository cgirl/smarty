<?php
/* Smarty version 3.1.29, created on 2016-01-17 09:02:59
  from "F:\web\www\smarty\apply\009\template\009_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569ae843d72bb2_82667663',
  'file_dependency' => 
  array (
    '092bebdfabf7e1ee8083e7bf5629ebe381be5323' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\009\\template\\009_01.html',
      1 => 1452992563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569ae843d72bb2_82667663 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>标签的数学运算</title>
</head>
<body>
	<p>标签是可以参与运算的，但是不推荐</p>
	<p><?php echo $_smarty_tpl->tpl_vars['age']->value+30;?>
</p>
	<p>小伙的真实年龄是：<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</p>
	<p>他最佳配偶年纪是：<?php echo $_smarty_tpl->tpl_vars['age']->value-$_smarty_tpl->tpl_vars['sub']->value;?>
</p>
	<p>夫妻年纪的乘积为：<?php echo $_smarty_tpl->tpl_vars['age']->value*($_smarty_tpl->tpl_vars['age']->value-$_smarty_tpl->tpl_vars['sub']->value);?>
</p>
	<p><?php echo 30+$_smarty_tpl->tpl_vars['age']->value;?>
</p>
</body>
</html><?php }
}
