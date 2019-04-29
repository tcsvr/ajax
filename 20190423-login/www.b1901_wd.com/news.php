<?php 

include('include/init.php');

$nid = isset($_GET['nid'])?$_GET['nid']:1;  //1

$sql = "SELECT `n_title`,`n_detail` FROM wd_news WHERE n_id=$nid";

$new = getOne($sql);


// 上一个ID  上一条
$sql = "SELECT n_id FROM wd_news WHERE n_id<$nid ORDER BY n_id DESC LIMIT 1";
$prev = getOne($sql);



// 下一个ID  下一条
$sql = "SELECT n_id FROM wd_news WHERE n_id>$nid ORDER BY n_id ASC LIMIT 1";
$next = getOne($sql);









include('view/news.html');

 ?>