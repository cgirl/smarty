<?php
/* Smarty version 3.1.29, created on 2016-01-17 13:18:28
  from "F:\web\www\smarty\apply\011\template\011_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569b24243186e1_23382802',
  'file_dependency' => 
  array (
    'f1e7f1150cbc998884b6c121fad70231d5f6fa52' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\011\\template\\011_01.html',
      1 => 1453007887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569b24243186e1_23382802 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>模板for循环</title>
</head>
<body>
	<pre>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;
}
}
?>

		原理是，$i的初始值为$start，$i不断!!!《增加》!!!，知道等于$end
	</pre>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 0) {?>
				<br />
			<?php }?>
		<?php }
}
?>

	<pre>
		接下来，打印1-100之间的所有奇数：
		常规想法：用%2==1来判断并打印。
		但是我们可以利用for循环的步长属性来控制。
		步长即由小到大的过程中每一步的增长幅度，
		1,3,5,7这就是每一步递增数字2
	</pre>
	<p>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 2;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['i']->iteration%3 == 0) {?><br /><?php }?>
		<?php }
}
?>

		<h2>这次循环将要跑<?php echo $_smarty_tpl->tpl_vars['i']->total;?>
次</h2>
	</p>
	<pre>在for循环中，已上面的for循环为例，$i@total</pre>
</body>
</html><?php }
}
