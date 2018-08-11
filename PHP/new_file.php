<?php
$servername="localhost:3306";
$username="root";
$password="qazwsxedc961112";
$dbname="sys";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("连接失败:".$conn->connect_error);
}
$sql="create TABLE mydb(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if($conn->query($sql)===TRUE){
	echo "successfully";
}else
{
	echo "创建数据表错误：".$conn->errorl;
}
$conn->close();
?>
