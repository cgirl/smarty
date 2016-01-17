<?php
/*
 * 缓存：smarty的一个重要概念
 * 
 * 缓存是什么意思？
 * 就是把页面内容保存在磁盘上，下次访问相同的页面，直接返回保存的内容，
 * 减轻了数据库的压力
 */
header("content-type:text/html;charset=utf-8");
require './mysmarty.class.php' ;

/*
 * 思考：如下数据，短期内不会变了，比如1小时很少变化，而1小时内却有上千位用户访问，
 * 那么，这1000次，每次都是同样的内容，但是访问了数据库1000次，这时就产生了性能上的浪费
 * 
 * smarty缓存的用法：
 * 1.开启
 * 2.配置缓存的生命周期
 * 3.判断是否缓存并是否从数据库取数据
 * 4.输出
 */
$smarty = new MySmarty();

//开启缓存
$smarty->caching = true;

//设置一个缓存的生命周期
$smarty->cache_lifetime = 3600;

//设置缓存目录，用于存储缓存文件
$smarty->cache_dir = './cache';

//判断015_01.html运行的内同有没有缓存起来
if (!$smarty->isCached('016_01.html')){
	$conn = mysql_connect('localhost', 'root', '123456');
	mysql_query('set names utf8');
	mysql_query('use ecshop');
	
	$sql = 'select goods_id, goods_name, shop_price from ecs_goods order by goods_id limit 5';
	$rs = mysql_query($sql, $conn);
	
	$goods = array();
	while ($row = mysql_fetch_assoc($rs)){
		$goods[] = $row;
	}
	
	echo '我走了数据库';
	
	$smarty->assign('goods', $goods);
}

$time = time();
$smarty->assign('time1', $time);
$smarty->assign('time2', $time, true);//第3个参数是nocache，true代表不缓存

function insert_welcome($param, $smarty){
	return '您好'.rand(1000, 9999).'age='.$param['age'];
}

$smarty->display('016_01.html');
?>