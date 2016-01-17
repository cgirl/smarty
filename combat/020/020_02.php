<?php
header("Content-type:text/html;charset=utf-8");

/*
function __autoload($class){
	include './'.$class.'.class.php';
}

$m = new man();

至此，你自动加载好用了，下一个人写的插件，也想自动加载，怎么办，__autoload被你占用了。
*/

function autoMan($class){
	echo 'autoMan';
	include './'.$class.'.class.php';
}

function autoSmarty($class){
	echo 'autoSmarty';
	include './'.$class.'.php';
}

spl_autoload_register('autoMan');//把autoMan注册成一个自动加载函数
spl_autoload_register('autoSmarty');

//$m = new man();
$w = new woman();
print_r($w);

/*
 * 从上面的例子可以说明
 * 可以注册多个自动加载函数，如果注册了 多个，则按先后顺序执行，试图找到需要的类
 * 因此，上面的打印结果是autoMan，然后是autoSmarty，最后打印women对象成功
 * 
 * spl_autoload_register('函数1')
 * 这个函数优先级比__autoload高，把__autoload给覆盖掉了
 * 这就是引入是smarty后，GoodModel找不到的原因！
 * 
 * 解决办法：
 * 把我们的__autoload换个名字，然后注册一下，这样和smarty的自动加载平级，共同作用
 */


?>