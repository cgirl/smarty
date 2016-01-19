<?php
/*
 * 利用fetch做静态化及原理
 * 
 * fetch原理，fetch是如何知道这一页的输出内容的
 * 答：利用缓冲区
 * 一般情况，PHP echo a,b,c---输出给---apache
 * 建议缓冲区后，内容输出到缓冲区
 * 我们在php最后，读缓冲区，就是本页面的输出内容
 * 
 * 打开缓冲区，ob_start();
 * 读取缓冲区的内容，ob_get_content();
 * 清空缓冲区：ob_clean()
 * 
 * 连读带清空，ob_get_clean()
 */
if(file_exists('./template/028_02.html')){
	header('location: ./template/028_02.html');
	exit;
}

ob_start();
echo 'a<br />';
echo 'b<br />';
echo 'c<br />';

$html = ob_get_contents();
ob_clean();

file_put_contents('./template/028_02.html', $html);
//echo $html;

//有10w篇文章，静态化如何做？
?>