<?php
//處理查詢資料的請求
include_once "base.php";

$str=$_GET['str'];
$db=new DB("students");
$query=$db->all([]," where name like '%$str%'");         //模糊查詢like
foreach($query as $q){
  echo "結果一：".$q['name']."-".$q['class_num']."-".$q['dept']."</div>";
}


?>