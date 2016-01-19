<?php
header("content-type:text/html;charset=utf-8");

$caidan='';
function get_cate($datas, $level=0, $pid=0){
	 foreach($datas as $k=>$v){
		if ($v[2]==$pid) {
			global $caidan;
			$caidan .= str_repeat('-', $level).$v[1].'<br />';
			get_cate($datas, $level+1, $v[0]);
		}
	}
}

$area=array(
		array(1,'男人世界',0),
		array(2,'女人天堂',0),
		array(3,'服装',1),
		array(4,'男士西装',3),
		array(5,'电子',0),
		array(6,'手机',5),
		array(7,'手机充电器',6),
		array(8,'华为',5),
		array(9,'荣耀P7',8),
		array(10,'化妆品',2),
		array(11,'洗面奶',10),
		array(12,'apple',6)
);

get_cate($area);

echo $caidan;
?>