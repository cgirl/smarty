<?php
/*
 * 用对象继承来统一完成smarty的配置
 * 注：MySmarty里，不能通过直接重写template_dir和compile_dir属性来实现配置，
 *    因为这2个属性在父类里是私有的，无法重写（即被父亲封装了）
 *    但可以利用开放的接口，setTemplateDir()和setCompileDir()来实现
 */
header("content-type:text/html;charset=utf-8");

require '../../smarty-3.1.29/libs/Smarty.class.php';

class MySmarty extends Smarty{
	public function __construct(){
		parent::__construct();
		$this->setTemplateDir('./template');
		$this->setCompileDir('./compile');
	}
}

?>