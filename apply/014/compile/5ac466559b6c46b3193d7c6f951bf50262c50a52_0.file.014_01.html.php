<?php
/* Smarty version 3.1.29, created on 2016-01-17 16:17:58
  from "F:\web\www\smarty\apply\014\template\014_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569b4e36a8c205_66474560',
  'file_dependency' => 
  array (
    '5ac466559b6c46b3193d7c6f951bf50262c50a52' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\014\\template\\014_01.html',
      1 => 1453018670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569b4e36a8c205_66474560 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\web\\www\\smarty\\smarty-3.1.29\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>变量调节器</title>
</head>
<body>
	
		<h2>变量调节器</h2>
		<pre>
			变量调节器，是在模板中，修改变量的显示形式的一种功能
			通过变量调节器，来对变量的值进行微调
			比如：此例中将时间戳微调为时间.
			变量调节器的本质是一个函数，这个函数，以标签对象的变量值为参数，
			然后运算，把返回值显示在标签处
		</pre>
	
	<h2>布尔商城商品列表</h2>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th><th>发布时间</th></tr>
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
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['add_time'];?>
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
	<br />
	<table border="1">
		<tr>
			<th>序号</th>
			<th>商品名</th>
			<th>商品价格</th>
			<th>发布时间</th>
		</tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->iteration=0;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['v']->iteration++;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y年%m月%d日 %H:%M:%S");?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
	</table>
	
	<h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['poen']->value, 'UTF-8');?>
</h2>
	<h2><?php echo mb_strtolower($_smarty_tpl->tpl_vars['poen']->value, 'UTF-8');?>
</h2>
</body>
</html><?php }
}
