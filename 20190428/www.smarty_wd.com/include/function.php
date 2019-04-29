<?php 
/**
 * 获取文件大小
 * @param $filename [string]
 * @return filesize [string]
 */
function getfilesize($filename){
	$fs = filesize($filename);
	if($fs>1024 && $fs<pow(1024,2)){
		return (floor(($fs/1024)*100)/100).' KB';
	}else if($fs>pow(1024,2) && $fs<pow(1024,3)){
		return (floor(($fs/pow(1024,2))*100)/100).' MB';
	}else if($fs>pow(1024,3) && $fs<pow(1024,4)){
		return (floor(($fs/pow(1024,3))*100)/100).' GB';
	}else{
		return $fs.' B';
	}
}
/**
 * 获取文件类型
 * @param $str [string]
 * @return fileextention [string]
 */
function getextention($str){
	$ext = substr(strrchr($str, '.'),1);
	switch($ext){
		case 'html': return 'html 文件';
		break;
		case 'css': return 'css 文件';
		break;
		case 'js': return 'js 文件';
		break;
		case 'txt': return 'txt 文件';
		break;
		case 'php': return 'php 文件';
		break;
		case 'jpg': return 'jpg 图片';
		break;
		case 'jpeg': return 'jpeg 图片';
		break;
		case 'png': return 'png 图片';
		break;
		case 'gif': return 'gif 图片';
		break;
		default : return '未知类型';
	}
}

/**
 * 数组打印测试工具
 * 
 */
function pre($con){
	echo '<pre>';
	print_r($con);
	echo '</pre>';
	exit;
}




// 封装一个PHP的弹窗（alert）
function alert($con,$url=''){
	echo "<script>";
	if($url){
		// 有url地址的
		echo "alert('{$con}');window.location.href='{$url}';";
	}else{
		// 没有url地址，我就让它跳转到上一页历史
		echo "alert('{$con}');window.history.go(-1);";
	}
	echo "</script>";
	exit;
}

/**
 * 数据库获取多条数据
 * @param $sql [string]
 * @return dataResult [array]
 * 
 */

function getAll($sql){
	$result = mysql_query($sql);

	$list = array();
	if($result && mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;  //有数据的数组
	}else{
		return $list;  //空数组
	}
}

/**
 * 数据库获取单条数据
 * @param $sql [string]
 * @return dataResult [array]
 * 
 */
function getOne($sql){
	$result = mysql_query($sql);

	if($result && mysql_num_rows($result)>0){
		return mysql_fetch_assoc($result);
	}else{
		return array();
	}
}
/**
 * 中文字符串替换带截取
 * @param $str    [project string]
 * @param $length [int length]
 * @param $start  [int offset]
 * @return string
 */


function mb_replace_substr($str,$length,$start=0){
	$str = preg_replace("/<[^<>]+>/", '', $str);

	return mb_substr($str, $start, $length, 'utf-8');
}

//得到当前网址
function get_url($params='page'){
	$str = $_SERVER['PHP_SELF'].'?';
	if($_GET){
		foreach ($_GET as $k=>$v){  //$_GET['page']
			if($k!=$params){
				$str .= $k.'='.$v.'&';
			}
		}
	}
	return $str;
}


/**
 * $name 上传域的name名
 * $uri  存放文件的目录名
 * $size  上传文件的大小
 * $type  上传文件的类型
 */
function  upload($name,$uri,$size='1048576',$type=array('jpg','jpeg','gif','png')){
	if($_FILES[$name]['error']>0){

		switch ($_FILES[$name]['error']) {
			case 1:
				$res['msg'] = "文件大于2M，请重新上传";
				break;
			case 2:
				$res['msg'] = "文件指定大小，请重新上传";
				break;
			case 3:
				$res['msg'] = "上传失败，请重新上传";
				break;
			case 4:
				$res['msg'] = "请选择文件";
				break;
			default:
				$res['msg'] = '未知错误';
				break;
		}
		$res['error'] = 1;
		return $res;
	}
	if($_FILES[$name]['size']>$size){
		$res['msg'] = "文件大于指定大小，请重新上传";
		$res['error'] = 1;
		return $res;
	}

	$path = pathinfo($_FILES[$name]['name']);
	$ext = $path['extension'];//获取后缀。

	if(!in_array($ext,$type)){
		$res['msg'] = "文件类型错误，请重新上传";
		$res['error'] = 1;
		return $res;
	}

	$time = time();
	$tmpdir = date('Y/m',$time);
	$dir = rtrim($uri,'/').'/'.$tmpdir;
	// echo $dir;exit;
	if(!is_dir($dir)){
		// 如果目录不存在，则创建目录
		mkdir($dir,0777,true);
	}
	do{
		$filename = $time.rand(0,99999);
		$file = $filename.'.'.$ext;
	}while(is_file($dir.'/'.$file));
	move_uploaded_file($_FILES[$name]['tmp_name'], $dir.'/'.$file);
	$res['error'] = 2;
	$res['msg'] = "上传成功";
	$res['filename'] = $tmpdir.'/'.$file;
	return $res;
}

function thumb_img($img,$son_width,$son_height,$url,$thumpath){
	$filename=$img;
	$info=getimagesize($filename);
	// print_r($info);
	$width=$info[0];
	$height=$info[1];
	// 打开图片
	if($info[2]==1){
	    $parent=imagecreatefromgif($filename);
	}elseif($info[2]==2){
	    $parent=imagecreatefromjpeg($filename);
	}elseif($info[2]==3){
	    $parent=imagecreatefrompng($filename);
	}
	// 创建新的图层
	// $son_width=300;
	// $son_height=50;
	// 等比例缩放
	// $son_height=ceil(($height*$son_width)/$width);
	// 新建图像
	$son=imagecreatetruecolor($son_width,$son_height);

	// $son新建图像
	// $parent原图像
	// 0,0 目标图片的y轴和x轴
	// 0,0 原图片的y轴和x轴
	imagecopyresized($son,$parent,0,0,0,0,$son_width,$son_height,$width,$height);
	// 获取后缀名
	$path=pathinfo($filename,PATHINFO_EXTENSION);
	// 设置文件名
	// $pathname=mt_rand(1000,9999).'.'.$path;
	$pathname=$thumpath;

	$dir=date("Y-m/d");
	if(!is_dir($url."/".$dir)){
		mkdir($url."/".$dir,0700,true);
	}
	$news_filename=$dir."/".$pathname;

	// dump($news_filename);exit;
	$pathname=$url."/".$news_filename;
	

	// 生成图片
	if($info[2]==1){
	    imagegif($son,$pathname);
	}elseif($info[2]==2){
	    imagejpeg($son,$pathname);
	}elseif($info[2]==3){
	    imagepng($son,$pathname);
	}
	// 销毁原图片
	imagedestroy($parent);
	// 销毁目标图片
	imagedestroy($son);
	return $news_filename;
}


 ?>