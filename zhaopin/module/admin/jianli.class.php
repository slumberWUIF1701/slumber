<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/9
 * Time: 9:59
 */
class jianli extends main{
    function chakan(){
        $uid=$this->session->get('id');
        $db=new db('toudi');
        $sql="select zhiwei.zname,toudi.*,jianli.* from zpmess,zhiwei,toudi,jianli where zpmess.uid={$uid} and zpmess.zid=toudi.zid and zpmess.zhiwei=zhiwei.zid and toudi.jid=jianli.jid";
        $result=$db->db->query($sql);
        if(!empty($result)){
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/jianli.html");
        }else{
            echo "<script>alert('暂无投递信息');top.location.href='index.php?d=admin&f=login&a=init';</script>";
        }
    }
    function edit(){
        $id=$_REQUEST['id'];
        $db=new db('toudi');
        $status=$db->setField("status")->setWhere("id={$id}")->select();
        $this->smarty->assign("id",$id);
        $this->smarty->assign("status",$status[0]["status"]);
        $this->smarty->display("admin/editToudi.html");
    }
    function gaiStatus(){
        $id=$_REQUEST['id'];
        $status=$_POST['status'];
        $db=new db("toudi");
        $result=$db->setWhere("id={$id}")->update("status={$status}");
        if($result>0){
            $this->jump("编辑成功","index.php?d=admin&f=jianli&a=chakan");
        }
    }
    function del(){
        $id=$_REQUEST['id'];
        $db=new db('toudi');
        $result=$db->del("id={$id}");
        if($result>0){
            $this->jump("删除成功","index.php?d=admin&f=jianli&a=chakan");
        }
    }
}