<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = @mysql_connect("localhost","root","");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("db", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
?>