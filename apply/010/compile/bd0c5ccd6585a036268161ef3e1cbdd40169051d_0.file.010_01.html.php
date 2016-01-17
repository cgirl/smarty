<?php
/* Smarty version 3.1.29, created on 2016-01-17 09:41:57
  from "F:\web\www\smarty\apply\010\template\010_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569af1650d45a0_01589568',
  'file_dependency' => 
  array (
    'bd0c5ccd6585a036268161ef3e1cbdd40169051d' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\010\\template\\010_01.html',
      1 => 1452994907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569af1650d45a0_01589568 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>模板if esle逻辑判断</title>
</head>
<body>
	<p>你给女友买了个包</p>
	<p>
		她到底是喜欢还是不喜欢呢？
		<?php if ($_smarty_tpl->tpl_vars['price']->value > 10000) {?>
			当然喜欢
		<?php } else { ?>
			我才不喜欢
		<?php }?>
	</p>
	<p>
		<?php if ($_smarty_tpl->tpl_vars['price']->value > 5000) {?>
			老婆，我给你买了lv包
		<?php }?>
	</p>
	<p>
		<?php if ($_smarty_tpl->tpl_vars['height']->value == 180) {?>
			<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
是完美身材
		<?php }?>
	</p>
	<p>
		<?php if ($_smarty_tpl->tpl_vars['house']->value%3 == 0) {?>
			你的房子面积是3的整数倍
		<?php } else { ?>
			你的房子面积不是3的整数倍
		<?php }?>
	</p>
	<p>
		思考：在模板里如何写成一个表格的隔行变色？
		答：模板既能数学运算，又能 逻辑判断，可以对2取模来判断，并设置背景色
	</p>
	<p>
		从地址栏上传值，判断是星期几？
		如果是0,7，则为周日，如果是6则为周六，其余判断为工作日
		<br>
		<?php if ($_GET['today'] == 0 || $_GET['today'] == 7) {?>
			今天是周日
		<?php } elseif ($_GET['today'] == 6) {?>
			今天是周六
		<?php } else { ?>
			今天是工作日
		<?php }?>
	</p>
</body>
</html><?php }
}
