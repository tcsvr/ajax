<?php 

if($_POST){
	print_r($_FILES);
}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>带文件上传的表单</title>
	<script src="js/jquery-1.11.3.min.js"></script>
	<style>
	.photo{
		width: 100px; height: 100px;
		border:2px solid red;
	}
	</style>
</head>
<body>
	<div class="photo">头像</div>
	<form action="" method="post" enctype="multipart/form-data">
		账号：<input type="text" name="user" id=""><br>
		头像：<input style="display:none;" type="file" name="upload" id=""><br>
		密码：<input  type="password" name="password" id=""><span>眼睛</span><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>
<script>
	$('.photo').click(function(){
		$('input[name="upload"]').trigger('click');
	});
	$('span').mousedown(function(){
		$('input[name="password"]').prop({'type':'text'});
	});
	$('span').mouseup(function(){
		$('input[name="password"]').prop({'type':'password'});
	});
</script>