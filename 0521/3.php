<?php
    header("Content-type:image/png");
    $res = imagecreatetruecolor(200,200);
    $black =imagecolorallocate($res,0,0,0);
    imagefill($res,0,0,$black);
    $red =imagecolorallocate($res,255,0,0);
    $green = imagecolorallocate($res,0,255,0);
    imagefilledellipse($res,100,100,190,50,$green);
    imageline($res,0,0,199,199,$red);
    imagepng($res);
