<?php

//    /   根 
//    ./  当前
//    ../ 上一层


// 会话控制  cookie

// 设置cookie  setcookie('取名','赋值','设置过期时间');
// 参数 4  设置有效路径
// 参数 5  设置有效域名
// 参数 6  设置是否为安全协议
setcookie('name','xiaoli',time()+3600,'/b1901/20190422/cookie/','localhost',1);
// http://127.0.0.1





// 访问cookie  $_COOKIE
print_r($_COOKIE);





 ?>