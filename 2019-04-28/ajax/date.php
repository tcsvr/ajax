<?php
include('include/init.php');

$sql = $sql = "SELECT n_isshow FROM wd_nav WHERE n_id=1";
$nav = getOne($sql);
$na.= $nav['isshow'];
echo <hr>;
$t = $_GET['t'];
// echo $t;

include('task.php');
?>