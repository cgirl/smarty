<?php
/* Smarty version 3.1.29, created on 2016-01-10 16:38:59
  from "F:\web\www\smarty\apply\005\template\005_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569218a32eeea8_64934532',
  'file_dependency' => 
  array (
    '2290d55a4f2d33e1d3edce43c77fc9fc02c864cf' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\005\\template\\005_01.html',
      1 => 1452415136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569218a32eeea8_64934532 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'site.conf', null, 0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>模板3种变量来源详解</title>
</head>
<body>
	<pre>
		当$smarty.开头的标签，当成系统变量来解析，如$smarty.get.id被解析成：
		&lt?php echo $_GET['id']; ?&gt
		保留变量：$smarty.post, $smarty.session, $smarty.cookies
	</pre>
	<h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
	<p><?php echo $_smarty_tpl->tpl_vars['poen']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</p>
	<p><?php echo $_GET['id'];?>
</p>
	<p><?php echo @constant('ZMLM');?>
</p>
	
	<div>
		<p>
			<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'site');?>

		</p>
		<p>
			用#号也能读配置文件的值
			<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'hao');?>

		</p>
		<p>
			电话：<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tel');?>

		</p>
	</div>
</body>
</html><?php }
}
