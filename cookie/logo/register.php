<?php 
    // header('content_type:text/html;charset=utf-8');
    header('content-type:text/html;charset=utf-8');
    mysql_connect('localhost','root','root');
    mysql_set_charset('utf8');
    mysql_select_db('b1901_wendo'); 

    if($_POST){
        if(!isset($_POST['username']) || empty($_POST['username'])){
            echo '请输入用户名';exit;
        }
        //用户名要验证和清除左右空格
        $username = trim($_POST['username']);
        // $username = "SELECT u_id FROM wd_user WHERE u_name = '{$username}'"


        $status = preg_match("/\W+/",$username,$match);
        if($status){
            echo '请输入的英文、数字、下划线';
        }else{
            if(strlen($username)<4 || strlen($username)>16){
                echo '请输入4—16位的用户名';
            }
        }
        
        //密码和确认对比
        if($_POST['pass'] != $_POST['repass']){
            echo '密码不一致';exit;
        }

        if(!isset($_POST['pass']) || empty($_POST['pass'])){
            echo '请输入密码';exit;
        }
        if(strlen($_POST['pass'])<4 || strlen($_POST['pass'])>16){
            echo '请输入4—16位的密码';exit;
        }else{
            $pass = md5($_POST['pass']);
        }
$sql = "INSERT INTO wd_user (`u_name`,`u_password`) VALUES ('{$username}','{$pass}')";
// echo $sql;exit;
$bool = mysql_query($sql);
if(!$bool && mysql_affected_rows()){
    echo '注册失败';exit;
}else{
    echo '注册成功';
}


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
    <form action="" method="post">
        用&nbsp;户&nbsp;&nbsp;名：
        <input type="text" name="username" id=""><br>
        密&emsp;&emsp;码：
        <input type="password" name="pass" id=""><br>
        确认密码：
        <input type="password" name="repass" id=""><br>
        <br>
        <input type="submit" value="注册">
    </form>
</body>
</html>
