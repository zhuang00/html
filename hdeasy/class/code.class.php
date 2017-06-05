<?php
    class Code{
        //画布 宽度 高度 背景颜色 文字颜色 文字大小 文字字体 验证码文字数量 种子
        private $res;
        private $fontSize;
        private $fontColor;
        private $font;
        private $width;
        private $height;
        private $codeStr;
        private $num;
        private $fontColorRes;
        //构造函数
        //$options=array("bgcolor","font")
        public function __construct($options=array()) {
            $this->codeStr = isset($options['codestr'])?$options['codestr']:"abcdefhijklmnopqstuvwsyz1234567890";
            $this->font = isset($options['font'])?$options['font']:"fonts/1.ttf";
            $this->num= isset($options['num'])?$options['num']:5;
            $this->width=isset($options['width'])?$options['width']:100;
            $this->height=isset($options['height'])?$options['height']:30;
            $this->bgColor=isset($options['bgcolor'])?$options['bgcolor']:"#ffffff";
            $this->fontSize=isset($options['fontSize'])?$options['fontSize']:16;
            $this->fontColor = isset($options['fontcolor'])?$options['fontcolor']:null;
        }
        public function show(){
            $this->create();//创建画布
            $this->createFont();//写验证码文字
            $this->createLine();//划线
            header("Content-type:image/png");
            imagepng($this->res);
        }
        //绘制线
        private function createLine(){
            for($i=0;$i<5;$i++){
                imageline($this->res,
                    mt_rand(0,$this->width),mt_rand(0,$this->height),
                    mt_rand(0,$this->width),mt_rand(0,$this->height),
                    $this->fontColorRes);
            }
            //绘制杂色
            for($i=0;$i<100;$i++){
                imagesetpixel($this->res,
                    mt_rand(0,$this->width),
                        mt_rand(0,$this->height),
                        $this->fontColorRes);
            }
            for($i=0;$i<2;$i++){
                imagerectangle($this->res, mt_rand(0,$this->width),
                    mt_rand(0,$this->height), mt_rand(0,$this->width),
                    mt_rand(0,$this->height),$this->fontColorRes
                    );
            }
        }
        private function create(){
           $res = imagecreatetruecolor($this->width,$this->height);
           $colors = $this->getColor($this->bgColor);
           $bgColor = imagecolorallocate($res,$colors[0],$colors[1],$colors[2]);
           $black = imagecolorallocate($res,0,0,0);

            imagefill($res,0,0,$bgColor);
            imagerectangle($res,0,0,$this->width-1,$this->height-1,$black);
            $this->res =$res;
        }
        private function getCodeStr(){
            $code='';
            for($i=0;$i<$this->num;$i++){
                $index = mt_rand(0,strlen($this->codeStr)-1);
                $code.=$this->codeStr[$index];
            }
            $_SESSION['code']=strtoupper($code); //把验证码存入session，用于客户端验证使用
            return strtoupper($code);
        }
        private function createFont(){
            $fontColor = null;//文字颜色
            //如果指定文字颜色，设置颜色
            if($this->fontColor){
                $colors = $this->getColor($this->fontColor);//获得文字颜色数组
                $fontColor = imagecolorallocate($this->res,$colors[0],$colors[1],$colors[2]);//定义文字颜色
            }
            $codeStr = $this->getCodeStr();//获得验证码文字
            $w = $this->width/$this->num;//每个自占用的宽度
           //向画布写入文字
            for($i=0;$i<$this->num;$i++){
                //如果文字没有指定的颜色，那么文字颜色就是随机的颜色
                if(!$this->fontColor){
                    $fontColor = imagecolorallocate($this->res,mt_rand(50,135),mt_rand(50,135),mt_rand(50,135));

                }
                //echo $fontColor;
                imagettftext($this->res,mt_rand($this->fontSize-2,$this->fontSize+2),
                    mt_rand(-30,30),
                    $w*$i+5,
                    mt_rand($this->height/1.4,$this->height-5),
                    $fontColor,
                    $this->font,$codeStr[$i]);
            }
            $this->fontColorRes = $fontColor;
        }
        private function getColor($str){
            $str = trim($str,"#");
            return array(
                hexdec(substr($str,0,2)),
                hexdec(substr($str,2,2)),
                hexdec(substr($str,4,2)),
            );
        }
    }


