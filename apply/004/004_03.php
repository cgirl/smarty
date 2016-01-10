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

//配置smarty的左右定界符
/* 方法一
$smarty->left_delimiter = '{>';
$smarty->right_delimiter = '<}'; */

//从数据库取出会员信息，往往是数组形式
$gy = array(0=>'关羽', 'age'=>'25', 'weapon'=>'青龙偃月刀');
$smarty->assign('gy', $gy);

$smarty->display('./004_03.html');
?>