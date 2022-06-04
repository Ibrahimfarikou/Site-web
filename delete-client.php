<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un client</title>
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
                <h1>Supprimer un client</h1>
            </div>

            <form action="" method="POST">
                <div class="delete-content">
                    <input type="text" name="id_client" placeholder="Entrer l'identifiant du client" required/>
                </div>
                <div class="delete-content">
                    <a href="list-client.php">Retour</a>
                    <input type="submit" value="Valider">
                </div>

                <?php
                    if(isset($_REQUEST['id_client'])){
                        $id_client=stripslashes($_REQUEST['id_client']);
                        $id_client=mysqli_real_escape_string($conn, $id_client);

                        $req = "SELECT ID, nom, prenom FROM `locataire` WHERE ID = '$id_client'";

                        $query ="DELETE FROM `locataire` WHERE ID = '$id_client'";

                        $result=mysqli_query($conn, $req) or die(mysqli_error());
                            
                        $row = mysqli_fetch_row($result);

                        if($row!=0){
                        echo "  <div class='delete-content'>
                                    <p>Suppression du client $row[0] - $row[1] $row[2] effectuée avec succès</p>
                                </div>";

                                mysqli_query($conn, $query) or die(mysqli_error());
                        } else{
                        echo "
                                <div class='delete-content'>
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