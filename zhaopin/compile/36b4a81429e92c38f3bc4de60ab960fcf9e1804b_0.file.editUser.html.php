<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:42:23
  from "D:\wamp\www\zhaopin\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a61f5f7e07_60157539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b4a81429e92c38f3bc4de60ab960fcf9e1804b' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editUser.html',
      1 => 1499571741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a61f5f7e07_60157539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>
</head>
<body>
    <form action="index.php?d=admin&f=user&a=editUser" method="post">
        <!--用户名：-->
        <!--<input type="text"  value="" name="user">-->
        <!--密码：-->
        <!--<input type="password" name="pass">-->
        上传头像：
        <input type="hidden" name="imgurl">
        <div class="uploadbox"></div>

        性别：
        <label>男: <input type="radio" <?php if ($_smarty_tpl->tpl_vars['sex']->value['sex'] == "男") {?> checked <?php }?> name="sex" value="男"></label>
        <label>女: <input type="radio" <?php if ($_smarty_tpl->tpl_vars['sex']->value['sex'] == "女") {?> checked <?php }?> name="sex" value="女"></label><br>
        <input type="submit" value="提交">
    </form>
    <?php echo '<script'; ?>
>
//        var ue = UE.getEditor('editor');


        var obj = new upload();
        obj.size = 1024 * 1024 * 8.6;
        obj.selectBtnStyle.background = "red";
        obj.createView({
            parent: document.querySelector(".uploadbox")
        });
        obj.up("index.php?d=admin&f=user&a=upload",function(data){
            document.querySelector("input[name=imgurl]").value=data;
        });

    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
