<?php
/*
 * 利用smarty做页面静态化
 * display fetch的区别
 * 
 * display() = echo fetch()
 * fetch()仅是计算出应输出结果，但是不输出，返回该结果
 * 在源码上，display调用fetch
 */
require './mysmarty.class.php';

$smarty = new MySmarty();

$smarty->assign('title', '今天是smarty结课');
//$smarty->display('027_01.html');
$html = $smarty->fetch('027_01.html');
echo $html;
?>