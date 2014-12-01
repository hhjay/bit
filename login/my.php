<?php
session_start();
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['ID'])){
    header("Location:login.html");
    exit();
}
//包含数据库连接文件
include('conn.php');
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
#$ly = $_SESSION['ly'];
$person = mysql_query("SELECT * FROM persons WHERE personID=$ID LIMIT 1");
$row = mysql_fetch_array($person);
echo '用户ID：' . $ID . '<br />';
echo '用户名：' . $name . '<br />';
#echo '注册日期：' . date("Y-m-d", $row['time']) . '<br />';
#echo "你说的：" . $ly;
echo '<a href="logout.php?action=logout">注销</a> 登录<br />';
?>