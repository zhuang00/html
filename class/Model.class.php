<?php

	class Model{
		private static $_link = null;//数据库连接资源
		private $_table;//表名
		function __construct($table){
			$this->connect();
			$this->table=$table;
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
	}