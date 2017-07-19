<?php
    class CategoryModel extends Model{
        protected $table="hd_category";
        function add($data){
           return $this->insert($data);
        }
        function getAll(){
            return $this->select();
        }
        //删除栏目
        function del($cid){
           return $this->where("cid=$cid")->delete();
        }
        //查看栏目数据
        function getOne($cid){
            return $this->find($cid);
        }
        //编辑栏目
        function save($data){
            return $this->update($data);
        }
    }