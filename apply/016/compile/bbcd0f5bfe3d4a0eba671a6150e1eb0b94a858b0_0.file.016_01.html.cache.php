<?php
/* Smarty version 3.1.29, created on 2016-01-17 19:29:19
  from "F:\web\www\smarty\apply\016\template\016_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => true,
  'version' => '3.1.29',
  'unifunc' => 'content_569b7b0feb6572_63231831',
  'file_dependency' => 
  array (
    'bbcd0f5bfe3d4a0eba671a6150e1eb0b94a858b0' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\016\\template\\016_01.html',
      1 => 1453030153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569b7b0feb6572_63231831 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\web\\www\\smarty\\smarty-3.1.29\\libs\\plugins\\modifier.date_format.php';
echo '/*%%SmartyNocache:21177569b7b0f69b213_18922799%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_date_format\')) require_once \'F:\\\\web\\\\www\\\\smarty\\\\smarty-3.1.29\\\\libs\\\\plugins\\\\modifier.date_format.php\';
?>/*/%%SmartyNocache:21177569b7b0f69b213_18922799%%*/';
$_smarty_tpl->compiled->nocache_hash = '21177569b7b0f69b213_18922799';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>页面缓存</title>
</head>
<body>
	
	<pre>
		smarty在页面缓存的情况下，可以设置部门内容不缓存，这比较有用，
		因为页面的某部分，比如随机广告，股票信息，时间等等，这些就适宜缓存起来
			
		在smarty中，想控制局部不缓存，方法非常多：
		1.在标签中控制该标签不缓存 {$标签 nocache}
		2.控制一片标签不缓存{nocache}{/nocache}
		3.在php中，赋值时就控制不缓存（smarty3新增）
		
		注意：不存换的标签，要保证总能从php处获得数据
	</pre>
	
	<h2>当前时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H:%M:%S");?>
</h2>
	<h2>当前时间<?php echo '/*%%SmartyNocache:21177569b7b0f69b213_18922799%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time1\']->value,"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:21177569b7b0f69b213_18922799%%*/';?>
</h2>
	
	<h2>当前时间<?php echo '/*%%SmartyNocache:21177569b7b0f69b213_18922799%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time1\']->value,"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:21177569b7b0f69b213_18922799%%*/';?>
</h2>
	<h2>当前时间<?php echo '/*%%SmartyNocache:21177569b7b0f69b213_18922799%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time1\']->value,"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:21177569b7b0f69b213_18922799%%*/';?>
</h2>
	
	<h2>当前时间<?php echo '/*%%SmartyNocache:21177569b7b0f69b213_18922799%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time2\']->value,"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:21177569b7b0f69b213_18922799%%*/';?>
</h2>
	
	<p><?php echo Smarty_Internal_Nocache_Insert::compile ('insert_welcome',array('age' => 28), $_smarty_tpl, 'null');?>
</p>
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
