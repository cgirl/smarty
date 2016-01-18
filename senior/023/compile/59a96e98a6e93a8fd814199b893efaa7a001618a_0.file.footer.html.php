<?php
/* Smarty version 3.1.29, created on 2016-01-18 21:45:12
  from "F:\web\www\smarty\senior\023\template\footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569cec68e7af62_61966511',
  'file_dependency' => 
  array (
    '59a96e98a6e93a8fd814199b893efaa7a001618a' => 
    array (
      0 => 'F:\\web\\www\\smarty\\senior\\023\\template\\footer.html',
      1 => 1453124710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569cec68e7af62_61966511 ($_smarty_tpl) {
?>
	<div id="footer">
		<?php
$_from = $_smarty_tpl->tpl_vars['nav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
			<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
	</div><?php }
}
