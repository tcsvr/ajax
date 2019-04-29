<?php 
// 图片验证码  也是PHP操作图片 所以要打开gd库

// 从phpinfo() 查看GD库有没有打开扩展

// 要先有一个验证码、
/*$codearr = range('a', 'z');
for($i=0; $i<10; $i++){
	$codearr[] = $i;
}

$codestr = '';
for($i=1; $i<=6; $i++){
	$codestr.=$codearr[rand(0,35)];
}*/



$codestr = '';
for($i=1; $i<=4; $i++){
	$codestr.=rand(0,9);
}


setcookie('code',$codestr);

// 画布
// $img = imagecreatetruecolor(100, 30); //黑白的
$img = imagecreate(100, 30);  //彩色的
// 分配颜色
// 给画布分配颜色
imagecolorallocate($img, rand(100,200), rand(0,255), rand(0,200));
// 给字符串的颜色
$strcolor = imagecolorallocate($img, rand(0,255), rand(100,255), 0);
// 给线分配颜色
$linecolor = imagecolorallocate($img, 0, 255, 0);
// 往图片里面写字符串
imagestring($img, 5, 10, 10, $codestr, $strcolor);
// 往图片里面划线
imageline($img, rand(1,10), 10, rand(10,20), 20, $linecolor);
imageline($img, 50, 30, 90, 10, $linecolor);
// 告诉浏览器你的文件类型
header('content-type:image/jpeg');
imagejpeg($img);  //输出图片
imagedestroy($img);     //— 销毁一图像资源






 ?>