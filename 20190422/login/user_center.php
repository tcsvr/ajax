<?php 

$islog = isset($_COOKIE['islog'])?$_COOKIE['islog']:'';
if(!$islog){
	echo '请先登录';
	header('location:login.php');
}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心页</title>

    

</head>
<body>
	<nav>
		<a href="">网站首页</a>
		<a href="">案例展示</a>
		<a href="">关于我们</a>
		<a href="">资讯动态</a>
		<a href="">联系我们</a>
		<?php if(!isset($_COOKIE['islog'])){ ?>
		<a href="login.php">登录</a>
		<a href="register.php">注册</a>
		<?php }else{ ?>
		<a href="user_center.php">用户中心(<b style="color:red;"><?php echo isset($_COOKIE['username'])?$_COOKIE['username']:''; ?></b>)</a>
		<a href="out.php">退出</a>
		<?php } ?>
	</nav>
	<h1>用户信息</h1>
</body>
</html>