<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/8
 * Time: 22:56
 */
class editzp extends main{
    function chakan(){
        $db=new db('zpmess');
        $sql="select user.hrname,user.phone,user.cpname,zpmess.zid,zpmess.xueli,zpmess.jingyan,zhiwei.zname,zpmess.isshow  from user,zpmess,zhiwei where zpmess.uid=user.uid and zpmess.zhiwei=zhiwei.zid";
        $result=$db->db->query($sql);
        if(!empty($result)){
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/zpzt.html");
        }else{
            echo "<script>alert('暂无招聘信息');top.location.href='index.php?d=admin&f=login&a=init';</script>";
        }
    }
    function edit(){
        $zid=$_REQUEST['id'];
        $db=new db('zpmess');
        $status=$db->setField("isshow")->setWhere("zid={$zid}")->select();
        $this->smarty->assign("zid",$zid);
        $this->smarty->assign("status",$status[0]["isshow"]);
        $this->smarty->display("admin/editZpqx.html");
    }
    function gaiStatus(){
        $zid=$_REQUEST['zid'];
        $isshow=$_POST['isshow'];
        $db=new db("zpmess");
        $result=$db->setWhere("zid={$zid}")->update("isshow={$isshow}");
        if($result>0){
            $this->jump("编辑成功","index.php?d=admin&f=editzp&a=chakan");
        }
    }
    function del(){
        $zid=$_REQUEST['zid'];
        $db=new db('zpmess');
        $result=$db->del("zid={$zid}");
        if($result>0){
            $this->jump("删除成功","index.php?d=admin&f=editzp&a=chakan");
        }
    }
}