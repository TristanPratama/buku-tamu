<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT PAGE</title>
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

        <div class="col-md-8 col-lg-12">
            <h4 class="mb-3">Input Data Diri Tamu</h4>
            <form class="needs-validation" novalidate action="fungsi-tambah.php" method="POST">
            <div class="row g-3">

                <div class="col-sm-12">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" required>
                    <div class="invalid-feedback">
                    Masukkan Nama lengkap terlebih dahulu.
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="invalid-feedback">
                    Masukkan Email terlebih dahulu.
                    </div>
                </div>

                <div class="col-12">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="datetime-local" class="form-control" name="tanggal" required>
                    <div class="invalid-feedback">
                      Masukkan Tanggal terlebih dahulu.
                    </div>
                </div>

                <div class="col-12">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea class="form-control" name="komentar" style="height: 100px"></textarea>
                </div>

                <hr class="my-4">
                <input type="submit" name="submit" value="Simpan" class="w-100 btn btn-primary btn-lg">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
</body>
</html>