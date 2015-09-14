<?php
header("content-type:text/html;charset=utf-8");
$link = mysql_connect('localhost','root','westos');
mysql_select_db('chat', $link);
mysql_query('set names utf8');

//获得post数据，insert语句写数据
$words  = $_POST['words'];
$user = $_COOKIE['user'];
echo $user;

$sql = "insert into talks values (null,'$user','$words',now());";
$qry = mysql_query($sql);

if($qry){
    echo "添加成功！";
} else {
    echo "添加失败！";
}