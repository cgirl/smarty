<?php
/*
 * 接下来，学习smarty标签变量的来源
 * 
 * 在模板中，{$title}则说明{$title}标签被assign赋过值，因此能显示；
 * 思考：smarty的标题变量对象的来源，除了assign，还有哪些？
 * 
 * 答：smarty标签变量，来源于3个部分：
 * 1.php中assign分配的变量
 * 2.smarty系统保存变量
 * 3.从配置文件读取到的配置变量
 */

//引入smarty
require '../../smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = './template';
$smarty->compile_dir = './compile';

//3种变量来源，之assign赋值
$smarty->assign('name', '罗隐');
$smarty->assign('poen', '我未成名君未嫁，可能俱是不如人');

//3种来源之系统保留变量，不用赋值，自动获取
/*当$smarty.开头的标签，当成系统变量来解析，如$smarty.get.id被解析成：
<?php echo $_GET['id']; ?>
保留变量：$smarty.post, $smarty.session, $smarty.cookies
*/
$smarty->assign('id', $_GET['id']);
define('ZMLM', 8846);

//3种变量来源之 配置文件中的配置变量
/*
 * 有些数据，如网站底部的电话信息，不想从数据库读取，可以写到配置文件里，模板能读出配置文件的配置选项来
 * 1.配置文件一般以.conf做后缀
 * 2.配置文件的写法是
 *   选项1 值1
 *   选项2 值2
 * 3.配置smarty的config_dir，并把配置文件放在该目录下
 */
$smarty->config_dir = './config';
$smarty->display('./template/005_01.html');
?>