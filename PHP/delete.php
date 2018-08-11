<?php  
header("content-type:text/html;charset=utf-8");
require_once 'functions.php';  
  
//排空错误  
if(empty($_GET['sname'])){  
    die('name is empty');  
}  
//连接数据库  
connnetDb();  
  
$sname=$_GET['sname'];  
  
//删除指定数据  
mysql_query("DELETE FROM dingdan WHERE sname='{$sname}'");  
//排错并返回页面  
if(mysql_error()){  
    echo mysql_error();  
}else{  
    header("Location:cha.php");  
}  