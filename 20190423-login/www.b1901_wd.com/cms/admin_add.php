<?php 
include('include/init.php');


if($_POST){
	// 判断是否为空
	// 判断长度
	// 判断特殊字符。。
	// 判断密码是否一致
	if($_POST['pass']!=$_POST['repass']){
		alert('密码不一致');
	}
	// 判断用户是否已存在
	// 获取数据
	$username = trim($_POST['username']);
	$real = isset($_POST['real'])?$_POST['real']:'';
	$sql = "SELECT * FROM wd_admin WHERE admin_username='{$username}'";
	$ex = getOne($sql);
	if($ex){
		alert('账号已存在');
	}
	$pass = md5($_POST['pass']);
	$verify = md5(rand(10000,99999));
	$password = md5($pass.$verify);

	$sql = "INSERT INTO wd_admin (`admin_username`,`admin_real`,`admin_password`,`admin_verify`) VALUES ('{$username}','{$real}','{$password}','{$verify}')";
	$bool = mysql_query($sql);
	// mysql_insert_id(); 插入的ID
	if($bool && mysql_affected_rows()){
		// alert('');
		header('location:admin_list.php');
	}
	
}






include('view/admin_add.html');
 ?>