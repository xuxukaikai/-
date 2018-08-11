<?php  
    require_once 'functions.php';  
?>  
<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="UTF-8">  
    <title>所有用户</title>  
    <style>  
        table{  
            border-collapse: collapse;
			font-size:24px;
			margin-top:100px;
        }  
        th,td{  
            border:1px solid #ccccff;  
            padding: 5px;  
        }  
        td{  
            text-align: center;  
        } 
		.top {
	height: 35px;
	line-height: 40px;
	position: fixed;
	top: 0;
	width: 100%;
	background: #999;
	color: #fff;
	font-family: Arial;
	font-size: 18px;
	letter-spacing: 1px;
} 
    </style>  
</head>  
<body style="background:url(../img/%E7%B4%A2%E5%B0%BC%E8%83%8C%E6%99%AF.jpg)"> 

<div class="top">&nbsp;&nbsp;&nbsp;<a href="main.html">返回主页</a> <a href="../add.html">添加用户</a> </div>

 
<table align="center">  
    <tr><th>名字</th><th>性别</th><th width="200px">地址</th><th width="150px">邮箱</th><th width="100px">时间</th><th width="250px">设计描述</th><th>修改/删除</th></tr>  
<?php  
//连接数据库  
connnetDb();  
//查询数据表中的所有数据,并按照id降序排列  
$result=mysql_query("SELECT * FROM dingdan ORDER BY sname DESC");  
//获取数据表的数据条数  
$dataCount=mysql_num_rows($result);  
//echo $dataCount;  
//打印输出所有数据  
  
  
for($i=0;$i<$dataCount;$i++){  
    $result_arr=mysql_fetch_assoc($result);  
    $sname=$result_arr['sname'];  
    $sex=$result_arr['sex'];  
    $address=$result_arr['address']; 
	$email=$result_arr['email']; 
	$time=$result_arr['time'];
	$miao=$result_arr['miao'];
    //print_r($result_arr);  
    echo "<tr><td>$sname</td><td>$sex</td><td>$address</td><td>$email</td><td>$time</td><td>$miao</td><td><a href='edituser.php?sname=$sname'>修改</a> <a href='delete.php?sname=$sname' onclick=\"return confirm('你确认删除吗？')\">删除</a></td></tr>"; 
	 
}  
?>  
</table>  
</body>  
</html>  