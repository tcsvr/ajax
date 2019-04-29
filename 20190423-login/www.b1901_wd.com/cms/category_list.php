<?php 

include('include/init.php');

if($_POST){
	$idarr = ($_POST['idarr']);
	$idstr = implode(',', $idarr);

	$sql = "DELETE FROM wd_case_category WHERE ca_id in($idstr)";
	// 执行
	$bool = mysql_query($sql);
	
	/*foreach($idarr as $caid){

		$sql = "DELETE FROM wd_case_category WHERE ca_id=$caid";
		// 执行
		$bool = mysql_query($sql);
	}*/

	// 提示信息（是否成功）
	/*if($bool && mysql_affected_rows()){
		alert('已删除！','category_list.php');
	}else{
		alert('删除失败！','category_del.php?caid='.$caid);
	}*/
	header('Location:category_list.php');
}


$sql = "SELECT * FROM wd_case_category ORDER BY ca_id ASC";
$category = getAll($sql);




include('view/category_list.html');
 ?>