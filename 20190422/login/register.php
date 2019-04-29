<?php 
header('content-type:text/html; charset=utf-8');

mysql_connect('localhost','root','root');
mysql_set_charset('utf8');
mysql_select_db('b1901_wengdo');

// 注册就是把信息存到数据库的动作
// ( [username] => aadmi [pass] => 123456 [repass] => 123456 ) 
if($_POST){
	if(!isset($_POST['username']) || empty($_POST['username'])){
		echo '请输入用户名';exit;
	}
	if(!isset($_POST['pass']) || empty($_POST['pass'])){
		// echo '请输入密码';exit;
	}
	// 用户名要验证和清除左右空格 英文数字下划线
	$username = trim($_POST['username']);//去左右空格
	$sql = "SELECT u_id FROM wd_user WHERE u_name='{$username}'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	if($row){
		echo '用户名已存在';exit;
	}

	$status = preg_match("/\W+/", $username, $match);
	if($status){
		echo '请输入英文、数字、下划线';
	}else{
		if(strlen($username)<4 || strlen($username)>16){
			echo '4-16位的？？？？';
		}
	}

	// 密码和确认密码比对
	if($_POST['pass'] != $_POST['repass']){
		echo '密码不一致！';exit;
	}

	// 密码要加密
	if(strlen($_POST['pass'])<4 || strlen($_POST['pass'])>16){
		echo '密码4-16位';exit;
	}

	$pass = md5($_POST['pass']);
	
	$sql = "INSERT INTO wd_user (`u_name`,`u_password`) VALUES ('{$username}','{$pass}')";
	$bool = mysql_query($sql);

	if($bool && mysql_affected_rows()){
		echo '注册成功';
	}else{
		echo '失败';
	}

}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页</title>
</head>
<body>
	<form action="" method="post">
		用户名：
		<input type="text" name="username" id=""><br>
		密&nbsp;&nbsp;&nbsp;码：
		<input type="password" name="pass" id=""><br>
		确认密码：
		<input type="password" name="repass" id=""><br>
		
		<input type="submit" value="注册">
	</form>
</body>
</html>