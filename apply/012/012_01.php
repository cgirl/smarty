<?php
/*
 * foreach循环
 * 典型场景：二维数组的循环，如新闻列表，会员列表，商品列表等等
 * 
 * 我们从数据库取出若干条商品，并且来循环商品
 * 
 * 大的流程：
 * 连接数据库，取得商品数组，把数组赋值给smarty，
 * smarty把数据展示到模板，模板中的标签进行循环
 */
header("content-type:text/html;charset=utf-8");
require './mysmarty.class.php';

$conn = mysql_connect('localhost', 'root', '123456');
mysql_query('set names utf8', $conn);
mysql_query('use ecshop', $conn);

$sql = 'select goods_id, goods_name, shop_price from ecs_goods limit 5';
$rs = mysql_query($sql, $conn);

$goods = array();
while ($row = mysql_fetch_assoc($rs)){
	$goods[] = $row;
}

//把数组赋值给smarty
$smarty = new MySmarty();
$smarty->assign('goods', $goods);

$smarty->display('012_01.html');
?>