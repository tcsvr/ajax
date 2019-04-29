<?php
//命名空间 namespace
//空间路劲 \根空间
namespace wendo;
use wendo as wd;

header('content-type:text/html; charset=utf-8');


//常量 类名  函数名    避免重名

// echo time();
function time(){
    return '12asd329asd83432856';
}

echo time();
echo '<br>';
echo \time();
echo '<br>';
echo wd\time();



?>