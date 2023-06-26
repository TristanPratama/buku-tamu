<?php
include 'connect-db.php';

if (isset ( $_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysqli_query($link,"select * from user where username='$username' and  password='$password'" );
	$cek_baris = mysqli_num_rows($query);
	$kolom = mysqli_fetch_array($query);
	if($cek_baris > 0 ){
		session_start();
		$_SESSION['userid']= $kolom['userid'];
		$_SESSION['username']=$kolom['username'];
		$_SESSION['password']=$kolom['password'];
		$_SESSION['status'] = "login";
		header("location: main.php");
	}else{
		echo "	<script>
					alert('username atau password yang anda masukkan salah');
					window.location.href='index.php';
				</script>";
	}
}
?>