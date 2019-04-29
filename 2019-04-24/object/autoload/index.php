<?php
header('content-type:text/html; charset=utf-8');

// include('cla/page.class.php');
// include('cla/mysql.class.php');

// 自动加载类
function __autoload($className){
    include('cla/'.$className.'.class.php');
}

$p = new page();
$m = new mysql();

$p->num();
echo '<br>';
$m->getAll();

?>