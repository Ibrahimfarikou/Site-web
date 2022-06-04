<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une location</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <?php
        require("config.php");
    ?>
    <section class="delete">
        <div class="delete-contenair">
            <div class="delete-content">
                <h1>Supprimer une location</h1>
            </div>

            <form action="" method="POST">
                <div class="delete-content">
                    <input type="text" name="id_lease" placeholder="Entrer l'identifiant de la location" required/>
                </div>
                <div class="delete-content">
                    <a href="list-lease.php">Retour</a>
                    <input type="submit" value="Valider">
                </div>
               
                
                <?php
                    if(isset($_REQUEST['id_lease'])){
                        $id_lease=stripslashes($_REQUEST['id_lease']);
                        $id_lease=mysqli_real_escape_string($conn, $id_lease);

                        $req = "SELECT ID, nom_client, prenom_client, chambre FROM `locations` WHERE ID = '$id_lease'";

                        $query ="DELETE FROM `locations` WHERE ID = '$id_lease'";

                        $result=mysqli_query($conn, $req) or die(mysqli_error());
                            
                        $row = mysqli_fetch_row($result);

                        if($row!=0){
                            $chambre=$row[3];

                            $chambre=mysqli_real_escape_string($conn, $chambre);

                            $req2="UPDATE `chambre` SET `etat` = '' WHERE `chambre`.`numChambre` = '$chambre'";

                            echo "  <div class='delete-content'>
                                        <p>Suppression de la location $row[0] de $row[1] $row[2] effectuée avec succès !</p>
                                    </div>";
                                        mysqli_query($conn, $query) or die(mysqli_error());
                                        mysqli_query($conn, $req2) or die(mysqli_error());
                        } else{
                        echo "  <div class='delete-content'>
                                    <p>L'identifiant est incorrect !</p>
                                </div>";
                        }
                    }
                ?>
 
            </form>
        </div>
    </section>

</body>
</html>