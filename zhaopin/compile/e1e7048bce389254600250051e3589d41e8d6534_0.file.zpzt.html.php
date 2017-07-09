<?php
/* Smarty version 3.1.30, created on 2017-07-08 18:22:30
  from "D:\wamp\www\zhaopin\template\admin\zpzt.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596106c6766177_66924989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e7048bce389254600250051e3589d41e8d6534' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\zpzt.html',
      1 => 1499530792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596106c6766177_66924989 (Smarty_Internal_Template $_smarty_tpl) {
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
</style>
<body>
<table>
    <tr>
        <th>Hr名字</th>
        <th>公司</th>
        <th>联系方式</th>
        <th>招聘职位</th>
        <th>学历</th>
        <th>工作经验</th>
        <th>是否通过</th>
        <th>编辑</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['hrname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cpname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xueli'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jingyan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['isshow'];?>
</td>
        <td>
            <a href="index.php?d=admin&f=editzp&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
">删除</a>
            <a href="index.php?d=admin&f=editzp&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
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
