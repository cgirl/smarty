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

//从数据库取出会员信息，往往是数组形式
$user = array('name'=>'刘备', 'age'=>'28', 'weapon'=>'双剑');

$smarty->assign('name', $user['name']);
$smarty->assign('age', $user['age']);
$smarty->assign('weapon', $user['weapon']);

$zf = array('name'=>'张飞', 'age'=>'25', 'weapon'=>'丈八蛇矛');
$smarty->assign('zf', $zf);

$gy = array(0=>'关羽', 'age'=>'25', 'weapon'=>'青龙偃月刀');
$smarty->assign('gy', $gy);

/*
 * 总结：smarty可以赋值字符串，数字等值，也可以赋给标签一个“数组”
 * 
 * 在模板里，解析数组时，用{$标签.key}或者用{$标签[index]}
 */
$smarty->display('./004_02.html');
?>