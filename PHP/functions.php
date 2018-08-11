<?php  
require_once 'config.php';  
function connnetDb(){  
    //连接mysql
    $conn=mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);  
    //�ų�������ݿ��쳣����  
    if(!$conn){  
        die('can not connect db');  
    }  
    //��mysql��ѡ��myapp��ݿ�  
    mysql_select_db("sys");  
    return $conn;  
}  