<?php
header('Content-type: text/html; charset=utf-8');
$link = mysql_connect('localhost','root','westos');
mysql_select_db('chat', $link);
mysql_query('set names utf8');
$user = $_POST['user'];
$words = 'hello everyone!';
$sql = "insert into talks values (null,'$user','$words',now());";

$action = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'login';

if( $action == 'login' ) {
	include "../page/login.html";
}elseif( $action == 'signin' ) {	
	$qry = mysql_query($sql);
	setcookie('user',"$user");
	header("Location: ../datahandle/chat.php"); 
}