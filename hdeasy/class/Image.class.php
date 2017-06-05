<?php
    /*
     * 图像处理类
     * 完成图片的水印添加与缩略图处理
     * @@author zhuang00
     */
    class Image{
        private $waterOn;
        private $waterImg;
        private $qua; //jpeg图片的压缩比
        private $waterPos;
        private $waterPct;
        private $waterText;
        private $waterTextSize;
        private $waterTextColor;
        private $waterTextFont;
        ////////缩略图配置项
        private $thumbWidth;
        private $thumbHeight;
        private $thumbEndFix;
        private $thumbType;

        public function __construct() {
            $this->waterOn=C("WATER_ON");
            $this->waterImg=C("WATER_IMG");
            $this->waterPos=C("WATER_POS");
            $this->waterPct=C("WATER_PCT");
            $this->waterText=C("WATER_TEXT");
            $this->waterTextSize=C("WATER_TEXT_SIZE");
            $this->waterTextColor=C("WATER_TEXT_COLOR");
            $this->waterTextFont=C("WATER_TEXT_FONT");
            $this->qua=C("WATER_QUA");
            //缩略图配置项
            $this->thumbWidth=C("THUMB_WIDTH");
            $this->thumbHeight=C("THUMB_HEIGHT");
            $this->thumbEndFix=C("THUMB_ENDFIX");
            $this->thumbType=C("THUMB_TYPE");
        }
        //验证文件是否为图片 并且验证GD库是否存在
        private function check($img){
            return is_file($img)&&getimagesize($img)&& extension_loaded("gd");
        }
        /*@param string $img        要处理的原图片
        /*@param string $outFile    储存的图片
        /*@param string $thumbType  哪种方式进行缩放处理
         */
        public function thumb($img,$outFile='',$thumbWidth='',$thumbHeight='',$thumbType=''){
            if(!$this->check($img)){
                return false;
            }
            $thumbType = $thumbType?$thumbType:$this->thumbType;
            $thumbWidth = $thumbWidth?$thumbWidth:$this->thumbWidth;
            $thumbHeight = $thumbHeight?$thumbHeight:$this->thumbHeight;
            $thumbType = $thumbType?$thumbType:$this->thumbType;
            //根据不同的缩略方式获得尺寸(原图和缩略图相应的尺寸)
            $thumb_size =
            //获得原图的信息
            $imgInfo = getimagesize($img);
            $imgWidth =$imgInfo[0]; //原图宽
            $imgHeght = $imgInfo[1]; //原图高
            $imgType = image_type_to_extension($imgInfo[2]);//获得图片类型.jpeg
//            $imgType = image_type_to_extension($imgInfo[2],false);//获得图片类型.jpeg
//            echo $imgType;exit;
            //根据不同的缩略方式获得尺寸(原图和缩略图相应的尺寸)
            $thumb_size =$this->thumbSize($imgWidth,$imgHeght,$thumbWidth,$thumbHeight,$thumbType);
            $func = "imagecreatefrom".substr($imgType,1);//变量函数
            $resImg =$func($img);//创建资源
            if($imgType=='gif'){
                $res_thumb = imagecreate($thumb_size[2],$thumb_size[3]);
            }else{
                $res_thumb = imagecreatetruecolor($thumb_size[2],$thumb_size[3]);
            }
            imagecopyresized($res_thumb,$resImg,0,0,0,0,$thumb_size[2],$thumb_size[3],
                $thumb_size[0],$thumb_size[1]);
//           header("Content-Type:image/jpeg");
            $fileInfo = pathinfo($img);
//            p($fileInfo);
            $outFile =$outFile?$outFile:$fileInfo['filename'].$this->thumbEndFix.'.'.$fileInfo['extension'];
            $outFile =$fileInfo['dirname'].'/'.$outFile;
            $func = "image".substr($imgType,1);//变量函数
//            p($outFile);
            $func($res_thumb,$outFile);

            return $outFile;

        }
        //根据原图与缩略图尺寸结合不同的缩略方式，得到原图与缩略图计算后的尺寸
        private function thumbSize($imgWidth,$imgHeght,$thumbWidth,$thumbHeight,$thumbType){
            $w = $thumbWidth;
            $h = $thumbHeight;
            $img_w = $imgWidth;
            $img_h = $imgHeght;
            switch ($thumbType){
                case 1: //宽度固定，高度自增
                    //800*600
                    $h = $w/$imgWidth*$imgHeght;
                break;
                case 2:
                    $w = $h/$imgHeght*$imgWidth;
                break;
                case 3:
                    if($imgHeght/$thumbHeight>$imgWidth/$thumbWidth){
                        $img_h = $imgWidth/$thumbWidth*$thumbHeight;
                    }else{
                        $img_w = $imgHeght/$thumbHeight*$thumbWidth;
                    }

            }
            return array($img_w, $img_h,$w,$h);
        }
        /*
         * 图片水印处理
         * @param string $img       要处理的图片
         * @param string $outImg    加完水印后存储的图片文件名
         * @param int $pos          水印的位置
         * @param int $waterImg     水印的图片
         * @param int $pct          水印的透明度
         * @param int $text         水印的文字内容
         */
        public function water($img,$outImg=null,$pos="",$waterImg="",$pct="",$text="",$textColor=""){
            //验证文件是否为图片 并且验证GD库是否存在

            if (!$this->check($img)) {
                return false;
            }
            //水印图片
            $waterImg = $waterImg ? $waterImg : $this->waterImg;
            
            //验证水印图片是否合法
            $waterImgOn = $this->check($waterImg);
              
            //储存的图片文件名
            $outImg = $outImg ? $outImg : $img;
            
            //水印位置
            $pos = $pos ? $pos : $this->waterPos;
            
            //水印文字
            $text = $text ? $text : $this->waterText;
            $textColor = $textColor?$textColor:$this->waterTextColor;
           
            //水印透明度
            $pct = $pct ? $pct : $this->waterPct;

            
            //获得原图的尺寸
            $imgInfo = getimagesize($img);//原图信息
            $imgWidth = $imgInfo[0];//原图宽度
            $imgHeight = $imgInfo[1];//原图高度
            //用图片做水印
//            var_dump($waterImgOn); exit;
            if ($waterImgOn) {
                $waterInfo = getimagesize($waterImg);//获得水印图片信息
                $waterWidth = $waterInfo[0];//水印图的宽度
                $waterHeight = $waterInfo[1];//水印图的高度
                //创建原图的图像资源
                switch ($imgInfo[2]) {
                    case 1:
                        $resImg = imagecreatefromgif($img);
                        break;
                    case 2:
                        $resImg = imagecreatefromjpeg($img);
                        break;
                    case 3:
                        $resImg = imagecreatefrompng($img);
                        break;
                }
                //1 gif  2 jpeg 3png
                //不同的图片使用不同的函数创建
                $w_img = null;
                switch ($waterInfo[2]) {
                    case 1:
                        $w_img = imagecreatefromgif($waterImg);
                        break;
                    case 2:
                        $w_img = imagecreatefromjpeg($waterImg);
                        break;
                    case 3:
                        $w_img = imagecreatefrompng($waterImg);
                        break;
						}
                     } else {//当水印图片失效时，加文字水印
                            //没有水印文字或者水印文字颜色设置错误
                            if(empty($text)||strlen($textColor)!=7){
                                return false;
                    }
                $resImg = imagecreatefromjpeg($img);
                $textInfo = imagettfbbox($this->waterTextSize,0,$this->waterTextFont,$text);
                $waterWidth = $textInfo[2]-$textInfo[6];//文字盒子宽度
                $waterHeight = $textInfo[3]-$textInfo[7];//文字盒子高度
            }
            //计算水印放置的位置
            $x = $y = 20;//默认水印的位置
            switch ($pos) {
                case 1:

                    break;
                case 2:
                    $x = ($imgWidth - $waterWidth) / 2;
                    break;
                case 3:
                    $x = $imgWidth - $waterWidth - 10;
                    break;
                case 4:
                    $y = ($imgHeight - $waterHeight) / 2;
                    break;
                case 5:
                    $x = ($imgWidth - $waterWidth) / 2;
                    $y = ($imgHeight - $waterHeight) / 2;
                    break;
                case 6:
                    $x = $imgWidth - $waterWidth - 10;
                    $y = ($imgHeight - $waterHeight) / 2;
                    break;
                case 7:
                    $y = $imgHeight - $waterHeight - 10;
                    break;
                case 8:
                    $x = ($imgWidth - $waterWidth) / 2;
                    $y = $imgHeight - $waterHeight - 10;
                    break;
                case 9:
                    $x = $imgWidth - $waterWidth - 5;
                    $y = $imgHeight - $waterHeight - 5;
                    break;
                default://图片随机加水印
                    $x = mt_rand(20, $imgWidth - $waterWidth);
                    $y = mt_rand(20, $imgHeight - $waterHeight);

            }
            //当水印图有效是，以图片形式加水印
            if($waterImgOn){

            if ($waterInfo[2] == 3) {
                imagecopy($resImg, $w_img, $x, $y, 0, 0, $waterWidth, $waterHeight);
            } else {
                imagecopymerge($resImg, $w_img, $x, $y, 0, 0,$waterWidth,$waterHeight);
            }
        }else {//文字水印
                $red =hexdec(substr($this->waterTextColor,1,2));
                $green =hexdec(substr($this->waterTextColor,3,2));
                $blue =hexdec(substr($this->waterTextColor,5,2));
                $color =imagecolorallocate($resImg,$red,$green,$blue);
                imagettftext($resImg,$this->waterTextSize,0,$x,$y,$color,$this->waterTextFont,$text);
            }
            //imagegif imagejpeg imagepng
            switch($imgInfo[2]){
                case 1:
                    imagegif($resImg,$outImg);
                    break;
                case 2:
                    imagejpeg($resImg,$outImg,$this->qua);
                    break;
                case 3:
                    imagepng($resImg,$outImg);
                    break;
            }
            //垃圾回收
            if(isset($resImg))
                imagedestroy($resImg);

            if(isset($w_img))
                imagedestroy($w_img);
            return true;
        }
    }
