<?php
header("Content-Type:text/html;charset=utf-8");

include './mini.php';

$mini = new mini();
$mini->template_dir = './templates';
$mini->compile_dir = './compile';

$title = '两会召开';
$content = '好会议，好房子，好奶粉';

//echo $mini->compile("003.html");
//include ($mini->compile("003.html"));

/*
 * 至此，这个模板太简单了，只能帮忙翻译，还得自己include进来翻译后的文件，
 * 我看smarty，display就把翻译和引入的工作都完成了，我们能否也这样？
 * 
 * 答：当然可以
 */
$mini->assign('title', $title);
$mini->assign('content', $content);
$mini->display('003.html');

/*
 * smarty的工作流程：
 * 1.把需要显示的全局变量，赋值，塞到对象内部的属性上，一个数组里
 * 2.编译模板，把（$标签），解析成相应的php echo代码
 * 3.引入编译后的php文件
 * 
 * 使用smarty的步骤：
 * 1.smarty是一个类，要使用，需先引入并实例化
 * 2.assign赋值
 * 3.display[编译到输出]
 * 
 * smarty之辩：
 * 1.编译模板，浪费时间
 * 2.要把变量重新赋值到对象的属性上，增大的开销
 * 3.
 */
?>