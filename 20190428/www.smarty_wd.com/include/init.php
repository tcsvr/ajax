<?php 

header('content-type:text/html; charset=utf-8');


// 包含函数库，引入函数库
include('include/function.php');

// 包含配置文件
include('include/config.php');

// 连接数据库
$conn = mysql_connect($hostname,$dbusername,$dbpassword)or die('链接失败！');
// 设置数据库编码
mysql_set_charset($dbcharset);
// 选择数据库
mysql_select_db($dbtable)or die('选择失败！');
// 操作数据库

// 4  开始加载  smarty类文件
include('include/smarty_3.1.28/Smarty.class.php');
// 5  new smarty类文件
$smarty = new Smarty();
// var_dump($smarty)
// 6  配置smarty
	// 配置模板目录  （放在根目录下）  
$smarty->setTemplateDir('template/templates');
	// 配置模板编译目录 （放在根目录下）
$smarty->setCompileDir('template/templates_c');
	// 配置缓存目录 （放在根目录下）
$smarty->setCacheDir('cache/');

	// 配置是否开启缓存,开发过程中不要开启缓存
$smarty->caching = true;
	// 配置标签边界符
$smarty->cache_lifetime = 3600;
// 7  开始应用

// 配置左边界符
$smarty->left_delimiter = '<{';
// 配置右边界符
$smarty->right_delimiter = '}>';









// 导航
$sql = "SELECT * FROM wd_nav WHERE n_isshow=1";
$nav = getAll($sql);

//广告图
$sql = "SELECT * FROM wd_banner WHERE b_isshow=1";
$banner = getAll($sql);


// 获取导航ID
$navid = isset($_GET['navid'])?$_GET['navid']:1;

// 获取导航名称
$sql = "SELECT * FROM wd_nav WHERE n_id=$navid";
$ntitle = getOne($sql);


$data = array(
	'nav'=>$nav,
	);

$smarty->assign($data);









 ?>