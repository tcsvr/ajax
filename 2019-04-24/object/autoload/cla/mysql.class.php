<?php
header('content-type:text/html; charset=utf-8');
class mysql{
//什么情况下定义属性
//如果这个方法要在另一个方法里面应用的话就要把变量变成属性
    public $conn;
    public $sql;
    public $table;
    public $data;
    public function __construct($hostname,$username,$password,$dbname,$charset='utf8'){//构造函数 new 就直接执行
        $this->conn = mysql_connect($hostname,$username,$password)or die ('link error');//链接数据库
        mysql_set_charset($charset);//设置编码
        mysql_select_db($dbname)or die ('select error');//选择数据库

    }
    //多条查询
    public function getAll(){
        $result = mysql_query($this->sql,$this->conn);
        $list = array();
        if($result && mysql_num_rows($result)>0){
            while($row = mysql_fetch_assoc($result)){
                $list[]= $row;
            }
            return $list;  //有数据的数组
        } else{
            return $list;  //空数组
        }
    }
    // 单条查询
    public function getOne(){
        $result = mysql_query($this->sql,$this->conn);
        if($result && mysql_num_rows($result)>0){
            return mysql_fetch_assoc($result);
        }else{
            return array();
        }



    }

    //增
    public function insert(){
        $sql = "INSERT INTO {$this->table} ";
        $sql .= "(`".imploade("`,`", array_keys($this->data))."`,");
        $sql .= " VALUES ";
        $sql .= "('".implode("','",$this->data)."')";
        $bool = mysql_query($sql);
        if($bool && mysql_affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    //改

    $sql = "UPDATE $this->table SET ``= '' , ``= '' WHERE id=1"

    public function update(){

    }
    

    //删



    public function __destruct(){
        mysql_close($this->conn);//析构函数 最后执行  关闭数据库
    }



}

$mysql = new mysql('localhost','root','root','b1901_wendo');

// $mysql->sql = "SELECT * FROM wd_nav";
$mysql->table = "wd_nav";
// $mysql->data = 'n_name=>name','n_link=>link'
// $nav = $mysql->getAll();
print_r($nav);


?>