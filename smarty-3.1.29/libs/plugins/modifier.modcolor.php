<?php
/*
 * smarty plugin modcolor
 */
//第1个参数，是smarty自动传给你的，即待调节的变量
//后面的参数，是在模板里传过去的
function Smarty_modifier_modcolor($string, $color){
	return '<font color="'.$color.'">'.$string.'</font>';
}
?>