<?php 
include 'connect-db.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$komentar = $_POST['komentar'];

$query = mysqli_query($link,"INSERT INTO tamu (nama, email, tanggal, komentar) 
                                    values('$nama','$email','$tanggal', '$komentar')");
if($query){
	echo "	<script>
                alert('Yeaay!!! Data $nama berhasil ditambahkan!');
                window.location.href='fungsi-tampil.php';
            </script>";
} else {
    echo "	<script>
                alert('Error!!! Data $nama gagal ditambahkan!');
                window.location.href='input.php';
            </script>";
}
?>