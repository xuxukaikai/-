<?php  
require_once 'functions.php';?>  
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<title>注册界面</title>
<style>
body {
	color: #fff;
	font-family: "微软雅黑";
	font-size: 14px;
}
.wrap1 {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	margin: auto
}
.main_content {
	background: url(../img/main_bg.png) repeat;
	margin-left: auto;
	margin-right: 700px;
	text-align: left;
	float: right;
	border-radius: 8px;
}
.form-group {
	position: relative;
}
.login_btn {
	background: #3872f6;
	color: #fff;
	font-size: 15px;
	width: 120px;
	line-height: 50px;
	border-radius: 3px;
	border: none;
	-webkit-transition-property: background-color;
	-webkit-transition-duration: 0.3s;
	-webkit-transition-timing-function: ease;
}
.login_btn:hover {
	background-color: #486AAA;
}
.btn1 {
	background: #3872f6;
	color: #fff;
	font-size: 15px;
	width: 120px;
	line-height: 50px;
	border-radius: 3px;
	border: none;
	margin: 20px;
	-webkit-transition-property: background-color;
	-webkit-transition-duration: 0.3s;
	-webkit-transition-timing-function: ease;
}
.btn1:hover {
	background-color: #486AAA;
}
.login_input {
	width: 400px;
	border: 1px solid #3872f6;
	border-radius: 3px;
	line-height: 40px;
	padding: 2px 5px 2px 30px;
	background: none;
	height: 40px;
}
.login_input1 {
	width: 400px;
	border: 1px solid #3872f6;
	border-radius: 3px;
	line-height: 40px;
	padding: 2px 5px 2px 30px;
	background: none;
	height: 120px;
}
.font16 {
	font-size: 16px;
	font-weight: bold;
}
.mg-t20 {
	margin-top: 30px;
}
 @media (min-width:200px) {
.pd-xs-20 {
	padding: 20px;
}
}
 @media (min-width:768px) {
.pd-sm-50 {
	padding: 50px;
}
}
.footer {
	height: 20px;
	line-height: 20px;
	position: fixed;
	bottom: 0;
	width: 100%;
	text-align: center;
	background: #333;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
	letter-spacing: 1px;
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
 
<body style="background:url(../img/铁三角背景.jpg) no-repeat;">
<?php  
    if(!empty($_GET['sname'])){  
        //连接mysql数据库  
        connnetDb();  
  
  
        //查找id  
        $sname=intval($_GET['sname']);  
        $result=mysql_query("SELECT * FROM dingdan WHERE sname=$sname");  
        if(mysql_error()){  
            die('can not connect db');  
        }  
        //获取结果数组  
        $result_arr=mysql_fetch_assoc($result);  
    }else{  
        die('id not define');  
    }  
?>  
<a href="main.html"> 
<div class="top">&nbsp;&nbsp;&nbsp;返回主页</div>
</a>


<div class="container wrap1" style="height:450px;">
		<div class="center-auto pd-sm-50 pd-xs-20 main_content">
				<h2  align="center" >请输入您要修改的订单信息</h2>
				<p>&nbsp;</p>
				<p align="center" class="text-center font16">订单修改</p>
				<form action="edituser_server.php"  method="POST">
						<div class="mg-t20">
								<div align="center"><i class="icon-user icon_font"></i>
										<input name="sname" type="text" class="login_input" id="sname" value="<?php echo $result_arr['sname']?>" hidden="hidden"/>
								</div>
						</div>
						  <p>性别: <input type="radio" value="男" name="sex" id="sex"/>男
    <input type="radio" value="女" name="sex" id="sex"/>女</p>
						<div class="mg-t20">
								<div align="center"><i class="icon-lock icon_font"></i>
										<input name="address" type="text" class="login_input" id="address"  placeholder="请输入地址" />
								</div>
						</div>
						<div class="mg-t20">
								<div align="center"><i class="icon-lock icon_font"></i>
										<input name="email" type="text" class="login_input" id="email"  placeholder="请输入邮箱" />
								</div>
							</div>	
						<div class="mg-t20">
								<div align="center"><i class="icon-lock icon_font"></i>
										<input name="time" type="text" class="login_input" id="time"  placeholder="请输入订单完成时间" />
								</div>
						</div>
						<div class="mg-t20">
								<div align="center"><i class="icon-lock icon_font"></i>
										<input name="miao" type="text" class="login_input1" id="miao"  placeholder="请输入耳机设计描述" />
								</div>
						</div>
						
						<p></p>
								
						<div align="center">
								<input type="submit" class="login_btn" name="submit" id='submit' onclick="" value="修改" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="button" onclick="window.location.href='index2.html'" class="btn1" value="返回" name="zc"/>
						</div>
				</form>
		</div>
		<!--row end--> 
</div>
<!--container end-->
<div style="text-align:center;"> </div>
<div class="footer">版权所有：15052080 </div>
</body>
</html>  
</body>  
</html> 