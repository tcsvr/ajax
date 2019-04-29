<?php 

include('include/init.php');

$nid = isset($_GET['nid'])?$_GET['nid']:0;

// 先查询显示原数据
$sql = "SELECT * FROM wd_nav WHERE n_id=$nid";
$nav = getOne($sql);


/*if($nav['n_isshow']==1){
	<input type="radio" checked="checked" name="n_isshow" value="1" id="yes">
	<label for="yes">是</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="n_isshow" value="0" id="no">
	<label for="no">否</label>
}else{
	<input type="radio" name="n_isshow" value="1" id="yes">
	<label for="yes">是</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio"  checked="checked" name="n_isshow" value="0" id="no">
	<label for="no">否</label>
}*/


// 判断是否提交
if($_POST){

	if(!isset($_POST['n_name']) || empty($_POST['n_name'])){
		alert('请填写导航名称');
	}
	if(!isset($_POST['n_link']) || empty($_POST['n_link'])){
		alert('请填写导航链接');
	}
	
	$n_name = trim($_POST['n_name']);
	$n_link = trim($_POST['n_link']);
	$n_isshow = $_POST['n_isshow'];

	$sql = "UPDATE wd_nav SET `n_name`='{$n_name}',`n_link`='{$n_link}',`n_isshow`='{$n_isshow}' WHERE n_id=$nid";


	// 执行
	$bool = mysql_query($sql);
	// 提示信息（是否成功）
	if($bool && mysql_affected_rows()){
		alert('修改成功！','nav_list.php');
	}else{
		alert('修改成功！','nav_list.php');
		// alert('修改失败！','nav_edit.php?nid='.$nid);
	}

}




include('view/nav_edit.html');

 ?>