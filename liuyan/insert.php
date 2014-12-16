<?php 
	include("conn.php");
	// if (isset($_GET['sub'])){
	$user = $_GET["user"];
	$mail = $_GET["mail"];
	$con = $_GET["con"];
	echo $user;
		$time = time();
		$up_sql = "INSERT INTO message(author,mail,main,time) VALUES
		('$user','$mail','$con','$time')";
		if(!mysql_query($up_sql,$conn)){
    		echo '抱歉！添加数据失败：',mysql_error(),'<br />';
		}else {
			include("fenye.php");
		}
	// }	
?>