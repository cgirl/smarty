<?php
/**
 * 如果不换，就用php行不行？
 * 答：不仅行，而且行，好处是原生的php输出，不用解析标签，速度更快
 * 很多的知名程序就是这样做的，如wordpress，CI框架
 * 
 * 那为什么还要学习smarty呢？
 * 答：
 * 1）我们可以不用smarty，但肯定少不了用模板，例如，你可能不开宝马，但是必定要开车。
 * 因为模板用的也非常广泛，比如ecshop用的改进后的smarty模板；
 * ThinkPHP用的自己写的模板，dedeCMS用的事自己的模板，在工作中未必会用smarty模板，但是肯定
 * 会用模板，而学了smarty之后，其他模板原理类似。
 * 2）当然找工作也是需要的
 * 3）体会模板的思想，争取自己能写模板
 * 
 * smarty的2个大版本3和2.6
 * smarty3是纯面向对象的写作风格，我们学习以最新的smarty3.1.13来学习
 */

header("Content-type:text/html;charset=utf-8");
/*
 * 模拟数据库
 * $conn = mysql_connect();
 * $sql = select * from ...
 */
$title = '两会召开';
$content = '好会议，好房子，好奶粉';

include './002_02.html';
/*
 * 上面的显示显然不正常，{$content}直接显示出来了，没有解析成数据，接下来我们自己写一个迷你
 * 模板类，来解决这个问题
 */
?>