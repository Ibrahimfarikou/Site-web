<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet"> 
    <title>Ajouter un Client</title>
</head>
<body>
    <?php
		require("config.php");

        if(isset($_REQUEST['nom']))
            {
                $nom=stripslashes($_REQUEST['nom']);
                $nom=mysqli_real_escape_string($conn, $nom);

                $prenom=stripslashes($_REQUEST['prenom']);
                $prenom=mysqli_real_escape_string($conn, $prenom);

                $dateborn=stripslashes($_REQUEST['dateborn']);
                $dateborn=mysqli_real_escape_string($conn, $dateborn);

                $placeborn=stripslashes($_REQUEST['placeborn']);
                $placeborn=mysqli_real_escape_string($conn, $placeborn);

                $mail=stripslashes($_REQUEST['mail']);
                $mail=mysqli_real_escape_string($conn, $mail);

                $telephone=stripslashes($_REQUEST['telephone']);
                $telephone=mysqli_real_escape_string($conn, $telephone);

                $numeroCNI=stripslashes($_REQUEST['numeroCNI']);
                $numeroCNI=mysqli_real_escape_string($conn, $numeroCNI);

                $nationalite=stripslashes($_REQUEST['nationalite']);
                $nationalite=mysqli_real_escape_string($conn, $nationalite);

                $profession=stripslashes($_REQUEST['profession']);
                $profession=mysqli_real_escape_string($conn, $profession);

                $query="INSERT into `locataire` (nom, prenom, dateborn, placeborn, mail, telephone, numeroCNI, nationalite, profession) 
                VALUES ('$nom', '$prenom', '$dateborn', '$placeborn', '$mail', '$telephone', '$numeroCNI', '$nationalite', '$profession')";

                $res=mysqli_query($conn, $query);
                $uid = mysqli_insert_id($conn);
               
                if ($res) {
                    echo"	<section class='mini-message'>
                                <div class='mini-message-content'>
                                    <div class='mini-message-contenair'>
                                        <div class='message-content'>
                                            <h3>Votre identifiant est <i class='choice'>$uid</i></h3>
                                        </div>

                                        <div class='message-content'>
                                            <h3>Que desiriez-vous effectuer :</h3>
                                        </div>
                                        
                                        <div class='message-content'>
                                            <p>Cliquez ici pour faire une <a href='reserv-rooms-client.php'>reservation</a></p>
                                        </div>

                                        <div class='message-content'>
                                            <p>Cliquez ici pour faire une <a href='lease-rooms-client.php'>location</a></p>
                                        </div>
                                    </div>		
                                </div>
                            </section> ";
                } 
            }
			else{
		?>

    <section class="add-client">
        <div class="add-client-text">
            <h1>Formulaire à remplir</h1>
        </div>

        <div class="add-content">
            <form action="" method="POST">
                <div class="add-contenair">
                    Nom  <input type="text" name="nom" required/>
                </div>

                <div class="add-contenair">
                    Prenom  <input type="text" name="prenom">
                </div>

                <div class="add-contenair">
                    Date de Naissance  <input type="date" name="dateborn" required/>
                </div>
                
                <div class="add-contenair">
                    Lieu de Naissance <input type="text" name="placeborn" required/>
                </div>

                <div class="add-contenair">
                    Email  <input type="text" name="mail">
                </div>

                <div class="add-contenair">
                    Telephone  <input type="text" name="telephone" required/>
                </div>

                <div class="add-contenair">
                    N° CNI  <input type="text" name="numeroCNI" required/>
                </div>

                <div class="add-contenair">
                    Nationalie  <input type="text" name="nationalite" required/>
                </div>

                <div class="add-contenair">
                    Profession  <input type="text" name="profession">
                </div>

                <div class="add-button">
                    <input type="submit" name="submit" value="Continuer" />
                    <a href="index.php">Retour</a>
                </div>
            </form>
        </div>
    </section>

    <?php	
		}
	?>
</body>
</html>