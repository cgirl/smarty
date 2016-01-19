<?php
/*
 * smarty高级特性篇，不推荐使用
 * 模板继承
 * 可以在父模板里，留一块{block name="xxx"}{/block}
 * 比如，在实际开发中，只知道这一块应该放广告，但具体什么广告，不由我负责，
 * 有一个专门的做广告模板的人员。
 * 
 * 这时，我们可以来个{block name="adsense"}{/block}
 * 负责的做广告模板的，来继承父模板
 * 
 * 没有继承，我们可以用include {include file="adsense.html"}
 * 
 * 注意点：
 * 1.子模板第一句，先声明继承，extends file="父模板"
 * 2.子模板的目的，只是填充父模板中预留的block，在block区域之外，写的东西
 */
require './mysmarty.class.php';

$smarty = new MySmarty();

$smarty->display('025_03.html');
?>