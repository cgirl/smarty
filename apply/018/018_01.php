<?php
/*
 * smarty缓存删除
 */
header("content-type:text/html;charset=utf-8");
require './mysmarty.class.php' ;

/*
 * 根据地址栏的goods_id，来获取商品的信息
 */
$smarty = new MySmarty();

//给两个参数，第一个数模板名，第二个数缓存id
//如果只指定模板名，不指定缓存id，则该模板对应的所有缓存都会被删除
//$smarty->clearCache('018_01.html');

//也可以在删除缓存的时候，传缓存id，删除指定的缓存文件
$goods_id = $_GET['goods_id'];
$smarty->clearCache('018_01.html', $goods_id);
echo '删除'.$goods_id.'号商品缓存成功';
?>