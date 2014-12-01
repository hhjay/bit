<?php
//注销登录 
if($_GET["action"] == "logout"){
    #unset($_SESSION['ID']);
    #unset($_SESSION['name']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
 ?>

