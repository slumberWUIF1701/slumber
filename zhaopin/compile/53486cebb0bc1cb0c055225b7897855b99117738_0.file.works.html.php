<?php
/* Smarty version 3.1.30, created on 2017-07-09 03:42:38
  from "D:\wamp\www\zhaopin\template\admin\works.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59618a0eb3e309_23415017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53486cebb0bc1cb0c055225b7897855b99117738' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\works.html',
      1 => 1499564557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59618a0eb3e309_23415017 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    td{
        width:200px;
        height:auto;
        text-align: center;
    }
    img{
        width:80%;
    }
</style>
<body>
<table>
    <tr>
        <th>用户名</th>
        <th>作品名</th>
        <th>作品</th>
        <th>是否通过</th>
        <th>编辑</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wtitle'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['isshow'];?>
</td>
        <td>
            <a href="index.php?d=admin&f=works&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">删除</a>
            <a href="index.php?d=admin&f=works&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>


</body>
</html><?php }
}
