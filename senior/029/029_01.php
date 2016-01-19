<?php
/*
 * 几种模板引擎的比较
 * 
 * 所有模板的共性：解析标签，解析成PHP
 * 
 * 按照标签解析的方式分类
 * 1.最多的就是正则替换
 *   如：smarty2系统，smarttemplate，fasttemplate
 *   quickskin是一个轻量级的模板，1个文件，建议大家研究
 * 2.通过字符串函数来解析
 *   如 dede的模板类，还有一个国外的phptemplate，在网上已经找不到了
 *   
 * 按照变量的存储来分类
 * 1.最多的都是通过assign，把变量再次装载到模板对象里
 *   smarty，tinkphp的模板，也是如此
 * 2.也有不装载到模板对象，只把模板解析出来，再包含到模板
 *   如discuz的模板，把模板解析后，只返回模板的路径，你再手动包含
 *   好处是，省了变量assign的过程，速度更快，粗糙爆力
 *   
 *   discuz常见这种方式
 *   include template('xx.html');
 *   这是因为，template只负责把模板编译成.php，并返回编译成的文件路径
 *   
 *   由页面在全局内include包含
 *   
 *   按照语言来分
 *   绝大多数是用PHP写的
 *   还有用C语言以扩展形式写的模板引擎 Blitz
 *   
 *   最后，Smarty3不是用正则，也是用字符串函数来编译的模板，用到了编译原理，用到词法分析器，
 *   语法分析器来编译的
 *   （对于PHP来说，不是一个号的选择，调用函数太深，太多，速度慢）
 */
class Mini{
	protected $ld = '{';
	protected $rd = '}';
	
	protected $rlen = 1;
	
	public function __construct(){
		$this->rlen = strlen($this->rd);
	}
	protected $tags = array(); //装载分析到的标签
	
	public function parse($file){
		$cont = file_get_contents('./template/'.$file);
		$offset = 0;
		
		while(($poss = strpos($cont, $this->ld, $offset)) != false){
			$pose = strpos($cont, $this->rd, $poss);
			
			$this->tags[] = substr($cont, $poss, $pose-$poss+$this->rlen);
			
			$offset = $pose+$this->rlen;
		}
		
		return $this->tags;
	}
}

$mini = new Mini();
print_r($mini->parse('029_01.html'));
?>