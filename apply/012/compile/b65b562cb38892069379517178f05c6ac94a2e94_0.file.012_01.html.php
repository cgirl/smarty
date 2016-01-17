<?php
/* Smarty version 3.1.29, created on 2016-01-17 14:40:08
  from "F:\web\www\smarty\apply\012\template\012_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569b374899ddd5_85971489',
  'file_dependency' => 
  array (
    'b65b562cb38892069379517178f05c6ac94a2e94' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\012\\template\\012_01.html',
      1 => 1453012788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569b374899ddd5_85971489 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>模板for循环</title>
</head>
<body>
	
		<h2>foreach是smarty中非常重要的一个循环结构，请认真练习</h2>
		foreach循环数组的典型写法
		{foreach from=$source key=$key item=$item}{/foreach}
		
		如何理解foreach呢？
		答：from是来自的意思，即循环$source这个变量
		
		从头到尾，挨个的把$source的每一个单元的“键”和“值”拿出来，分别给$key,$item
		不断变化，直到循环结束
	
	<h2>布尔商城商品列表</h2>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
		<!-- 这是smarty2的写法 -->
		<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_0_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$__foreach_g_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_g_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_g_0_first = true;
$_smarty_tpl->tpl_vars['g']->iteration=0;
$__foreach_g_0_iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$__foreach_g_0_iteration++;
$_smarty_tpl->tpl_vars['g']->first = $__foreach_g_0_first;
$_smarty_tpl->tpl_vars['g']->last = $__foreach_g_0_iteration == $__foreach_g_0_total;
$__foreach_g_0_first = false;
$__foreach_g_0_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?> 
		<tr><td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</td></tr>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_0_saved_local_item;
}
if ($__foreach_g_0_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_0_saved_item;
}
if ($__foreach_g_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_g_0_saved_key;
}
?>
	</table>
	
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
		<!-- 这是smarty3的写法，建议中smarty3写法 -->
		<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_1_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$__foreach_g_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_g_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_g_1_first = true;
$_smarty_tpl->tpl_vars['g']->iteration=0;
$__foreach_g_1_iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$__foreach_g_1_iteration++;
$_smarty_tpl->tpl_vars['g']->first = $__foreach_g_1_first;
$_smarty_tpl->tpl_vars['g']->last = $__foreach_g_1_iteration == $__foreach_g_1_total;
$__foreach_g_1_first = false;
$__foreach_g_1_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?> 
		<tr><td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</td></tr>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved_local_item;
}
if ($__foreach_g_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved_item;
}
if ($__foreach_g_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_g_1_saved_key;
}
?>
	</table>
	
	<h2>用iteration来实现隔行变色</h2>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
		<!-- 这是smarty2的写法 -->
		<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_2_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$__foreach_g_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_g_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_g_2_first = true;
$_smarty_tpl->tpl_vars['g']->iteration=0;
$__foreach_g_2_iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$__foreach_g_2_iteration++;
$_smarty_tpl->tpl_vars['g']->first = $__foreach_g_2_first;
$_smarty_tpl->tpl_vars['g']->last = $__foreach_g_2_iteration == $__foreach_g_2_total;
$__foreach_g_2_first = false;
$__foreach_g_2_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?> 
		<tr <?php if ($_smarty_tpl->tpl_vars['g']->iteration%2 == 0) {?> bgcolor="#999" <?php }?>>
			<td><?php echo $_smarty_tpl->tpl_vars['g']->iteration;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_2_saved_local_item;
}
if ($__foreach_g_2_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_2_saved_item;
}
if ($__foreach_g_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_g_2_saved_key;
}
?>
	</table>
	
	<h2>
		用@first来控制首行，@first是一个布尔值，<br>
		当第一次循环时，其值为真，否则其值为假<br>
		@last类推
	</h2>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
		<!-- 这是smarty2的写法 -->
		<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_3_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$__foreach_g_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_g_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_g_3_first = true;
$_smarty_tpl->tpl_vars['g']->iteration=0;
$__foreach_g_3_iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$__foreach_g_3_iteration++;
$_smarty_tpl->tpl_vars['g']->first = $__foreach_g_3_first;
$_smarty_tpl->tpl_vars['g']->last = $__foreach_g_3_iteration == $__foreach_g_3_total;
$__foreach_g_3_first = false;
$__foreach_g_3_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?> 
		<tr <?php if ($_smarty_tpl->tpl_vars['g']->first) {?> bgcolor="#ddd" <?php } elseif ($_smarty_tpl->tpl_vars['g']->last) {?> bgcolor="pink"<?php }?>>
			<td><?php echo $_smarty_tpl->tpl_vars['g']->iteration;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_3_saved_local_item;
}
if ($__foreach_g_3_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_3_saved_item;
}
if ($__foreach_g_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_g_3_saved_key;
}
?>
	</table>
</body>
</html><?php }
}
