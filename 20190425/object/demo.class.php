<?php 
// $str = 'a';
// $str .= 'b';
// $str .= 'c';
// echo $str;

// 对象的链式写法，不要重复写对象

// table.next().parent().prev().value();

// class num{
// 	public $str = '';
// 	public function a(){
// 		$this->str .= 'a';
// 		return $this;
// 	}
// 	public function b(){
// 		$this->str .= 'b';
// 		return $this;
// 	}
// 	public function c(){
// 		$this->str .= 'c';
// 		return $this;
// 	}
// 	public function show(){
// 		return 'result : '.$this->str;
// 	}
// }

// $n = new num();

// 普通对象的写法
// $n->a();
// $n->b();
// $n->c();
// echo $n->show();

// 链式写法
// echo $n->a()->c()->show();


// $sql ="SELECT * FROM wd_nav";
// $sql.=" WHERE n_id=1 " ;
// $sql.=" ORDER BY n_id ASC ";
// $sql.=" LIMIT 0,2" ;

class sql{
	public $dql="";
	public function where($where){
		$this->sql.=" WHERE $where " ;
		return $this;

	}
	public function order($colum,$order='ASC'){
		$this->sql.=" ORDER BY `$colum`  $order " ;
		return $this;

	}
	public function limit($limt,$start=0){
		$this->sql.=" WHERE $start,$limt " ;
		return $this;

	}
	public function select($table,$colum='*'){
		return "SELECT $colum FROM `{$table}`" .$this->sql;
	}


}
$sql = new sql;

echo $sql->where('n_id=1')->order('n_id')->limit('2','5')->select('wd_nav');







 ?>