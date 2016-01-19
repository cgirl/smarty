<?php
/*
 * 自定义变量调节器
 * 写一个调节字符颜色的变量调节器
 * {$title|modcolor:"red"}
 * 
 * 1.观察官方调节器的写法及命名特点
 */
require './mysmarty.class.php';

$smarty = new MySmarty();

$smarty->assign('title', "天气晴朗");
$smarty->display("026_01.html")
?>