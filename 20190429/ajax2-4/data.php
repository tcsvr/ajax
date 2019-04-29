<?php 
header('content-type:text/html; charset=utf-8');


$conn = mysql_connect('localhost','root','root')or die('链接失败！');
// 设置数据库编码
mysql_set_charset('utf8');
// 选择数据库
mysql_select_db('ecshop_city')or die('选择失败！');
// 操作数据库


$pid = isset($_GET['pid'])?$_GET['pid']:1; //获取父级ID
// 地区
$sql = "SELECT * FROM ecs_region WHERE parent_id=$pid";
$city = getAll($sql);

echo json_encode($city);  //把数组转换成json








// json_decode(json) json解码
// json_encode(value) json编码

// $json = json_encode($nav);  //把数组转换成json
// echo $json;

// $arr = json_decode($json,1);  //把json转换成数组或对象

// var_dump($arr);




function getAll($sql){
	$result = mysql_query($sql);

	$list = array();
	if($result && mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;  //有数据的数组
	}else{
		return $list;  //空数组
	}
}


 ?>