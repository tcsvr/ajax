<?php 

include('include/init.php');

// 删除页
$caid = isset($_GET['caid'])?$_GET['caid']:0;

$sql = "DELETE FROM wd_case_category WHERE ca_id=$caid";
// 执行
$bool = mysql_query($sql);
// 提示信息（是否成功）
if($bool && mysql_affected_rows()){
	alert('已删除！','category_list.php');
}else{
	alert('删除失败！','category_del.php?caid='.$caid);
}





 ?>