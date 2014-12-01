<?php
session_start();
//登录
if(!isset($_POST['sub'])){
    exit('非法访问!');
}
$name = $_POST['username'];
$pwd = $_POST['pwd'];
include('conn.php');
$check = mysql_query("SELECT * FROM persons WHERE name='$name' AND pwd='$pwd' 
limit 1");

if($result = mysql_fetch_array($check)){
    //登录成功
    $_SESSION['name'] = $name;
    $_SESSION['ID'] = $result['personID'];
    echo $name . ", 欢迎你！进入 <a href='my.php'>用户中心</a><br />";
    echo '点击此处 <a href="logout.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>