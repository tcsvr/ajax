<?php
$codestr = '';
for($i=1;$i<=4;$i++){
    $codestr.=rand(0,9);
}

setcookie('code',$codestr);
// print_r($codestr);exit;

$img = imagecreate(100,30);

imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));

$strcolor = imagecolorallocate($img,rand(100,200),rand(100,200),0);//给字符串颜色

$linecolor = imagecolorallocate ($img,rand(100,200),rand(100,200),rand(100,200));//线的颜色


imagestring($img, 5,10,10,$codestr,$strcolor);//往图片里面写字符串

imageline($img,rand(1,10),rand(1,10),rand(90,100),rand(40,50),$linecolor);//往图片面里面划线

header('content-type:image/jpeg');//告诉浏览器这是图片文件类型

imagejpeg($img);// 输出
imagedestroy($img);   //  — 销毁一图像











?>