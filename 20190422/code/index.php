<?php 
header('content-type:text/html; charset=utf-8');

if($_POST){
	if(!isset($_POST['code']) || empty($_POST['code'])){
		echo '请输入验证码';exit;
	}
	// 获取数据
	$code = $_POST['code'];
	$cookiecode = $_COOKIE['code'];

	if($code!=$cookiecode){
		echo '验证码错误';
	}else{
		echo '登录成功';
	}

}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
		// http://localhost/b1901/20190422/code/code.php?t=1232234234234
		// alert(img.src);
		// img.src = img.src+'?t='+Math.random();
		img.src ='code.php?t='+Math.random();
	}
</script>