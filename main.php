<?php
	session_start();

	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<title>Menu</title>
</head>
<body>

	<section class="main">
		<div class="main-bar">
			<ul>
				<li class="active"><a href="logout.php"><i class="uil uil-signout"></i>DECONNEXION</a></li>

				<li><i class="uil uil-home"></i><a href="index.php">MENU</a></li>

				<li><i class="uil uil-bed-double"></i><a href="#">CHAMBRE</a>
					<div class="sub-menu">
							<ul>
								<li><a href="rooms.php">Structure chambre</a></li>
								<li><a href="list-rooms.php">Liste chambre</a></li>
							</ul>
						</div>
				</li>

				<li><i class="uil uil-estate"></i><a href="blocks.php">BLOCS</a></li>

				<li><i class="uil uil-files-landscapes-alt"></i><a href="#">SERVICES</a>
					<div class="sub-menu">
						<ul>
							<li class="sub-menu-2"><a href="#">Réserver</a><i class="uil uil-angle-double-right"></i>
								<div class="sub-menu2-content">
									<ul>
										<li><a href="list-reserv.php">Listes des reservations</a></li>
										<li><a href="reserv-rooms-admin.php">Ajouter une reservation</a></li>
									</ul>
								</div>
							</li>
							<li class="sub-menu-2"><a href="#">Location</a><i class="uil uil-angle-double-right"></i>
								<div class="sub-menu2-content">
									<ul>
										<li><a href="list-lease.php">Listes des locations</a></li>
										<li><a href="lease-rooms-admin.php">Ajouter une location</a></li>
									</ul>
								</div>
							</li>
							<li><a href="register.php">Ajouter un Admin</a></li>
						</ul>
					</div>
				</li>

				<li><i class="uil uil-users-alt"></i><a href="#">CLIENTS</a>
					<div class="sub-menu">
						<ul>
							<li><a href="list-client.php">Listes des clients</a></li>
							<li><a href="add-client-admin.php">Ajouter un client</a></li>
						</ul>
					</div>
				</li>

				<li><i class="uil uil-box"></i><a href="activities.php">ACTIVITES</a></li>

				<li><i class="uil uil-phone"></i><a href="http://unniv-ndere.com">CONTACT</a></li>

			</ul>
		</div>
			
		<div class="main-text">
			<h1>Bienvenue <?php echo $_SESSION['username']; ?> !</h1>

			<div class="main-text-link">
				<a href="reserv-rooms-admin.php">Reservation</a>
				<a href="lease-rooms-admin.php">Location</a>
			</div>
		</div>
	</section>
	
</body>
</html>