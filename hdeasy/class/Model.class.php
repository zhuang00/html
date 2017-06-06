<?php

	class Model{
		private static $_link = null;//数据库连接资源
		public $_table;//表名
        private $options;//记录表结构、主键
        public static $sqls=array();//记录查询的SQL语句
		function __construct($table=null){
		    $table = $table?$table:$this->_table;
//		    var_dump($this->_table);
		    if(!$table){
		        error("没有可操作的数据表");
            }
			$this->connect();
            $this->table=$table;
            $this->reset();//options属性初次化
			$this->opt();//表结构缓存

		}
		private  function reset(){
            $this->options=array(
                "field"=>array(),
                "pri"=>null,
                "where"=>"",
                "order"=>"",
                "limit"=>""
            );
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
			$result = mysql_query($sql);
			$this->reset();//options属性初次化
            $rows=array();
			if(mysql_num_fields($result)){
				while($r =mysql_fetch_assoc($result)){
					$rows[]=$r;
				}
			}
			self::$sqls[]=$sql;
			return $rows;
		}
		//执行增，删，改操作
		public function exe($sql){
			mysql_query($sql);
            $this->reset();//options属性初次化
			$affecteds = mysql_affected_rows();
            self::$sqls[]=$sql;//sql语句进行记录
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
		    $where=empty($this->options['where'])?"":" WHERE ".$this->options['where'];
		    $limit=empty($this->options['limit'])?"":" LIMIT ".$this->options['limit'];
            $order=empty($this->options['order'])?"":" ORDER BY  ".$this->options['order'];
            $sql ="SELECT * FROM {$this->table} ".$where.$order.$limit;
//            p($sql);
            return $this->query($sql);
        }
        public function order($arg){
            $this->options['order']=$arg;
            return $this;
        }
        public function limit($arg){
            $this->options['limit']=$arg;
            return $this;
        }

        public function all(){
            return $this->select();

        }
        public function where($arg){
            $this->options['where']=$arg;
            return $this;
        }
        public function update($data){
            $where=$this->options['where'];
            //更新操作必须指定条件，如果没有条件时放弃本次更新
            if(empty($this->options['where'])){
                if(isset($data[$this->options['pri']])){
                    $where = "WHERE {$this->options['pri']}={$data[$this->options['pri']]}";
//                    p($where);
                }else {
                    return false;
                }
            }
            $s="";
            foreach($data as $key=>$value){
                if(!in_array($key,$this->options['field']))continue;//过滤字段
                $s.=$key."='".$value."',";
            }
            $s=substr($s,0,-1);
            $sql = "UPDATE {$this->table} SET ".$s.$where;
            return $this->exe($sql);
        }
        public function delete() {
            $where = $this->options['where'];
            //更新操作必须指定条件，如果没有条件时放弃本次更新
            if (empty($this->options['where'])) {
                return false;
            }
            $sql = "DELETE FROM {$this->table} "." WHERE ".$where;
            echo $sql;
            return $this->exe($sql);
        }
        //增加操作
        public function insert($data){
            $sql = "INSERT INTO stu(sname,birthday) values()";
            $fields="";//插入时的字段
            $values="";//插入的值
            foreach($data as $key=>$value){
                if(!in_array($key,$this->options['field']))continue;
                $fields.=$key.",";
                $values.="'".$value."',";
            }
            $fields = substr($fields,0,-1);
            $values = rtrim($values,',');
            $sql = "INSERT INTO {$this->table} ($fields) VALUES($values)";
            return $this->exe($sql);
        }
	}