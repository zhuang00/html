<?php    
class indexControl extends Control
{
    function __init() {
        $this->assign("__control__",__CONTROL__);
        $this->assign("__web__",__WEB__);
        //因为所有页面都有栏目显示，所以放在此处
        $category=M("hd_category");
        $data = $category->query("SELECT * FROM hd_category");
        $this->assign('category',$data);
    }

    function index() {
        $db = M('hd_blog');
        $total = $db->query("SELECT count(*)as total FROM hd_blog");
        $page = new Page($total[0]['total'],3);
        $data = $db->query("SELECT * FROM hd_category as c 
        JOIN hd_blog as b ON c.cid=b.category_id
        ".$page->limit());
       $this->assign('data',$data);
       $this->assign('page',$page->show());
       $this->display();
    }
    function blog(){
        $id = intval($_GET['id']);
        if(!is_int($id))exit;
        $db =M('hd_blog');
        $data = $db->query("SELECT * FROM hd_blog as b JOIN hd_category as c 
            ON b.category_id=c.cid WHERE b.blog_id=$id");
        $this->assign("field",$data[0]);
        $this->display();
    }
    //显示博客列表
    function cat(){
        $cid = intval($_GET['cid']);

        if(!is_int($cid))exit;
        $db = M('hd_category');
        $total = $db->query("select count(*)as total from hd_blog as b join hd_category as c 
          on b.category_id=c.cid where c.cid=$cid");
        $page = new Page($total[0]['total'],10);
       $data= $db->query("select * from hd_blog as b join hd_category as c
         on b.category_id=c.cid where c.cid=$cid ".$page->limit());
        $this->assign("page",$page->show());
        $this->assign("data",$data);
        $this->display();
    }

}