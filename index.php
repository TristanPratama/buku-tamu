<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<!-- Custom Icon -->
    <link rel="shortcut icon" href="asset/icon.png">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body class="signin-body">
	<main class="form-signin">
		<form action="session-cek.php" method="POST">
			<h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
			<div class="form-floating">
				<input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">
				<label for="floatingInput">Username</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
				<label for="floatingPassword">Password</label>
			</div>
			<br>
			<input type="submit" name="login" value="Sign In" class="w-100 btn btn-lg btn-primary"> 
			<p class="mt-5 mb-3 text-muted">&copy; Web Buku Tamu</p>
		</form>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>