<?php
class CategoryControl extends CommonControl{
    protected $model;//模型对象
    function __init() {
        parent::__init();
        $this->model = K("category");
    }

    function index() {
        $data = $this->model->getAll();
        $this->assign("category",$data);
        $this->display();
    }
    function addshow(){
        $this->display();
    }
    function add(){
        $data = $_POST;
        if($this->model->add($data)){
            $this->success('添加成功',__WEB__.'/admin.php?c=category');
        }else{
            $this->error('添加失败');
        }
    }
    //删除栏目
    function del(){
        $cid = $_GET['cid'];
        if($this->model->del($cid)){
            $this->success('删除栏目成功',__WEB__.'/admin.php?c=category');
        }else{
            $this->error('删除栏目失败');
        }
    }
    //编辑栏目视图
    function editshow(){
        $cid = $_GET['cid'];
        $data = $this->model->getOne($cid);
        $this->assign("field",$data);
        $this->display();
    }
    //编辑栏目
    function edit(){
       if($this->model->save($_POST)!==false){
           $this->success('栏目修改成功',__WEB__.'/admin.php?c=category');
       }else{
           $this->error('栏目修改失败');
       }
    }
}