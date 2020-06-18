<?php
include "base.php";

$db=new DB("students");
$id=$_POST['id'];

$res=$db->del($id);

echo $res;


?>