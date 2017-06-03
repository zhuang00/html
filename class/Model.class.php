<?php

	class Model{
		private static $_link = null;//数据库连接资源
		private $_table;//表名
        private $options=array();//记录表结构、主键
		function __construct($table){
			$this->connect();
            $this->table=$table;
			$this->opt();//表结构缓存

		}
		private function opt(){
		   $sql="DESC ".$this->table;
		   $fields=$this->query($sql);
            $fieldArr =array();//记录表字段
            $pri=null;//主键
            foreach($fields as $f){
                $fieldArr[]=$f['Field'];//字段名称
                if($f['Key']==="PRI"){//判断是否为主键Primqry
                    $pri=$f['Field'];
                }
            }
            $this->options['field']=$fieldArr;
            $this->options['pri']=$pri;

        }
		//连接数据库(单例)
		private function connect(){
			//数据库已经连接过，不再连接
			if(self::$_link)return true;
			$link =@mysql_connect(C("DB_HOST"),C("DB_USER"),C("DB_PWD"));
			if(!$link){
				die('数据库连接失败');
			}
			//选择数据库
			if(!mysql_select_db(C("DB_NAME"))){
				die("数据库不可用");
			}
			//设置字符集
			mysql_query("SET NAMES ".C("DB_CHAR"));
			self::$_link=$link;

		}
		//获得结果集
		function query($sql){
		    $rows=array();
			$result = mysql_query($sql);
			if(mysql_num_fields($result)){
				while($r =mysql_fetch_assoc($result)){
					$rows[]=$r;
				}
			}
			return $rows;
		}
		//执行增，删，改操作
		public function exe($sql){
			mysql_query($sql);
			$affecteds = mysql_affected_rows();
			if($affecteds){
				return $affecteds;
			}
			return false;
		}
		//查找一条记录
		public function find($id){
		    if(is_null($this->options['pri']))return false;
		    $id = intval($id);//强制转换为数值
            $sql="SELECT * FROM {$this->table} WHERE {$this->options['pri']}=$id";
            $result= $this->query($sql);
            return empty($result)?null:current($result);
        }
        public function select(){
		    $where=empty($this->options['where'])?"":"WHERE ".$this->options['where'];
            $sql ="SELECT * FROM {$this->table} ".$where;
            return $this->query($sql);

        }
        public function all(){
            return $this->select();

        }
        public function where($arg){
            $this->options['where']=$arg;
            return $this;
        }
	}