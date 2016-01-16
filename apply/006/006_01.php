<?php
/*
 * assgin的用法探讨
 */
header("content-type:text/html;charset=utf-8");

require '../../smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = './template';
$smarty->compile_dir = './compile';

/*
 * 这是smarty模板assign的源码
 * 如果第1个参数是数组的话，效果是把次数组的每个值，赋到相应的以键为名称的标签上去
 * public function assign($tpl_var, $value = null, $nocache = false)
    {
        if (is_array($tpl_var)) {
            foreach ($tpl_var as $_key => $_val) {
                if ($_key != '') {
                    $this->tpl_vars[$_key] = new Smarty_Variable($_val, $nocache);
                    if ($this->_objType == 2 && $this->scope) {
                        $this->ext->_updateScope->updateScope($this, $_key);
                    }
                }
            }
        } else {
            if ($tpl_var != '') {
                $this->tpl_vars[$tpl_var] = new Smarty_Variable($value, $nocache);
                if ($this->_objType == 2 && $this->scope) {
                    $this->ext->_updateScope->updateScope($this, $tpl_var);
                }
            }
        }
        return $this;
    }
 */

$user = array('name'=>'刘备', 'age'=>'28');
/*
 * 下面这句等同于：
 * $smarty->assign('name', '刘备');
 * $smarty->assign('age', '28');
 */
$smarty->assign($user);
$smarty->assign('arr', array('country'=>array('prov'=>array('city'=>'黑河'))));

//连着往某一个标签赋多个值时，我们可以用append，append是附加，追加的意思。
$smarty->assign('stu', '李四');
$smarty->assign('stu', '李五');

/*
 * 如下相当于：
 * _tpl_var['stu1'][] = '李三'
 * _tpl_var['stu1'][] = '李二'
 * 也就是，把append到一个标签里变量，都是一个数组里
 */
$smarty->append('stu1', '李三');
$smarty->append('stu1', '李二');

$smarty->display('006_01.html');

/*
 smarty赋值时，还能引用赋值
 assignByRef('title', $title);
  起到的效果是： _tpl_var['title'] = &title，引用赋值
 $a = 3;
 $b = $a;
 其实，内存里，$a,$b还是公用一份变量3；
 只能当修改$b时，如$b=4; 这时才强制$a,$b，各用各的变量值
 此处，仅供同学们了解
 */
?>