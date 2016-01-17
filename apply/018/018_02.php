<?php
/*
 * 单模板多缓存
 * 
 * 典型场景：为商品模板设置缓存，
 * 但是goods.php?id=n
 * 
 * 当缓存后，所有的商品页面都一样了，因为被缓存了。
 * 能否为同一个模板，生成不同的缓存文件呢？
 * 比如，根据id的不同，来生成各个商品的缓存页面。
 * 
 * 答：可以，用到“单模板多缓存”。
 * 原理：是生成缓存的时候，可以再传一个缓存id，如果id不同，
 * 生成的缓存文件则不同。
 * 
 * 你的哪些参数，要影响页面的内容，就需要把那些参数，当成“缓存id”，比如：page=3&cat=4
 * 第4栏目的第3页，那么page和cat都要影响结果，这2个参数都要写进缓存id才可以，将这2个参数按
 * 某种规则生成一个缓存id。
 */
header("content-type:text/html;charset=utf-8");
require './mysmarty.class.php' ;

/*
 * 根据地址栏的goods_id，来获取商品的信息
 */
$smarty = new MySmarty();

//开启缓存
$smarty->caching = true;

//设置一个缓存的生命周期
$smarty->cache_lifetime = 3600;

//设置缓存目录，用于存储缓存文件
$smarty->cache_dir = './cache';

$goods_id = $_GET['goods_id']+0;

//有时出于调试目的，临时不让缓存，但又不想修改主代码，则可以加1个选项
$smarty->force_cache = true;

if (!$smarty->isCached('018_01.html', $goods_id)){
	$conn = mysql_connect('localhost', 'root', '123456');
	mysql_query('set names utf8');
	mysql_query('use ecshop');
		
	$sql = 'select goods_id, goods_name, shop_price from ecs_goods where goods_id='.$goods_id;
	$rs = mysql_query($sql, $conn);
	$goods = mysql_fetch_assoc($rs);
	
	$smarty->assign($goods);
	
	echo '走了数据库';
}

$smarty->display('018_01.html', $goods_id);
?>