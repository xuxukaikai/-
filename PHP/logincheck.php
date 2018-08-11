
<?php  

    if($_POST['submit'])
    {  
        $user = $_POST["username"];  
        $psw = $_POST["userpass"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('�������û�������룡'); history.go(-1);</script>";  
        }  
        else  
        {  
            mysql_connect("localhost","root","root");  
            mysql_select_db("sys");  
            mysql_query("set names 'gbk'");  
            $sql = "select username,userpass from user where username = '$_POST[username]' and userpass = '$_POST[userpass]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //�����������ʽ������������  
                header("location:cha.php");  
            }  
            else  
            {  
                echo "<script>alert('�û�������벻��ȷ��');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";  
    }  
  ��
?>  