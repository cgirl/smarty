<?php
/* Smarty version 3.1.29, created on 2016-01-17 19:29:19
  from "F:\web\www\smarty\apply\016\template\016_01.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => true,
  'version' => '3.1.29',
  'unifunc' => 'content_569b7b0fef85a9_59962223',
  'file_dependency' => 
  array (
    'bbcd0f5bfe3d4a0eba671a6150e1eb0b94a858b0' => 
    array (
      0 => 'F:\\web\\www\\smarty\\apply\\016\\template\\016_01.html',
      1 => 1453030153,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_569b7b0fef85a9_59962223 ($_smarty_tpl) {
$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\web\\www\\smarty\\smarty-3.1.29\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
		4.{insert name="xxx" param1="v1" param="v2"}这个方式来写
		  原理是，调用insert_xxx(array(param1="v1", param2="v2"))的返回值，来显示的
		
		注意：不存换的标签，要保证总能从php处获得数据
	</pre>
	
	<h2>当前时间2016-01-17 19:29:19</h2>
	<h2>当前时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H:%M:%S");?>
</h2>
	
	<h2>当前时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H:%M:%S");?>
</h2>
	<h2>当前时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H:%M:%S");?>
</h2>
	
	<h2>当前时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time2']->value,"%Y-%m-%d %H:%M:%S");?>
</h2>
	
	<p><?php echo insert_welcome(array (
  'age' => 28,
),$_smarty_tpl);?></p>
	<table border="1">
		<tr><th>序号</th><th>商品名</th><th>商品价格</th></tr>
				<tr>
			<td>1</td>
			<td>贝尔莱德（SALAV）GS17-BJ立体挂式蒸汽熨斗</td>
			<td>399.99</td>
		</tr>
				<tr>
			<td>2</td>
			<td>森海塞尔（Sennheiser） IE8i 入耳式苹果手机通话耳机 黑色</td>
			<td>150.00</td>
		</tr>
				<tr>
			<td>3</td>
			<td>JBL MS202 USB/CD播放机 FM收音机 蓝牙 迷你组合音响 幻影黑</td>
			<td>150.00</td>
		</tr>
				<tr>
			<td>4</td>
			<td>哈曼卡顿（Harman/Kardon）AURA翡翠WiFi/蓝牙音响水晶音箱 黑色</td>
			<td>500.00</td>
		</tr>
				<tr>
			<td>5</td>
			<td>Infinity One 蓝牙迷你音响</td>
			<td>150.00</td>
		</tr>
			</table>
</body>
</html><?php }
}
