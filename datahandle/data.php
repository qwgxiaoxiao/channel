<?php
//连接数据库，获得聊天内容
header("content-type:text/html;charset=utf-8");
$link = mysql_connect('localhost','root','westos');
mysql_select_db('chat', $link);
mysql_query('set names utf8');

$maxID = $_GET['maxID'];

$sql = "select * from talks where id>'$maxID' order by id";
$qry = mysql_query($sql);


//从数据库里边获得的信息以二维数组给组织起来，然后变成json信息返回给客户端
$json_data = array();
while($rzt = mysql_fetch_assoc($qry)){
    $json_data[] = $rzt;
}

echo json_encode($json_data);