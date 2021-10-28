<?php 
	header('Content-type:text/html; charset=utf-8');
	// 开启Session
	session_start();
 
	// 处理用户登录信息
	if (isset($_POST['login'])) {
		# 接收用户的登录信息
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		header('location:Main.html');
		}
	}
 ?>