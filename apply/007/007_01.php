<?php
/*
 * 今天学习内容：
 * 1.smarty能赋数组，能否赋对象呢？
 * 2.昨天的学习中，我们总是要反复配置smarty模板的template_dir等选项，能否简化？
 * 3.模板里用标签引用一个变量，还能否进行运行和修改？
 * 4.php中能分支、循环，模板中能不能？
 */
header("content-type:text/html;charset=utf-8");

require '../../smarty-3.1.29/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = './template';
$smarty->compile_dir = './compile';

class Human{
	public $name = '张三';
	public $age = '28';
	
	public function say(){
		return "你好，smarty";
	}
}

$man = new Human();
$smarty->assign('man', $man);
$smarty->display('007_01.html');

?>