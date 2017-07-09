<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/9
 * Time: 9:30
 */
class works extends main{
    function chakan(){
        $db=new db('works');
        $result=$db->select();
        if(!empty($result)){
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/works.html");
        }else{
            echo "<script>alert('暂无作品信息');top.location.href='index.php?d=admin&f=login&a=init';</script>";
        }
    }
    function edit(){
        $wid=$_REQUEST['id'];
        $db=new db('works');
        $status=$db->setField("isshow")->setWhere("wid={$wid}")->select();
        $this->smarty->assign("wid",$wid);
        $this->smarty->assign("status",$status[0]["isshow"]);
        $this->smarty->display("admin/editWorks.html");
    }
    function gaiStatus(){
        $wid=$_REQUEST['wid'];
        $isshow=$_POST['isshow'];
        $db=new db("works");
        $result=$db->setWhere("wid={$wid}")->update("isshow={$isshow}");
        if($result>0){
            $this->jump("编辑成功","index.php?d=admin&f=works&a=chakan");
        }
    }
    function del(){
        $wid=$_REQUEST['wid'];
        $db=new db('works');
        $result=$db->del("wid={$wid}");
        if($result>0){
            $this->jump("删除成功","index.php?d=admin&f=works&a=chakan");
        }
    }
}