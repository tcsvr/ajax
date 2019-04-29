<?php
// 1，先获取大图片的信息，后面要用到。
$path = "about_01.jpg";
// 	getimagesize — 取得图像大小 参数（图片路径）
$info = getimagesize ($path);
// 原图的宽 高
$w = $info[0];
$h = $info[1];
//  2, 创建一张新图片，参数（图片路径）作为等下的缩略图
// 	imagecreatefromgif 由文件或 URL 创建一个新图象。
//         imagecreatefromjpeg 由文件或 URL 创建一个新图象。

$img = imagecreatefromjpeg($path);
//         imagecreatefrompng 由文件或 URL 创建一个新图象。
//  3，新建一个真彩色图像，参数（缩略图的宽，高）就像有了一个画布
// 	imagecreatetruecolor — 新建一个真彩色图像
$con_w = 100;
$con_h = $h*$con_w/$w;//等比交叉相乘
$con = imagecreatetruecolor($con_w,$con_h);
//  4， 拷贝部分图像并调整大小，参数（10个）
imagecopyresized($con,$img,0,0,0,0,$con_w,$con_h,$w,$h);
// 	imagecopyresized — 拷贝部分图像并调整大小
// 	1，缩略图资源。
// 	2，源大图资源。
// 	3,4,5,6，上下左右偏移量。
// 	7,8 缩略图的宽高。
// 	9,10 源大图的宽高。
//  5， 输出图象到浏览器或文件。参数（缩略图资源，缩略图路径和名称）
// 	imagegif — 输出图象到浏览器或文件。
imagejpeg($con,'123.jpg');
//  6， 释放资源。
// 	imagedestroy — 销毁一图像。
imagedestroy($img); 
imagedestroy($con); 






















?>