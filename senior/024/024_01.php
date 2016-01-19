<?php
/*
 * smarty高级特性篇，不推荐使用
 * 对象注册
 */
require './mysmarty.class.php';

$smarty = new MySmarty();
class user{
	public $name = '李四';
	public $age = '28';
	
	public function say(){
		return '你好，我叫'.$this->name;
	}
	
	public function modPass(){
		return '修改密码成功';
	}
}

$lisi = new user();
//$smarty->assign('lisi', $lisi);
//$smarty->display('024_01.html');
/*
 * 问题：在模板里，smarty标签是允许调用对象的方法的，即：
 * modPass方法有可能会被无意或者恶意调用
 * 
 * 我们可以用对象注册的方式来限制
 */
//assign对象，不用了，改为注册方式
$smarty->registerObject('lisi', $lisi, array('say', 'name', 'age'));
$smarty->display('024_02.html');
?>