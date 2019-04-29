<?php 
include('include/init.php');

if($_POST){
	if($_POST['ca_id']=='0'){
		alert('请选择分类');
	}
	if(!isset($_POST['c_title']) || empty($_POST['c_title'])){
		alert('请填写标题');
	}
	if(!isset($_POST['editorValue']) || empty($_POST['editorValue'])){
		alert('请填写详情');
	}
	// 获取数据
	// 简单的数据
	$ca_id = $_POST['ca_id'];
	$c_title = $_POST['c_title'];
	$c_detail = $_POST['editorValue'];
	$c_isshow = $_POST['c_isshow'];

	// 复杂的数据  文件上传
	if(!isset($_FILES['upload']['name']) || empty($_FILES['upload']['name'])){//判断是否为上传动作
		alert('请上传文件');
	}else{
		// 文件上传
		$name = 'upload';
		$uri = _UPLOADS_;
		$images = upload($name,$uri);
		$c_img = $images['filename']; //我们要的数据
		

		// 生成缩略图
		$img = _UPLOAD_.$c_img;  //图片来源
		$son_width = 100; // 缩略图的宽
		$son_height = 100; // 缩略图的高
		$url = _THUMBS_;  //缩略图存放路径
		// 2019/04  / (155566737043368.jpg)字符串截取
		$thumpath = substr(strrchr($c_img, '/'),1); //缩略图的名称

		$c_thumb = thumb_img($img,$son_width,$son_height,$url,$thumpath); //我们要的数据

	}

	$sql = "INSERT INTO wd_case 
	(`ca_id`,`c_title`,`c_detail`,`c_isshow`,`c_img`,`c_thumb`) 
	VALUES 
	('{$ca_id}','{$c_title}','{$c_detail}','{$c_isshow}','{$c_img}','{$c_thumb}')";
	// 执行
	$bool = mysql_query($sql);
	// 提示信息（是否成功）
	if($bool && mysql_affected_rows()){
		alert('添加成功！','case_list.php');
	}else{
		alert('添加失败！','case_add.php');
	}

	// pre($_POST);
}


include('view/case_add.html');
 ?>