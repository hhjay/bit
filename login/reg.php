<?php
if(!isset($_POST['sub'])){
    exit('非法访问!');
}
$name = $_POST['username'];
$pwd = $_POST['pwd1'];
$ly = $_POST['ly'];

include('conn.php');
//检测用户名是否已经存在
$check = mysql_query("SELECT personID FROM persons WHERE name='$name' LIMIT 1");
if(mysql_fetch_array($check)){
    echo '错误：用户名 ,' . $name . ', 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}

//写入数据
$pwd = $pwd;
$time = time();
$sql = "INSERT INTO persons(name,pwd,ly,time)VALUES('$name','$pwd','$ly',$time)";
if(mysql_query($sql,$conn)){
    exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
} else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>