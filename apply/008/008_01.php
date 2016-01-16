<?php
/*
 * 用对象继承来统一完成smarty的配置
 */
header("content-type:text/html;charset=utf-8");

require './mysmarty.class.php';

//new的是mysmarty类，而mysmarty类中已经把相关属性配置完毕了
//所以得到的对象本身就是配置好的
$smarty = new MySmarty();

class Human{
	public $name = '张三';
	public $age = '28';

	public function say(){
		return "你好，smarty";
	}
}

//print_r($smarty);exit;
$man = new Human();
$smarty->assign('man', $man);
$smarty->display('008_01.html');
