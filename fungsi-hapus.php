<?php
// include database connection file
include_once("connect-db.php");
 
// Get id from URL to delete that user
$nomor = $_GET['nomor'];
 
// Delete user row from table based on given id
$query = mysqli_query($link, "DELETE FROM tamu WHERE nomor=$nomor");
 
// After delete redirect to Home, so that latest user list will be displayed.
if ($query) {
    echo "	<script>
                alert('Yeaay!!! Data $nama berhasil dihapus!');
                window.location.href='fungsi-tampil.php';
            </script>";
} else {
    echo "	<script>
                alert('Error!!! Data $nama gagal dihapus!');
                window.location.href='fungsi-tampil.php';
            </script>";
}
?>