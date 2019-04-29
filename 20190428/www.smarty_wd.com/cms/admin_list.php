<?php 
include('include/init.php');

$sql = "SELECT * FROM wd_admin ORDER BY admin_id ASC";
$admininfo = getAll($sql);






include('view/admin_list.html');
 ?>