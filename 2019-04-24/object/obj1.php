<?php
header('content-type:text/html; charset=utf-8');
//面向对象编程
//要先有类才有对象
//如何定义类 
class  a{
    //属性  变量
    public $name;
    // 定义常量
    const PI =3.141696;

    //声明静态属性
    static $sta = 'static';
    //私有属性
    private $pri = '私有属性';
    
    //受保护属性
    protected $pro = '受保护的属性';

    //方法 函数
    public function pao(){
        echo $this->name.'跑的很快';
    }
    public function con(){
        //类里面访问常量
        return self::PI;
    }

    public function sta(){
        return self::$sta.'我的世界';
    }

}

// 类外部访问常量
// echo a::PI;exit;
// echo  a::$sta;exit;
// //如何不类变成对象 new
$obj = new a();

// // var_dump($obj);
// $obj->name = '随';
// $obj->pao();

// echo $obj->con();//测试访问类里面的常量
// echo $obj->sta();//测试访问类里面的静态属性

// =====继承 多态=====
class c extends a{
    public function zou(){
        echo '<br>走去世界';
    }

}
$c = new c;
// var_dump($c);
$c->pao();
$c->zou();
exit;
class b{
    //构造函数
    public function __construct(){
        echo 1;
    }
    
    //析构函数
    public function __destruct(){
        echo 3;
    }
    //普通函数
    public function a(){
        echo 2;
    }
}


$obj2 = new b();
echo 4444;
$obj2->a();




?>