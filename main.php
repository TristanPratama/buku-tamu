<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
    <!-- Custom Icon -->
    <link rel="shortcut icon" href="asset/icon.png">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- FontAwesome Icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
	<!-- Custom CSS -->
	<link href="css/custom.css" rel="stylesheet">
</head>
<body class="main-body bg-light">
    <?php
        // Memblokir akses user tanpa login 
        session_start();
        if ($_SESSION['status'] != 'login') {
            echo "	<script>
                        alert('Harap lakukan login terlebih dahulu');
                        window.location.href='index.php';
                    </script>";
        }
	?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="main.php"><img src="asset/logo.png" width="10%" /></a>
            <div class="d-flex menu">
                <a href="main.php" class="navbar-brand">Home</a>
			</div>
            <div class="d-flex menu">
                <a href="fungsi-tampil.php" class="navbar-brand">Daftar Tamu</a>
			</div>
            <div class="d-flex menu">
                <a href="input.php" class="navbar-brand">Input Tamu</a>
			</div>
			<div class="d-flex menu">
				<a href="session-end.php" class="navbar-brand">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
		</div>
    </nav>
    <main class="container">
        <div class="row">
            <h2 class="text-center mt-5">Selamat datang di halaman utama Web Buku Tamu.</h2>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="user">
            <center>
                <img src="asset/profile.png" id="profile"><br><br>
                <h2><?php echo $_SESSION['username'] ?></h2>
            </center>
	    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>