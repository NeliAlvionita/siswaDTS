<?php  

session_start();

include 'koneksi.php';

if (isset($_POST['submit'])) {
	
	foreach ($_POST as $key => $val) {
		${$key} = $val;
	}

	$query	=	"SELECT a.password,a.role_user as role,a.id as id_akun, b.id as id_daftar from akun a, pendaftaran b 
				WHERE email='$email' 
				AND b.id = a.id_user";

	$exec 	= mysqli_query($conn, $query);

	if ($exec) {

		if (mysqli_num_rows($exec) > 0) {
			while ($rows = mysqli_fetch_array($exec)) {
			    
			    if (password_verify($password,$rows['password'])) {
			    	$_SESSION['role_user'] 	= $rows['role'];
			    	$_SESSION['auth']		= $rows['id_daftar'];

			    	
			    	echo'<script> window.location="data-siswa/index.php"; </script> ';

			    }else{
			    	
						echo "<div class='alert alert-success alert-dismissable'>
						  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Gagal</strong> Password Salah
						</div>";
				
			    }

			}
		}else{

			$query	=	"SELECT password,role_user,id from akun 
				WHERE email='$email'";

			$exec 	= mysqli_query($conn, $query);

			if ($exec) {
				if (mysqli_num_rows($exec) > 0) {
					while ($rows = mysqli_fetch_array($exec)) {
					    
					    if (password_verify($password,$rows['password'])) {
					    	$_SESSION['role_user'] 	= $rows['role_user'];
					    	$_SESSION['auth']		= $rows['id'];

					    	echo'<script> window.location="data-siswa/index.php"; </script> ';

					    }else{
					    	echo 'Password Salah!';
					    }

					}
				}else{
					echo "<div class='alert alert-success alert-dismissable'>
						  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Gagal</strong> User tidak terdaftar
						</div>";
				}
			}else{
				
				$exec 	= mysqli_query($conn, $query);

				
			}
		}
	}else{

		echo mysqli_error($conn);

	}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>SMA DTS | Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>


<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper mt-5">
					<div class="card fat mt-5">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="form-group m-0">
									<input type="Submit" value="Login" name="submit" class="btn btn-primary btn-block">
								</div>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="register.php">Register</a>
								</div>
							</form>


					</div>

				</div>

		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>

</html>