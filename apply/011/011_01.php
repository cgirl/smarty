<?php
/*
 * 可不可以控制循环语句？
 * 答：可以
 * for while（smarty3新增的）
 * foreach section
 * section功能多，配置选项多，原理和foreach一样，在开发中用foreach基本可以满足绝大多数循环情况
 */
header("content-type:text/html;charset=utf-8");

require './mysmarty.class.php';

$smarty = new MySmarty();

//来个for循环，输出1到10
$smarty->assign('start', 1);
$smarty->assign('end', 9);

$smarty->display('011_01.html');
?>