<?php  
require_once 'functions.php';  
if(empty($_POST['sname'])){  
    die('sname is empty');  
}  
if(empty($_POST['sex'])){  
    die('sex is empty');  
}  
if(empty($_POST['address'])){  
    die('age is empty');  
}  
if(empty($_POST['email'])){  
    die('email is empty');  
}  
if(empty($_POST['time'])){  
    die('time is empty');  
}  
if(empty($_POST['miao'])){  
    die('描述 is empty');  
}  
$sname=$_POST['sname'];
$address=$_POST['address'];
$sex=$_POST['sex']; 
$email=$_POST['email'];
$time=$_POST['time'];
 $miao=$_POST['miao'];
  
//连接数据库  
connnetDb();  
  
  
//修改指定数据  
mysql_query("UPDATE dingdan SET sex='$sex',address='$address',email='$email',time='$time',miao='$miao' WHERE sname='$sname'");  
  
  
//排错并返回  
if(mysql_error()){  
    echo mysql_error();  
}else{  
    header("Location:cha.php");  
}  