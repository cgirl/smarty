<?php
/*
 * 模板中的标签，是否可以进行if else判断？
 * 答：可以
 * 模板中使用逻辑判断的思考：
 * 从分工角度看，模板不应该负责逻辑判断，那么为什么还用逻辑判断呢？
 * 答：有时，在模板上进行逻辑判断，可以极大的简化工作。
 * 比如：会员分普通会员，VIP会员，在页面右上角显示不同的提示，如果用模板做逻辑判断，
 * {if $vip}
 * 	显示VIP会员信息
 * {else}
 * 	显示普通会员信息
 * {/if}
 * 如果模板不支持，那我们只好准备2套，一套vip，一套普通的，而这2套模板，大部分都一样
 * 只有右上角那一点区别，也不方便
 */
header("content-type:text/html;charset=utf-8");

require './mysmarty.class.php';

$smarty = new MySmarty();

$smarty->assign('price', 9999);
$smarty->assign(array('name'=>'哈法', 'height'=>180, 'house'=>'180'));

$smarty->display('010_01.html');
?>