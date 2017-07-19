<?php
/*
 * 分页处理
 * 数据分页处理
 * @author zhuang
 *
 */
    class Page{
        private $total;//总条数
        private $pageNum;//每页显示数量
        private $selfPage;//当前页
        private $totalPage;//总页数
        private $url;//去掉page变量的url地址
        public function __construct($total,$num=10){

            $this->selfPage = $this->getSelfPage();//获得当前页
            $this->pageNum =$num;//每页显示数量
            $this->total = $total;//总条数
            $this->totalPage = ceil($this->total/$this->pageNum);//总页数
            $this->url=$this->getUrl();
        }
        private function getUrl(){
            if(isset($_GET['page'])) {
                unset($_GET['page']);
                }
                return "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.http_build_query($_GET).'&page=';
        }
        private function getSelfPage(){
           return isset($_GET['page'])?max((int)$_GET['page'],1):1;

        }
        //获得字符串表示页码
        private function getStrage(){
            $str='';
            for($i=1;$i<=$this->totalPage;$i++){
                if($i==$this->selfPage){
                    $str.="<strong>$i</strong>";
                }else {
                    $str .= "<a href='{$this->url}{$i}'>$i</a>";
                }
            }
            return $str;
        }
        public function show(){
            return $this->getStrage();
        }
        public function limit(){
            $start =($this->selfPage-1)*$this->pageNum;
            return "LIMIT $start,".$this->pageNum;
        }
    }