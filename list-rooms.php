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
    <title>Listes des chambres</title>
</head>
<body>
<?php
        $bdd = new PDO('mysql:host=localhost; dbname=bd_groupe14; charset=utf8','root','');
        $req = $bdd -> query('SELECT * FROM chambre');

    ?>

    <section class="list-client">
        <div class="list-client-text">
            <h3>Listes des Chambres</h3>
        </div>

        <div class="table">
            <table class="table-content" border="3">
                <tr>
                    <th>Numero Chambre</th>
                    <th>Nom du bloc</th>
                    <th>Niveau</th>
                    <th>Batiment</th>
                    <th>Etat Chambre</th>
                </tr>

                <?php
                    while($resultat=$req->fetch()){
                ?>

                <tr>
                    <td><?php echo $resultat['numChambre']; ?></td>
                    <td><?php echo $resultat['nomBloc']; ?></td>
                    <td><?php echo $resultat['level']; ?></td>
                    <td><?php echo $resultat['batiment']; ?></td>
                    <td><?php echo $resultat['etat']; ?></td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>	
    </section>
</body>
</html>