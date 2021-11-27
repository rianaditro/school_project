<?php
	session_start();
	include_once("koneksi.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$ab=mysqli_query($koneksi,"SELECT * FROM login where user='$username' and pass='$password'");
	$bb=mysqli_num_rows($ab);
	if($bb > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
		header("location:home.php?act=tampil_pgw&d=all");
	}else{
		header("location:index.php?act=failed");
	}

?>