<?php 

include('include/init.php');


$nid = isset($_GET['nid'])?$_GET['nid']:0;

$sql = "DELETE FROM wd_nav WHERE n_id=$nid";
// 执行
$bool = mysql_query($sql);
// 提示信息（是否成功）
if($bool && mysql_affected_rows()){
	alert('已删除！','nav_list.php');
}else{
	alert('已删除！','nav_list.php');
	// alert('修改失败！','nav_edit.php?nid='.$nid);
}






include('view/nav_list.html');

 ?>