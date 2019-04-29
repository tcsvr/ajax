<?php 

include('include/init.php');

if($_POST){

	if(!isset($_POST['n_name']) || empty($_POST['n_name'])){
		alert('请填写导航名称');
	}
	if(!isset($_POST['n_link']) || empty($_POST['n_link'])){
		alert('请填写导航链接');
	}
	
	$n_name = trim($_POST['n_name']);
	$n_link = trim($_POST['n_link']);
	$n_isshow = $_POST['n_isshow'];

	$sql = "INSERT INTO wd_nav (`n_name`,`n_link`,`n_isshow`) VALUES ('{$n_name}','{$n_link}','{$n_isshow}')";
	// 执行
	$bool = mysql_query($sql);
	// 提示信息（是否成功）
	if($bool && mysql_affected_rows()){
		alert('添加成功！','nav_list.php');
	}else{
		alert('添加失败！','nav_add.php');
	}
	
}







include('view/nav_add.html');

 ?>