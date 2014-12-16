<?php 
function newSql(){// 新建数据库
	include("conn.php");
	if (mysql_query("CREATE DATABASE message",$conn)){
  		echo "新建成功";
  	}else{
  		echo "新建数据库失败: " . mysql_error();
  	}
	mysql_close($conn);	
}
function newList(){// 新建表
	include("conn.php");
	$sql = "CREATE TABLE message 
	(
		id int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id), 
		author text(128),
		main text(1024),
		mail text(128),
		time int(16)
	)";
	if(!$sql){echo "失败";}else{echo "成功";}
	mysql_query($sql,$conn);
	mysql_close($conn);
}
//newList();
//newSql();
?>