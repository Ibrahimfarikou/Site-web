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
    <title>Listes des locations</title>
</head>
<body> 
    <?php
        $bdd = new PDO('mysql:host=localhost; dbname=bd_groupe14; charset=utf8','root','');
        $req = $bdd -> query('SELECT * FROM locations');

    ?>

    <section class="list-client">
        <div class="list-client-text">
            <h3>Listes des Locations</h3>
        </div>

        <div class="list-client-text">
            <a href="delete-lease.php">Supprimer une location</a>
        </div>

        <div class="table">
            <table class="table-content" border="3">
                <tr>
                    <th>ID Location</th>
                    <th>ID client</th>
                    <th>Nom Client</th>
                    <th>Prenom client</th>
                    <th>Nombre d'Adult</th>
                    <th>Nombre d'Enfant</th>
                    <th>Date d'Entrée</th>
                    <th>Durée Séjour</th>
                    <th>Chambre</th>
                    <th>Mode Paiement</th>
                </tr>

                <?php
                    while($resultat=$req->fetch()){
                ?>

                <tr>
                    <td><?php echo $resultat['ID']; ?></td>
                    <td><?php echo $resultat['id_client']; ?></td>
                    <td><?php echo $resultat['nom_client']; ?></td>
                    <td><?php echo $resultat['prenom_client']; ?></td>
                    <td><?php echo $resultat['nbrAdult']; ?></td>
                    <td><?php echo $resultat['nbrEnfant']; ?></td>
                    <td><?php echo $resultat['dateEntree']; ?></td>
                    <td><?php echo $resultat['dureeSejour']; ?></td>
                    <td><?php echo $resultat['chambre']; ?></td>
                    <td><?php echo $resultat['modePaiement']; ?></td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>	
    </section>
</body>
</html>