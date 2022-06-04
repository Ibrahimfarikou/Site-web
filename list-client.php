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
    <title>Listes des Clients</title>
</head>
<body> 
    <?php
        $bdd = new PDO('mysql:host=localhost; dbname=bd_groupe14; charset=utf8','root','');
		$req = $bdd-> query('SELECT * FROM locataire'); 
    ?>

    <section class="list-client">
        <div class="list-client-text">
            <h3>Listes des Clients</h3>
        </div>

        <div class="list-client-text">
            <a href="delete-client.php">Supprimer un client</a>
        </div>

        <div class="table">
            <table class="table-content" border="3">
                <tr>
                    <th>Identifiant</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date de Naissance</th>
                    <th>Lieu de Naissance</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Numéro CNI</th>
                    <th>Nationalité</th>
                    <th>Profession</th>
                </tr>

                <?php
                    while($resultat=$req->fetch()){
                ?>

                <tr>
                    <td><?php echo $resultat['ID']; ?></td>
                    <td><?php echo $resultat['nom']; ?></td>
                    <td><?php echo $resultat['prenom']; ?></td>
                    <td><?php echo $resultat['dateborn']; ?></td>
                    <td><?php echo $resultat['placeborn']; ?></td>
                    <td><?php echo $resultat['mail']; ?></td>
                    <td><?php echo $resultat['telephone']; ?></td>
                    <td><?php echo $resultat['numeroCNI']; ?></td>
                    <td><?php echo $resultat['nationalite']; ?></td>
                    <td><?php echo $resultat['profession']; ?></td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>	
    </section>
</body>
</html>