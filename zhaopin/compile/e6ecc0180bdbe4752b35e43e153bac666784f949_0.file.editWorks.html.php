<?php
/* Smarty version 3.1.30, created on 2017-07-09 03:46:12
  from "D:\wamp\www\zhaopin\template\admin\editWorks.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59618ae453c898_72669419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6ecc0180bdbe4752b35e43e153bac666784f949' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editWorks.html',
      1 => 1499564769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59618ae453c898_72669419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<body>
<form action="index.php?d=admin&f=works&a=gaiStatus" method="post">
    <input type="hidden" name="wid" value="<?php echo $_smarty_tpl->tpl_vars['wid']->value;?>
">
   作品未通过：<input type="radio" name="isshow" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> checked <?php }?>> <br>
    通过：<input type="radio" name="isshow" value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> checked <?php }?>> <br>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
