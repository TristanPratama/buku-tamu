<?php
// Destroy Session
session_start();
if ($_SESSION['status'] == 'login') {
	unset ($_SESSION);
	session_destroy();
}else{
	echo "gagal logout";
}
header("location: index.php");
?>