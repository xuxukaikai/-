<?php  
header("content-type:text/html;charset=utf-8"); 
    if(isset($_POST["submit"]) && $_POST["submit"] == "添加")  
    {  
        $sname = $_POST["sname"];  
        $sex = $_POST["sex"];  
        $address = $_POST["address"];  
		$email = $_POST["email"]; 
		$time = $_POST["time"];
		$miao = $_POST["miao"];  
        if($sname == "" || $sex == "" || $address == "" || $email == "" || $time == "" || $miao == "")  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else  
        {  
           
                mysql_connect("localhost:3306","root","qazwsxedc");   //连接数据库  
                mysql_select_db("sys");  //连接数据库  
               mysql_query("set names 'gdk'");
                //SQL语句  
                    //执行SQL语句  
         
                    $sql_insert = "insert into dingdan (sname,sex,address,email,time,miao) values('$_POST[sname]','$_POST[sex]','$_POST[address]','$_POST[email]','$_POST[time]','$_POST[miao]')";  
                    $res_insert = mysql_query($sql_insert); 
                    //$num_insert = mysql_num_rows($res_insert); 
                    if($res_insert)
                    {  
                        echo "<script>alert('添加成功！'); location='cha.php';</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }    
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>  