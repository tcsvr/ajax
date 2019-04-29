<?php 

include('include/init.php');


// 先查询原数据
$cid = isset($_GET['cid'])?$_GET['cid']:0;
$sql = "SELECT * FROM wd_case WHERE c_id=$cid";
$case = getOne($sql);

$deleteImg = $case['c_img'];
$deleteThumb = $case['c_thumb'];


// 在原数据的基础上进行修改
if($_POST){

	// 判断是否为空
	if($_POST['ca_id']==0){
		alert('请选择分类');
	}
	if(!isset($_POST['c_title']) || empty($_POST['c_title'])){
		alert('请填写标题');
	}
	if(!isset($_POST['editorValue']) || empty($_POST['editorValue'])){
		alert('请填写详情');
	}

	// 获取数据
	$c_title = $_POST['c_title'];
	$c_detail = $_POST['editorValue'];
	$c_isshow = $_POST['c_isshow'];
	$ca_id = $_POST['ca_id'];

	// $c_img = ?
	// $c_thumb = ?

	// 获取复杂的数据（文件上传） 要修改图片，不要修改图片
	if(!isset($_FILES['upload']['name']) || empty($_FILES['upload']['name'])){//判断他是否要修改图片
		// 不想修改图片
		// 写SQL语句  (少两个图片缩略图字段的SQL语句)
		$sql = "UPDATE wd_case SET `c_title`='{$c_title}',`c_detail`='{$c_detail}',`c_isshow`='{$c_isshow}',`ca_id`='{$ca_id}' WHERE c_id=$cid";
		
	}else{
		//要修改图片时就要删除旧图片
		$is_img = _UPLOADS_.$deleteImg;
		$is_thumb = _THUMBS_.$deleteThumb;
		if(file_exists($is_img) && filesize($is_img)>0){
			unlink($is_img); //原图片
		}
		if(file_exists($is_thumb) && filesize($is_thumb)>0){
			unlink($is_thumb); //缩略图
		}
		
		// 上传图片
		$name = 'upload';  //上传域的name名
		$uri =  _UPLOADS_; //图片存放路径
		$imgArr = upload($name,$uri);

		$c_img = $imgArr['filename']; //数据库的图片数据

		// 生成缩略图
		$img = _UPLOAD_.$c_img; //拉一张图片过来
		$son_width = 100;
		$son_height = 80;
		$url = _THUMBS_;//缩略图的存放路径
			// '2019/04    /   23443436436.jpg'
		$thumpath = substr(strrchr($c_img, '/'),1);
		$c_thumb = thumb_img($img,$son_width,$son_height,$url,$thumpath);
		// 写SQL语句 (全部字段的SQL语句)
		$sql = "UPDATE wd_case SET `c_title`='{$c_title}',`c_detail`='{$c_detail}',`c_isshow`='{$c_isshow}',`ca_id`='{$ca_id}',`c_img`='{$c_img}',`c_thumb`='{$c_thumb}' WHERE c_id=$cid";
		
	}
	// 执行SQL语句
	$bool = mysql_query($sql);
	if($bool && mysql_affected_rows()){
		alert('修改成功！','case_list.php?caid='.$caid);
	}else{
		alert('修改失败！','case_edit.php?caid='.$caid.'&cid='.$cid);
	}
	
}




include('view/case_edit.html');
 ?>