<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Se Connecter</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
	<?php 
		require("config.php");
		session_start();

		if(isset($_POST['username'])) {
			$username=stripslashes($_REQUEST['username']);
			$username=mysqli_real_escape_string($conn, $username);
			$password=stripslashes($_REQUEST['password']);
			$password=mysqli_real_escape_string($conn, $password);

			$query="SELECT * FROM `utilisateur` WHERE username='$username' and password='$password'";

			$result=mysqli_query($conn, $query) or die(mysqli_error());
			$rows=mysqli_num_rows($result);

			if ($rows==1) {
				$_SESSION['username'] = $username;
				header("Location: main.php");
			}else{
				$message="Le nom d'utilisateur ou le mot de passe est incrorrect !";
			}
		}
	?>

	<section class="register">
		<div class="register-content">
			<div class="register-container">
				<spam class="register-spam">Se connecter</spam>

				<form action="" method="POST" name="login">
					<div class="input-register">
						<input type="text" name="username" placeholder="Nom d'utilisateur" required/>
						<i class="uil uil-user"></i>
					</div>

					<div class="input-register">
						<input type="password" name="password" placeholder="Mot de passe" required/>
						<i class="uil uil-lock"></i>
					</div>

					<div class="input-register button">
						<input type="submit" name="submit" value="Connexion" />
					</div>
					<?php if(!empty($message)) { ?>
							<p class="errorMessage"><?php echo $message; ?> </p>
					<?php } ?>
				</form>		
			</div>
		</div>
	</section>
</body>
</html>