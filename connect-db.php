<?php
// Koneksi ke database 'buku-tamu'
	$server	    ="localhost";
	$user	    ="root";
	$password	="";
	$db_name	="buku-tamu";
	$link = mysqli_connect($server,$user,$password);
	mysqli_select_db($link,$db_name);
?>