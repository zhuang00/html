<?php
class BlogControl extends CommonControl
{
    protected $model;//模型对象

    function __init() {
        parent::__init();
        $this->model = K("blog");
    }
    //显示博客列表
    public function index() {
        $total = $this->model->query("select count(*)as total from hd_blog");
        $page = new Page($total[0]['total'],3);
//        p($page->limit());
        $field = $this->model->query("SELECT * FROM hd_category as c 
        JOIN hd_blog as b ON c.cid=b.category_id
        ".$page->limit());
        $this->assign("page",$page->show());
        $this->assign('field',$field);
        $this->display();
    }
    //添加博客视图
    public function addshow(){
//        $const = get_defined_constants(true);
//        p($const['user']);
        $category = $this->model->query("SELECT * FROM hd_category order by cid asc");
        $this->assign("category",$category);
        $this->display();
    }
    //将收集到的博客表单数据写入数据库
    public function add(){
        $data =$_POST;
        $data['blog_sendtime']=time();
        if($this->model->insert($data)){
            $this->success('添加博客成功',__WEB__.'/admin.php?c=blog');
        }else{
            $this->error('博客添加失败');
        }
    }
}
?>