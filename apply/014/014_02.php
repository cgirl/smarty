<?php
/*
 * 1.调节器，格式化时间戳，转换大小写等，可以在php中进行，也可以在模板中进行，
 * 比较适宜在模板中进行
 * 
 * 2.刚才用smarty在模板中控制隔行变色，也可以用js控制，比较适宜在js里来控制
 * 
 * 这体现了一个原则：
 * 业务与显示的分离，尽量分离；
 * php就负责判断条件，并取出数据来；
 * 显示的操作应该尽量往前移：Mysql->PHP->模板->js
 * 
 * 比如，以时间戳为例：
 * 1）一个网站，有中英两个版本，如果为了方便，直接在mysql里显示：2016-03-07
 * 以后想在页面上更改麻烦了，影响面太广；
 * 2）如果存时间戳，在php中处理成什么样式均可以，如2016/03/07 03/07/2016
 * 影响中英两个版本的网站
 * 3）如果放在模本中处理，中文模板则date_format成2016/03/07，英文模板则
 * date_format成03/07/2016
 * 
 * 后台的数据应尽量“原始”，不要带有样式，格式，显示的工作，尽量靠前
 */
header("content-type:text/html;charset=utf-8");
require './mysmarty.class.php';

$conn = mysql_connect('localhost', 'root', '123456');
mysql_query('set names utf8', $conn);
mysql_query('use ecshop', $conn);

$sql = 'select goods_id, goods_name, shop_price, add_time from ecs_goods order by goods_id limit 5';
$rs = mysql_query($sql, $conn);

$goods = array();
while ($row = mysql_fetch_assoc($rs)){
	$goods[] = $row;
}

//把数组赋值给smarty
$smarty = new MySmarty();
$smarty->assign('goods', $goods);

$smarty->assign('poen', 'This IS BEIjING,HAhA');

$smarty->display('014_01.html');
?>