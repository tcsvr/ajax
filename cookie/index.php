<?php
header('content_type:text/html;charset=utf-8');
//设置 cookie  setcookie('取名','赋值' , '设置过期时间')
// setcookie('name','xiaocao',time()+3600,'/cookie/');
//访问
// print_r($_COOKIE);
// http://localhost/cookie/p/c/c.php;

if($_POST){
    if(!isset($_POST['code']) || empty($_POST['code'])){
        echo '亲输入验证码';
    }
    $code = $_POST['code'];
    $cookiecode = $_COOKIE['code'];
    
    if($code!=$cookiecode){
        echo '验证码错误';
    }else{
        echo '登陆成功';
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
        用户名：
        <input type="text" name="username" id=""><br>
        密&emsp;码：
        <input type="password" name="pass" id=""><br>
        验证码：
        <input type="text" name="code" size="5" id="">
        <img src="code.php" alt="" id="img">
        <a href="javascript:;" id="but">看不清...</a>
        <br>
        <input type="submit" value="登陆">
    
    
    </form>
</body>
</html>
<script>
var img = document.getElementById('img');
var but = document.getElementById('but');

but.onclick = function(){
    // alert(img.src);
    img.src=img.src+'?t='+Math.random();//清楚缓存
}

</script>




