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


echo '<?xml version="1.0" encoding="utf-8"?>';

echo '<nav>';
foreach($nav as $value){
	echo '<item>';
	foreach($value as $k=>$v){
		echo '<'.$k.'>'.$v.'</'.$k.'>';
	}
	
	echo '</item>';
}
echo '</nav>';







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