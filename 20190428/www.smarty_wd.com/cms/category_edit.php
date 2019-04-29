<?php 

include('include/init.php');

// 先看到原数据
// 再在原数据上做修改
// 以上是提交前的代码
$caid = isset($_GET['caid'])?$_GET['caid']:0;

$sql = "SELECT * FROM wd_case_category WHERE ca_id=$caid";
$cate = getOne($sql);




// 下面是提交后执行的代码
	// 确认后提交
if($_POST){
	// 判断是否为空
	if(!isset($_POST['ca_name']) || empty($_POST['ca_name'])){
		alert('请填写分类名称');
	}
	// 获取数据
	$ca_name = trim($_POST['ca_name']);

	// =====判断你添加的分类名称有没有重复=======、
	// 原理是：把新名称当成条件做查询
	$sql = "SELECT ca_id FROM wd_case_category WHERE ca_name='{$ca_name}'";
	$repeat = getOne($sql);
	if($repeat){
		alert('分类名称已存在','category_edit.php?caid='.$caid);
	}
	
	// 写SQL语句
	$sql = "UPDATE wd_case_category SET `ca_name`='{$ca_name}' WHERE ca_id=$caid";
	// 执行
	$bool = mysql_query($sql);
	// 提示信息（是否成功）
	if($bool && mysql_affected_rows()){
		alert('修改成功！','category_list.php');
	}else{
		alert('修改失败！','category_edit.php?caid='.$caid);
	}
}






include('view/category_edit.html');
 ?>