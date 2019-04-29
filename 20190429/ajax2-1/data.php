<?php 
header('content-type:text/html; charset=utf-8');
// 链接数据库
mysql_connect('localhost','root','root')or die('link error');
mysql_set_charset('utf8');
// 选择数据库
mysql_select_db('b1901_wengdo')or die('select error');

$isshow = isset($_GET['isshow'])?$_GET['isshow']:0;

$sql = "UPDATE wd_nav SET n_isshow=$isshow WHERE n_id=1";
$bool = mysql_query($sql);

if($bool && mysql_affected_rows()){
	echo '修改成功';
}else{
	echo '失败';
}


 ?>