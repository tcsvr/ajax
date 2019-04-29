<?php 
header('content-type:text/html; charset=utf-8');

session_start();

// 包含函数库，引入函数库
include('include/function.php');


if(!isset($_SESSION['islog']) || empty($_SESSION['islog'])){
	alert('请先登录','login.php');
}



// 包含配置文件
include('include/config.php');

// 连接数据库
$conn = mysql_connect($hostname,$dbusername,$dbpassword)or die('链接失败！');
// 设置数据库编码
mysql_set_charset($dbcharset);
// 选择数据库
mysql_select_db($dbtable)or die('选择失败！');
// 操作数据库


// 侧边栏 案例分类
$sql = "SELECT * FROM wd_case_category ORDER BY ca_id ASC";
$category = getAll($sql);


// 获取分类ID
$caid = isset($_GET['caid'])?$_GET['caid']:1;

// 获取分类名称
$sql = "SELECT * FROM wd_case_category WHERE ca_id=$caid";
$catename = getOne($sql);











 ?>