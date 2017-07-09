<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:18:15
  from "D:\wamp\www\zhaopin\template\admin\jianli.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a0775e3e57_62339196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe06566d4e47065eed546281d12651b3daec91d' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\jianli.html',
      1 => 1499570293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a0775e3e57_62339196 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>招聘职位</th>
        <th>应聘者姓名</th>
        <th>联系方式</th>
        <th>求职意向</th>
        <th>期望薪资</th>
        <th>自我评价</th>
        <th>是否通过(0:未查看,1:查看中,2:未通过,3:面试,4:恭喜,5:遗憾)</th>
        <th>编辑</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['yixiang'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['money'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pingjia'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
        <td>
            <a href="index.php?d=admin&f=jianli&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
            <a href="index.php?d=admin&f=jianli&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
