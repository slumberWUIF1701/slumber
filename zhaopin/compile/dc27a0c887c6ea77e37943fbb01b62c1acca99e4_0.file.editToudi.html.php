<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:12:27
  from "D:\wamp\www\zhaopin\template\admin\editToudi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59619f1b8cd178_35198542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc27a0c887c6ea77e37943fbb01b62c1acca99e4' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editToudi.html',
      1 => 1499569946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59619f1b8cd178_35198542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?d=admin&f=jianli&a=gaiStatus" method="post">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    简历未查看：<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> checked <?php }?>> <br>
    查看中：<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> checked <?php }?>> <br>
    未通过：<input type="radio" name="status" value="2" <?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {?> checked <?php }?>> <br>
    面试中：<input type="radio" name="status" value="3" <?php if ($_smarty_tpl->tpl_vars['status']->value == 3) {?> checked <?php }?>> <br>
    恭喜，面试通过：<input type="radio" name="status" value="4" <?php if ($_smarty_tpl->tpl_vars['status']->value == 4) {?> checked <?php }?>> <br>
    很遗憾，面试未通过：<input type="radio" name="status" value="5" <?php if ($_smarty_tpl->tpl_vars['status']->value == 5) {?> checked <?php }?>> <br>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
