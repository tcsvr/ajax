<?php 
include('include/init.php');

// 后台的首页都是显示用户的信息和服务器的信息
$adminid = $_SESSION['adminid'];
$sql = "SELECT * FROM wd_admin WHERE admin_id={$adminid}";
$userinfo = getOne($sql);

// 服务器信息
// 系统  PHP_OS
$userinfo['os'] = PHP_OS;
// PHP版本  PHP_VERSION
$userinfo['pv'] = PHP_VERSION;
// mysql版本  
$userinfo['mv'] = mysql_get_server_info();






include('view/index.html');
 ?>