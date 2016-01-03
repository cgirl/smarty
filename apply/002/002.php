<?php
header("Content-Type:text/html;charset=utf-8");

/**
 * smarty的应用场景
 * 看如下代码，是刚学习PHP时，常见的写作方式：
 * 即：
 * 1）php代码连接数据库
 * 2）php取出数据
 * 3）php和html代码混合在一起
 */

/*
 * 在比较大的团队中，分工比较细，如下html代码，是由专门的前端来做的，php人员把html代码
 * 加上php代码，形成的动态网页。
 * 
 * 有一天，需要修改html代码。由于html代码和php代码混杂在一起，前端不会修改了，
 * 让php程序员来修改，而php程序员又不太懂html代码。这样修改起来就不方便
 * 
 * 解决方案请见 002_01.php和002_tmp.html
 */
?>

<?php 
header("Content-type:text/html;charset=utf-8");
/*
 * 模拟数据库
 * $conn = mysql_connect();
 * $sql = select * from ...
 */
$title = '两会召开';
$content = '好会议，好房子，好奶粉';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $title?></title>
</head>
<body>
	<?php echo "<p>".$content."</p>"?>
</body>
</html>