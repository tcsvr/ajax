<?php 

include('include/init.php');


$sql = "SELECT * FROM wd_nav ORDER BY n_id ASC";
$nav = getAll($sql);


if($_POST){
	$idarr = $_POST['idarr'];
	$idstr = implode(',',$idarr);

	$sql = "DELETE FROM wd_nav WHERE n_id IN($idstr)";
	$bool = mysql_query($sql);
	if($bool && mysql_affected_rows()){
		header('Location:nav_list.php');
	}
}






include('view/nav_list.html');

 ?>