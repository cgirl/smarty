<?php
header("Content-type:text/html;charset=utf-8");

/*
 * smarty有自动加载功能，和我们商城的自动加载冲突，如何处理？
 * 
 * 以后，你使用第3方插件/库的时候，别人的库使用自动加载是正常的
 * 因此，如何协调
 */

//我们的程序有个autoload
function __autoload($class){
	//include类文件
	echo $class, '<br />';
}

//smarty的程序有个autoload，这显然不行，函数不能重定义
function __autoload($class){
}

//PHP为了能让多方各自有自己的自动加载函数，提供了spl_autoload_register()方法
//这个方法，不负责自动加载，负责注册各自加载方法

//就比如说，拉黑活的司机多，来个黑车委员会，注册一下，不产生冲突
//我们可以各写各的自动加载函数（别重名就行），到spl_autoload_register()方法里注册一下就成
?>