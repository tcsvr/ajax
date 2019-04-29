<?php 
include('include/init.php');

// 先判断是否为提交动作
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
		alert('分类名称已存在','category_add.php');
	}
	
	// 写SQL语句
	$sql = "INSERT INTO wd_case_category (`ca_name`) VALUES ('{$ca_name}')";
	// 执行
	$bool = mysql_query($sql);
	// 提示信息（是否成功）
	if($bool && mysql_affected_rows()){
		alert('添加成功！','category_list.php');
	}else{
		alert('添加失败！','category_add.php');
	}
}


include('view/category_add.html');

 ?>