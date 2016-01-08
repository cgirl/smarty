<?php
header("Content-Type:text/html;charset=utf-8");

//迷你模板类
/*
 * 模板类的第一步：
 * 把标签解析成PHP输出语句，模板文件->PHP文件
 * 为了目录清晰，我们把模板和编译后的结果放在不同的目录里，用2个属性来标记这两个目录
 * 
 */

class mini{
	public $template_dir = ''; //模板文件所在的位置
	public $compile_dir = '';  //模板编译后存放的位置
	
	//定义一个数组，用来接收外部的数据
	public $_tpl_var = array();
	
	/*
	 * string $tempile 模板文件名
	 * return string
	 * 
	 * 把指定的模板内容读过来，在编译成PHP
	 */
	public function compile($template){
		//读出模板内容
		$temp = $this->template_dir.'/'.$template;
		$source = file_get_contents($temp);
		//echo $source;
		
		//将编译后的内容保存成.php文件
		$compile = $this->compile_dir.'/'.$template.'.php';
		
		//判断模板是否已经存在
		if(file_exists($compile) && filetime($temp)<filetime($compile)){
			return $compile;
		}
		
		//替换模板内容
		$source = str_replace('{$', '<?php echo $this->_tpl_var[\'', $source);
		$source = str_replace('}', '\'];?>', $source);
		//echo $source;
		
		file_put_contents($compile, $source);
		
		return $compile;
	}
	
	/**
	 * @param string $template 模板名
	 * 作用：调用compile来编译模板，并自动引入
	 */
	public function display($template){
		$comp = $this->compile($template);
		include($comp);
	}
	
	public function assign($key, $value){
		$this->_tpl_var[$key] = $value;
	}
}
?>