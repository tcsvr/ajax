<?php 
include('include/init.php');
include('include/page/page.php');
// 获取分类ID
$caid = isset($_GET['caid'])?$_GET['caid']:1;

// 分页
$current = isset($_GET['page'])?$_GET['page']:1;

if(!$smarty->isCached('index.html',$caid.'_'.$current)){

// 查询案例分类
$sql = "SELECT * FROM wd_case_category";

$category = getAll($sql);


$limit = 3;
$start = ($current - 1) * $limit;
$size = 3;

// 求总条数
$sql = "SELECT COUNT(c_id) AS count FROM wd_case WHERE ca_id=$caid";
$count = getOne($sql);
$count = $count['count'];


// 查询案例列表
$sql = "SELECT `c_id`,`c_title`,`c_img` FROM wd_case WHERE ca_id=$caid ORDER BY c_id DESC LIMIT $start,$limit";
$case = getAll($sql);

// 分页函数
$page = page($current,$count,$limit,$size,$class='sabrosus');



$data = array(
	'category'=>$category,
	'caid'=>$caid,
	'case'=>$case,
	'page'=>$page,
	);

$smarty->assign($data);
}
$smarty->display('case_list.html',$caid.'_'.$current);

 ?>