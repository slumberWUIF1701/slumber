<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/28
 * Time: 16:16
 */
class zhiwei extends  main{
    function add(){
        $this->smarty->display("admin/addZhiwei.html");
    }
    function addZhiwei(){
        $zname=$_POST["zname"];
        $db=new db("zhiwei");
        $result=$db->setWhere("zname='{$zname}'")->select();
        if(!$result){
            $b=$db->insert("zname='{$zname}'");
            if($b>0){
                $this->jump("添加成功","index.php?d=admin&f=zhiwei&a=add");
            }else{
                $this->jump("添加失败","index.php?d=admin&f=zhiwei&a=add");
            }
        }else{
            $this->jump("角色已存在","index.php?d=admin&f=zhiwei&a=add");
        }

    }
}