    //回调函数
    function myajax(url,fnSuccess,fnFailed){
        if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
            var ajax =new XMLHttpRequest();
        }else{// code for IE6, IE5
            var ajax =new ActiveXObject("Microsoft.XMLHTTP");
        }
        //创建 ajax 对象
        // var ajax = new XMLHttpRequest();
        // alert(ajax);
    
        //链接服务器get
        ajax.open('get',url,true);
        //发起请求get
        ajax.send();
    
        //链接服务器 post
        // ajax.open('post','date.php?t='+Math.random(),true);
        // 必须加头信息
        // ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        //发起请求 post 传参
        // ajax.send('id=1&caid=2');
    
        //接收信息
        ajax.onreadystatechange = function(){
            if(ajax.readyState ==4 ){
                if(ajax.status == 200){
                    fnSuccess(ajax.responseText);
                }else{
                    if(fnFailed){//第三个参数有传，我才执行
                        fnFailed(ajax.status+'文找到页面');
                    }
                }
            }
        } 
    
    }
    