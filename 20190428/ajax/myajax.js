function myAjax(url,fnSuccess,fnFailed){
	// 为了兼容浏览器，所以做判断兼容性
	if(window.XMLHttpRequest){
		// 创建ajax对象 兼容除了 IE5  IE6
		var ajax = new XMLHttpRequest();
	}else{
		// 创建ajax对象 兼容IE5  IE6
		var ajax=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	// 链接服务器 get
	ajax.open('get',url,true);
	// 发起请求  get
	ajax.send();

	// 接收信息  ajax 执行过程触发事件
	ajax.onreadystatechange=function(){
		//ajax步骤执行完毕,但不一定成功
		if(ajax.readyState==4){ 
			//这一步才是确保成功
			if(ajax.status==200){
				fnSuccess(ajax.responseText);
			}else{
				if(fnFailed){//如果第三个参数有传，我才执行
					fnFailed(ajax.status+" 未找到页面");
				}
				
			}
		}
	}
}
