<?php
/**
 * 在本页面，解决html和php代码混杂的问题
 * 此时，002_01.html里的php，只负责echo，且只负责echo数据
 * 因此，可以说，我们已经完成了业务（读取数据，操作数据的过程）与表现（html布局，css）分离
 * 即controller与view的分离。
 * 
 * 如果你看着模板里的<?php 标签还不舒服，可以使用smarty进一步分离
 * 
 * 解决方案请见 002_02.html 和 002_02.php
 * 此时，将<?php echo 这种代码换成{}形式
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

include './002_01.html';
?>