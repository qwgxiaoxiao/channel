<?php 
if($_COOKIE['user']) {
	include "./page/chat.html";
}else {
	header("Location: ./datahandle/login.php");
}