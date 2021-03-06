<?php
/*
 * smarty高级特性篇，不推荐使用
 * 
 * 数据对象
 * 模板继承
 * 对象注册，自己写个变量调节器
 * 利用smarty生成静态页面
 */
require './mysmarty.class.php';

$smarty = new MySmarty();

$nav_top = array('首页', '商城', '文章');
$nav_footer = array('友链', '备案');

/*
 * header,footer里，都有nav标签，出问题了
 * $smarty->assign('nav', $nav_top);
 * $smarty->assign('nav', $nav_footer);
 */

/*
 * smarty3引入一种新的额概念，叫做数据对象。
 * 数据对象，就是一个装数据用的框
 * 
 * 我们靠2个数据对象，把2个数据对象里，各赋值一个nav，2个nav互不干扰。
 */
//创建一个数据对象
$h_data = $smarty->createData();
//print_r($h_data);

//在创建一个数据对象
$f_data = $smarty->createData();

//把头部的数据，赋给h_data
$h_data->assign('nav', $nav_top);

//把尾部的数据，赋给专门的尾部数据对象$f_data
$f_data->assign('nav', $nav_footer);

/*
 * 不用数据对象，所有的数据都装在smarty对象里，就像所有的人都坐在一个
 * 教室，重名了就冲突了
 * 
 * 数据对象，就是把学员分成几个小组，不同小组之间，有学员重名，没有关系
 */
//display时，要声明，这次你使用，哪个数据对象
$smarty->display('header.html', $h_data); //display，碰到标签，到$h_data里去找数据
$smarty->display('023_01.html');
$smarty->display('footer.html', $f_data);
?>