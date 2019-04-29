<?php 
header('content-type:text/html; charset=utf-8');
mysql_connect('localhost','root','root');
mysql_set_charset('utf8');
mysql_select_db('b1901_wengdo');
// 登录流程
// 判断是否提交
// 判断是否为空
// 判断验证码
// 判断用户名密码
// 登录成功

if($_POST){
	// 判断是否为空
	// 用户名：
	// 密码
	if(!isset($_POST['code']) || empty($_POST['code'])){
		echo '请输入验证码';exit;
	}
	// 获取数据
	$code = $_POST['code'];
	$cookiecode = $_COOKIE['code'];

	if($code=$cookiecode){
		echo '验证码错误';
	}else{
		// 获取数据
		$user = trim($_POST['username']);
		$pass = md5($_POST['pass']);
		// 判断有没有注册有两种方式：
		// 1 简单 直接
		$sql = "SELECT * FROM wd_user WHERE `u_name`='{$user}' AND `u_password`='{$pass}'";
		$result = mysql_query($sql);
		$userinfo = mysql_fetch_assoc($result);

		// if($userinfo){
		// 	// 登录成功
		// 	echo '登录成功';
		// 	// 存登录状态
		// 	setcookie('islog','12321');
		// 	// 存用户名
		// 	setcookie('username',$userinfo['u_name']);
		// 	// 存用户ID
		// 	setcookie('uid',$userinfo['u_id']);
		// 	header('Location:user_center.php');
		// }else{
		// 	echo '用户名或者密码错误';exit;
		// }

		// // 2  分开判断
		if($userinfo){
			if($pass == $userinfo){
			setcookie('islog','12321');
			setcookie('username',$userinfo['u_name']);
			setcookie('uid',$userinfo['u_id']);
			header('Location:user_center.php');
			}else{
				echo '密码错误';
			}
		}else{
			echo '用户名错误';
		}

	}

}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录页</title>
</head>
<body>
	<form action="" method="post">
		用户名：
		<input type="text" name="username" id=""><br>
		密&nbsp;&nbsp;&nbsp;码：
		<input type="password" name="pass" id=""><br>
		<input type="text" name="code" size="5" id="">
		<img src="code.php" alt="" id="img">
		<a href="javascript:;" id="but">看不清。。</a><br>
		<input type="submit" value="登录">
	</form>
</body>
</html>
<script>
	var img = document.getElementById('img');
	var but = document.getElementById('but');

	but.onclick=function(){
		img.src ='code.php?t='+Math.random();
	}
</script>