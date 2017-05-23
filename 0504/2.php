<?php
	class person{
		public $name;
		public $age;
		//构造方法
		public function __construct($name,$age){
			//撒大领导
			$this->name=$name;
			$this->age=$age;
		}
		public function say(){
			echo "说话";
		}

		public function run(){

			echo "run ..";
		}



	}
	$wangwu = new person("王五","18");
	var_dump($wangwu);

	// $lisi = new person();
	// var_dump($lisi);
	// $lisi->say();
	// $lisi->run();
	// $lisi->name="李四";
	// echo $lisi->name;

?>