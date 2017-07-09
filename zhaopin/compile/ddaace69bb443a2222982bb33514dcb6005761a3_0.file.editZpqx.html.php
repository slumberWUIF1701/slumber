<?php
/* Smarty version 3.1.30, created on 2017-07-08 18:10:42
  from "D:\wamp\www\zhaopin\template\admin\editZpqx.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596104024dcfd5_73367271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddaace69bb443a2222982bb33514dcb6005761a3' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editZpqx.html',
      1 => 1499530226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596104024dcfd5_73367271 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?d=admin&f=editzp&a=gaiStatus" method="post">
    <input type="hidden" name="zid" value="<?php echo $_smarty_tpl->tpl_vars['zid']->value;?>
">
    招聘信息未通过：<input type="radio" name="isshow" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> checked <?php }?>> <br>
    通过：<input type="radio" name="isshow" value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> checked <?php }?>> <br>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
