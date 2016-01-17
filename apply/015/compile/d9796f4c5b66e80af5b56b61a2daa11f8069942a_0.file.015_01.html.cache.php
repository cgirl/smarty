<?php
/* Smarty version 3.1.29, created on 2016-01-17 17:29:02
  from "F:\web\www\smarty\apply\015\template\015_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569b5edeecb4a5_74312568',
  'file_dependency' => 
  array (
    'd9796f4c5b66e80af5b56b61a2daa11f8069942a' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\015\\template\\015_01.html',
      1 => 1453022939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569b5edeecb4a5_74312568 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\web\\www\\smarty\\smarty-3.1.29\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '21506569b5edeb077a2_46663755';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>页面缓存</title>
</head>
<body>
	

	
	<h2>当前时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H:%M:%S");?>
</h2>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->iteration=0;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['v']->iteration++;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
	</table>
</body>
</html><?php }
}
