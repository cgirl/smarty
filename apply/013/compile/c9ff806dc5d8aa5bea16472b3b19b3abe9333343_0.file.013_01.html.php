<?php
/* Smarty version 3.1.29, created on 2016-01-17 15:43:04
  from "F:\web\www\smarty\apply\013\template\013_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569b46087bef01_96082787',
  'file_dependency' => 
  array (
    'c9ff806dc5d8aa5bea16472b3b19b3abe9333343' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\013\\template\\013_01.html',
      1 => 1453016580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569b46087bef01_96082787 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>模板for循环</title>
</head>
<body>
	
		<h2>section</h2>
		<pre>
			一般section这么写{section loop=$source name=g}
			loop是待循环的数组，name代表每一次循环时，循环单元的临时变量
			
			name=g代表每一次循环，g=0,1,2,3,4.....
			如果数组也是标签的索引数组，g恰好就是数组的每一个键，因此，
			手册上说，section用于循环从0开始的索引数组。
			显示时，$source[g].键名
		</pre>
	
	<h2>布尔商城商品列表</h2>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
		<?php
$__section_g_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_g']) ? $_smarty_tpl->tpl_vars['__smarty_section_g'] : false;
$__section_g_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['goods']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_g_0_total = min(ceil(($__section_g_0_loop - 0)/ 2), $__section_g_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_g'] = new Smarty_Variable(array());
if ($__section_g_0_total != 0) {
for ($__section_g_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] = 0; $__section_g_0_iteration <= $__section_g_0_total; $__section_g_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] += 2){
?> 
		<tr><td><?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] : null)]['goods_id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] : null)]['goods_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] : null)]['shop_price'];?>
</td></tr>
		<?php
}
}
if ($__section_g_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_g'] = $__section_g_0_saved;
}
?>
	</table>
	
	<?php
while ($_smarty_tpl->tpl_vars['age']->value < 18) {?>
		<?php echo $_smarty_tpl->tpl_vars['age']->value++;?>
岁未成年<br />
	<?php }?>

</body>
</html><?php }
}
