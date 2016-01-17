<?php
/*
 * {foreach}可以做到任何{section}做到的功能，而且更简洁和有更清晰的语法，
 * 一般更推荐使用{foreach}语法
 */
header("content-type:text/html;charset=utf-8");
require './mysmarty.class.php';

$conn = mysql_connect('localhost', 'root', '123456');
mysql_query('set names utf8', $conn);
mysql_query('use ecshop', $conn);

$sql = 'select goods_id, goods_name, shop_price from ecs_goods order by goods_id limit 5';
$rs = mysql_query($sql, $conn);

$goods = array();
while ($row = mysql_fetch_assoc($rs)){
	$goods[] = $row;
}

//把数组赋值给smarty
$smarty = new MySmarty();
$smarty->assign('goods', $goods);

$smarty->assign('age', 7);

$smarty->display('013_01.html');
?>