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
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Reservation</title>
</head>
<body>
    <?php
        require("config.php");

        if(isset($_REQUEST['id_client']))
            {
                $id_client=stripslashes($_REQUEST['id_client']);
                $id_client=mysqli_real_escape_string($conn, $id_client);

                $nbrAdult=stripslashes($_REQUEST['nbrAdult']);
                $nbrAdult=mysqli_real_escape_string($conn, $nbrAdult);

                $nbrEnfant=stripslashes($_REQUEST['nbrEnfant']);
                $nbrEnfant=mysqli_real_escape_string($conn, $nbrEnfant);

                $dateEntree=stripslashes($_REQUEST['dateEntree']);
                $dateEntree=mysqli_real_escape_string($conn, $dateEntree);

                $dureeSejour=stripslashes($_REQUEST['dureeSejour']);
                $dureeSejour=mysqli_real_escape_string($conn, $dureeSejour);

                $chambre=stripslashes($_REQUEST['chambre']);
                $chambre=mysqli_real_escape_string($conn, $chambre);

                $batiment=stripslashes($_REQUEST['batiment']);
                $batiment=mysqli_real_escape_string($conn, $batiment);

                $modePaiement=stripslashes($_REQUEST['modePaiement']);
                $modePaiement=mysqli_real_escape_string($conn, $modePaiement);

                $occupe = "Occuper";

                $req = "SELECT nom, prenom FROM `locataire` WHERE ID = '$id_client'";
                
                $result=mysqli_query($conn, $req);
                
                $row = mysqli_fetch_row($result);
                
                $nom_client1= $row[0];
                $prenom_client1=$row[1];

                $nom_client= mysqli_real_escape_string($conn, $nom_client1);
                $prenom_client=mysqli_real_escape_string($conn, $prenom_client1);

                $query="INSERT into `reservation` (id_client, nom_client, prenom_client, nbrAdult, nbrEnfant, dateEntree, dureeSejour, chambre, batiment, modePaiement) 
                VALUES ('$id_client', '$nom_client', '$prenom_client', '$nbrAdult', '$nbrEnfant', '$dateEntree', '$dureeSejour', '$chambre', '$batiment','$modePaiement')";

                $req2 = "UPDATE `chambre` SET `etat` = 'Occuper' WHERE `chambre`.`numChambre` = '$chambre'";    

                $req3="SELECT * FROM `chambre` WHERE etat='$occupe' and numChambre='$chambre'";

                $res3=mysqli_query($conn, $req3) or die(mysqli_error());

                $rows=mysqli_num_rows($res3);

                if ($rows!=0) { 
                    $alerte="Chambre occupé !"; 
                }
                 else{
                    $res2=mysqli_query($conn, $req2) or die(mysqli_error());
                    $res=mysqli_query($conn, $query) or die(mysqli_error());

                    if ($res ) {
                        echo "  <section class='mini-message'>
                                    <div class='mini-message-content'>
                                        <div class='mini-message-contenair'>
                                            <div class='message-content'>
                                                <h3>Enregistrement effectuer <i class='uil uil-smile'></i></h3>
                                            </div>
                                            
                                            <div class='message-content'>
                                                <p>Cliquez ici pour <a href='index.php'>Continuer</a></p>
                                            </div>
                                        </div>		
                                    </div>
                                </section>";
                    } 
                }
            }
    ?>
        
        <section class="add-client">
        <div class="add-client-text">
                <h1>Reservation</h1>
           </div>

        <div class="add-content">
            <form action="" method="POST">
                <div class="add-contenair">
                    ID Client <input type="number" name="id_client" required/>
                </div>
                    
                <div class="add-contenair">
                    Nombre Adulte <input type="number" name="nbrAdult" required/>
                </div>

                <div class="add-contenair">
                    Nombre Enfant <input type="number" name="nbrEnfant" required/>
                </div>

                <div class="add-contenair">
                    Date d'entrée <input type="date" name="dateEntree" required/>
                </div>

                <div class="add-contenair">
                    Durée Sejours <input type="text" name="dureeSejour" required/>
                </div>

                <div class="add-contenair">
                        Mode de paiement:   <select name="modePaiement"> 
                                                <option>Orange Money</option>
                                                <option>Mtn mobile Money</option>
                                                <option>Visa</option>
                                                <option>Espece</option>
                                                <option>Virement</option>
                                            </select>   
                    </div>

                <div class="add-contenair">
                        Choisir bâtiment:   <select name="batiment">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                    </div>

                    <div class="add-contenair">
                        Choisir le bloc     <select name="bloc">
                                                <option>Bloc 72</option>
                                                <option>Bloc 48</option>
                                            </select>
                    </div>
                    
                    <div class="add-contenair">
                        Choisir le niveau   <select name="level">
                                                <option>Rez de chaussée</option>
                                                <option>Bloc 72 1e</option>
                                                <option>Bloc 72 2e</option>
                                                <option>Bloc 48 1e</option>
                                                <option>Bloc 48 2e</option>
                                            </select>
                    </div>
                    <div class="add-contenair">
                        Chambre preference: <select name="chambre">
                                                <option>A0X01</option>
                                                <option>A0X02</option>
                                                <option>A0X03</option>
                                                <option>A0X04</option>
                                                <option>A0X05</option>
                                                <option>A0X06</option>
                                                <option>A0X07</option>
                                                <option>A0X08</option>
                                                <option>A0X09</option>
                                                <option>A0X10</option>
                                                <option>A0X11</option>
                                                <option>A0X12</option>
                                                <option>A0X13</option>
                                                <option>A0X14</option>
                                                <option>A0X15</option>
                                                <option>A0X16</option>
                                                <option>A0X17</option>
                                                <option>A0X18</option>
                                                <option>A0X19</option>
                                                <option>A0X20</option>
                                                <option>A0X21</option>
                                                <option>A0X22</option>
                                                <option>A0X23</option>
                                                <option>A0X24</option>
                                                <option>A0X25</option>
                                                <option>A0X26</option>
                                                <option>A0X27</option>
                                                <option>A0X28</option>
                                                <option>A0X29</option>
                                                <option>A0X30</option>

                                                <option>B0X01</option>
                                                <option>B0X02</option>
                                                <option>B0X03</option>
                                                <option>B0X04</option>
                                                <option>B0X05</option>
                                                <option>B0X06</option>
                                                <option>B0X07</option>
                                                <option>B0X08</option>
                                                <option>B0X09</option>
                                                <option>B0X10</option>
                                                <option>B0X11</option>
                                                <option>B0X12</option>
                                                <option>B0X13</option>
                                                <option>B0X14</option>
                                                <option>B0X15</option>
                                                <option>B0X16</option>
                                                <option>B0X17</option>
                                                <option>B0X18</option>
                                                <option>B0X19</option>
                                                <option>B0X20</option>
                                                <option>B0X21</option>
                                                <option>B0X22</option>
                                                <option>B0X23</option>
                                                <option>B0X24</option>
                                                <option>B0X25</option>
                                                <option>B0X26</option>
                                                <option>B0X27</option>
                                                <option>B0X28</option>
                                                <option>B0X29</option>
                                                <option>B0X30</option>

                                                <option>C0X01</option>
                                                <option>C0X02</option>
                                                <option>C0X03</option>
                                                <option>C0X04</option>
                                                <option>C0X05</option>
                                                <option>C0X06</option>
                                                <option>C0X07</option>
                                                <option>C0X08</option>
                                                <option>C0X09</option>
                                                <option>C0X10</option>
                                                <option>C0X11</option>
                                                <option>C0X12</option>
                                                <option>C0X13</option>
                                                <option>C0X14</option>
                                                <option>C0X15</option>
                                                <option>C0X16</option>
                                                <option>C0X17</option>
                                                <option>C0X18</option>
                                                <option>C0X19</option>
                                                <option>C0X20</option>
                                                <option>C0X21</option>
                                                <option>C0X22</option>
                                                <option>C0X23</option>
                                                <option>C0X24</option>
                                                <option>C0X25</option>
                                                <option>C0X26</option>
                                                <option>C0X27</option>
                                                <option>C0X28</option>
                                                <option>C0X29</option>
                                                <option>C0X30</option>

                                                <option>D0X02</option>
                                                <option>D0X03</option>
                                                <option>D0X04</option>
                                                <option>D0X05</option>
                                                <option>D0X06</option>
                                                <option>D0X07</option>
                                                <option>D0X08</option>
                                                <option>D0X09</option>
                                                <option>D0X10</option>
                                                <option>D0X11</option>
                                                <option>D0X12</option>
                                                <option>D0X13</option>
                                                <option>D0X14</option>
                                                <option>D0X15</option>
                                                <option>D0X16</option>
                                                <option>D0X17</option>
                                                <option>D0X18</option>
                                                <option>D0X19</option>
                                                <option>D0X20</option>
                                                <option>D0X21</option>
                                                <option>D0X22</option>
                                                <option>D0X23</option>
                                                <option>D0X24</option>
                                                <option>D0X25</option>
                                                <option>D0X26</option>
                                                <option>D0X27</option>
                                                <option>D0X28</option>
                                                <option>D0X29</option>
                                                <option>D0X30</option>
                                            </select>
                </div>

                <?php if(!empty($alerte)) { ?>
					<p class="errorMessage"><?php echo $alerte; ?> </p>
				<?php } ?>

                <div class="add-button">
                    <input type="submit"  value="Valider">
                </div>
            </form>
             
        </div>
    </section>

</body>
</html>