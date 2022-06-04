<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajouter un Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
	<?php
		require("config.php");

		if(isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
			$username=stripslashes($_REQUEST['username']);
			$username=mysqli_real_escape_string($conn, $username);

			$email=stripslashes($_REQUEST['email']);
			$email=mysqli_real_escape_string($conn, $email);

			$password=stripslashes($_REQUEST['password']);
			$password=mysqli_real_escape_string($conn, $password);

			$query="INSERT into `utilisateur` (username, email, password) VALUES ('$username', '$email', '$password')";

			$res=mysqli_query($conn, $query);
			if ($res) {
				echo "	<section class='mini-message'>
							<div class='mini-message-content'>
								<div class='mini-message-contenair'>
									<div class='message-content'>
										<h3>Vous êtes inscrit avec succès <i class='uil uil-smile'></i></h3>
									</div>
									
									<div class='message-content'>
										<p>Cliquez ici pour <a href='main.php'>Continuer</a></p>
									</div>
								</div>		
							</div>
						</section> ";
			} 
		}
			else{
		?>
		<section class="register">
			<div class="register-content">
				<div class="register-container">
					<spam class="register-spam">S'inscrire</spam>

					<form method="POST" name="register" action="">
						<div class="input-register">
							<input type="text" name="username" placeholder="Entrer votre nom" required/>
							<i class="uil uil-user"></i>
						</div>

						<div class="input-register">
							<input type="text" name="email" placeholder="Entrer votre email" required/>
							<i class="uil uil-envelope"></i>
						</div>

						<div class="input-register">
							<input type="password" name="password" placeholder="Créer un Mot de passe" required/>
							<i class="uil uil-lock"></i>
						</div>

						<div class="input-register button">
							<input type="submit" name="submit" value="S'inscrire" />
						</div>
					</form>	
				</div>
			</div>
		</section>	
	<?php	
		}
	?>	
</body>
</html>

