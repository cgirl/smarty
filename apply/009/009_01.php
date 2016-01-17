<?php
/*
 * 模板中的标签，是否只能原样输出呢？
 * 答：不是，标签是可以参与运算的
 */
header("content-type:text/html;charset=utf-8");

require './mysmarty.class.php';

$smarty = new MySmarty();

$smarty->assign('age', 18);
$smarty->assign('sub', 2);//夫妻之间差两岁最好

$smarty->display('009_01.html');
?>