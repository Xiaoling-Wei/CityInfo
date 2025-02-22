<?php
	//连接MySQL服务器
    $conn=mysqli_connect("localhost","root","12345678") or die("数据库服务器连接错误".$mysqli->connect_error);
    mysqli_select_db($conn,"db_admin") or die("数据库访问错误".$mysqli->error);//连接MySQL数据库db_pursey
    mysqli_query($conn,"set names utf8");//采用utf8编码方式
?>
