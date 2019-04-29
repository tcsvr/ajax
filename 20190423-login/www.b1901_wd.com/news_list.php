<?php 
include('include/init.php');
include('include/page/page.php');

// 1 2     3 4     5

// 共5条数据  每页显示2条  共3页
// 计算开始位置  只能用当前页
// 1  0,2   (current1 - 1) * 2
// 2  2,2   (current2 - 1) * 2
// 3  4,2   (current3 - 1) * 2

// 计算页码  共有多少页
$current = isset($_GET['page'])?$_GET['page']:1;
$limit = 2;
$start = ($current - 1) * $limit;
$size = 3;

// 获取总条数
$sql = "SELECT COUNT(n_id) AS count FROM wd_news";
$count = getOne($sql);
$count = $count['count'];


$sql = "SELECT * FROM wd_news ORDER BY n_time DESC LIMIT $start, $limit";

$news = getAll($sql);

// 分页
$page = page($current,$count,$limit,$size,$class='sabrosus');





include('view/news_list.html');

 ?>