<?php 
header('content-type:text/html; charset=utf-8');


$conn = mysql_connect('localhost','root','root')or die('链接失败！');
// 设置数据库编码
mysql_set_charset('utf8');
// 选择数据库
mysql_select_db('b1901_wengdo')or die('选择失败！');
// 操作数据库


// 导航
$sql = "SELECT * FROM wd_nav WHERE n_isshow=1";
$nav = getAll($sql);


foreach($nav as $v){
echo '<tr>';
	echo '<td>'.$v["n_id"].'</td><td>'.$v["n_name"].'</td><td>'.$v["n_link"].'</td><td>'.$v["n_isshow"].'</td>';
echo '</tr>';
}






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