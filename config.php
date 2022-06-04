<?php 
	define('BD_SERVER', 'localhost');
	define('BD_USERNAME', 'root');
	define('BD_PASSWORD', '');
	define('BD_NAME', 'bd_groupe14');

	$conn = mysqli_connect(BD_SERVER,BD_USERNAME,BD_PASSWORD,BD_NAME);
	if ($conn == false) {
		die ("ERREUR : Impossible de se connecter !". mysqli_connect_error());
	}
?>