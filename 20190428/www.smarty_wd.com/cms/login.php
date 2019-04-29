<?php 
// include('include/init.php');登录不要引入初始化文件
header('content-type:text/html; charset=utf-8');
session_start();

include('include/function.php');
include('include/config.php');

// 连接数据库
$conn = mysql_connect($hostname,$dbusername,$dbpassword)or die('链接失败！');
// 设置数据库编码
mysql_set_charset($dbcharset);
// 选择数据库
mysql_select_db($dbtable)or die('选择失败！');
// 操作数据库

// 密码的另一种方式  密码加盐

// 自己设置的密码  md5(); 123456
// echo md5(123456);   //"e10adc3949ba59abbe56e057f20f883e"

// 盐巴  随机数    md5(随机数);
// echo md5(rand(10000,99999)); //2d6b193c726e8dca956ac5dca28667b5

// 最后  把自己设置的密码.盐巴  md5(md5(自己).md5(随机数))
// echo md5('e10adc3949ba59abbe56e057f20f883e'.'2d6b193c726e8dca956ac5dca28667b5');


// password  最后 //af38795b83986a6bcbc02ea8a041f901最终密码
// verify    盐巴 //2d6b193c726e8dca956ac5dca28667b5


if($_POST){
	// 判断它是否为空
	if(!isset($_POST['username']) || empty($_POST['username'])){
		alert('请输入账号');
	}
	if(!isset($_POST['password']) || empty($_POST['password'])){
		alert('请输入密码');
	}
	// 判断他的长度
	if(strlen($_POST['password'])<4 || strlen($_POST['password'])>18){
		alert('密码长度为4-18位');
	}
	if(strlen($_POST['username'])<4 || strlen($_POST['username'])>18){
		alert('账号长度为4-18位');
	}
	// 判断他有没有特殊字符
	$status = preg_match("/\W+/",$_POST['username']);
	if($status){
		alert('字符为英文、数字、下划线');
	}
	// 获取数据
	$username = trim($_POST['username']);
	$password = md5($_POST['password']);

	// 登录的逻辑
	$sql = "SELECT * FROM wd_admin WHERE admin_username='{$username}'";
	$userinfo = getOne($sql);
	if($userinfo){  //判断用户名是否存在
		// 有账号的地方
		// 组装密码
		$verify = $userinfo['admin_verify'];
		$pass = md5($password.$verify);
		if($pass==$userinfo['admin_password']){//判断密码是否一致
			// 账号密码完全正确的地方
			// 这个是后台登录需要做的事情
			// 存登录状态
			$_SESSION['islog'] = 123;
			// 存用户名
			$_SESSION['username'] = $username;
			// 存id
			$_SESSION['adminid'] = $userinfo['admin_id'];

			$time = time();
			$ip = $_SERVER['SERVER_ADDR'];

			// 更新用户信息  登录时间  登录IP 
			$sql = "UPDATE wd_admin SET `lasttime`='{$time}',`lastip`='{$ip}'";
			mysql_query($sql);

			// 提示信息
			alert('登录成功！','index.php');

		}else{
			alert('密码错误');
		}
	}else{
		alert('账号不存在');
	}
}












include('view/login.html'); 

 ?>