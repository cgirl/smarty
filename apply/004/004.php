<?php
/*
 * smarty流程：
 * 1.引入smarty
 * 2.实例化
 * 3.配置模板目录和编译目录
 */
//下面页面虽然简单，但是是smarty的典型使用流程

//引入smarty
require '../../smarty-3.1.29/libs/Smarty.class.php';

//实例化
$smarty = new Smarty();
//print_r($smarty);

//配置
$smarty->template_dir = './template';
$smarty->compile_dir = './compile';

//赋值
$smarty->assign('title', "两会召开中");
$smarty->assign('content', "提案特别多");

$smarty->display('./template/004.html');

/*看到第18分钟*/
?>