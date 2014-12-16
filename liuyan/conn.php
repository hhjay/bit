<?php 
	$db = "message";
	error_reporting(E_ALL ^ E_DEPRECATED);
	$conn = @mysql_connect("localhost","root","");
	if (!$conn){die("连接数据库失败：" . mysql_error());}
	mysql_select_db("$db", $conn);
	date_default_timezone_set("Asia/ShangHai");
	// 连接数据库
?>