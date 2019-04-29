<?php 
include('include/init.php');


$sql = "SELECT `c_id`,`c_title`,`c_thumb`,`c_isshow` FROM wd_case WHERE ca_id=$caid";
$catelist = getAll($sql);





include('view/case_list.html');
 ?>