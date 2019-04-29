<?php 
header('content-type:text/html; charset=utf-8');


include('include/init.php');


// 服务项目
$sql = "SELECT * FROM wd_service ORDER BY s_id ASC";
$service = getAll($sql);

// "['111.jpg','222.jpg','333.jpg']";

$imgArr1 = "[";
$imgArr2 = "[";
foreach($service as $v){
	$imgArr1 .= "'".$v['s_img1']."',";
	$imgArr2 .= "'".$v['s_img2']."',";
}
$imgArr1 = rtrim($imgArr1,',');
$imgArr2 = rtrim($imgArr2,',');
$imgArr1 .= "]";
$imgArr2 .= "]";



// 案例分类
$sql = "SELECT * FROM wd_case_category";
$category = getAll($sql);

// 获取案例分类ID
$caid = isset($_GET['caid']) ? $_GET['caid'] : 1;

// ====处理get传参的问题  开始=====
$caid = intval($caid);  //确保是一个数字

$sql = "SELECT ca_id FROM wd_case_category WHERE ca_id={$caid}";
$status = getOne($sql);

if(!$status){
	// alert('页面缺少数据','index.php');
	// PHP的重定向  重新定义方向
	header('Location:index.php');
}
// ====处理get传参的问题  结束=====

//案例列表
$sql = "SELECT `c_id`,`c_title`,`c_img` FROM wd_case WHERE ca_id={$caid} AND c_isshow=1 ORDER BY c_id DESC LIMIT 7";
$case = getAll($sql);




// 关于我们
$sql = "SELECT * FROM wd_article WHERE a_id=1";
$about = getOne($sql);
$about = $about['a_content'];
$about = preg_replace("/<[^<>]+>/", '', $about);
// 中文就用中文的字符串截取  substr();
// $about = mb_substr($about, 0, 78,'utf-8');


// 最新资讯
$sql = "SELECT `n_id`,`n_title`,`n_detail`,`n_time` FROM wd_news ORDER BY n_time DESC LIMIT 4";

$news = getAll($sql);



// 合作伙伴
$sql = "SELECT * FROM wd_partner";
$partner = getAll($sql);

// pre($partner);









include('view/index.html');

 ?>