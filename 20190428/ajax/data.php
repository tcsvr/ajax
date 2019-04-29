<?php
include('include/init.php');
// pre($_GET);
$pid = isset($_GET['pid'])?$_GET['pid']:1;
$sql = "SELECT * FROM ecs_region WHERE parent_id=$pid ";
$nav = getAll($sql);
// pre($nav);

// json_decode(json)

$json = json_encode($nav); //编码 把数组转换成json
echo $json;

// $arr = json_decode($json,1); //编码 吧json 转换成 数组





// echo '<nav>';
//     foreach($nav as $value){
    //         echo '<item>';
    //             foreach($value as $k=>$v){
        //                 echo '<'.$k.'>'.$v.'</'.$k.'>';
        //             }
        //         echo '</item>';
        //     }
        // echo '</nav>';
        
        // $t = $_GET['t'];
        // $sql = "UPDATE  `b1901_wendo`.`wd_nav` SET  `n_isshow` =  '$t' WHERE  `wd_nav`.`n_id` =1";
        // $bool = mysql_query($sql);
        // if($bool){
            //     echo 'yes';
            // }else{
                //     echo 'no';
                // }
                
                
?>