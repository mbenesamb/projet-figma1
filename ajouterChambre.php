<?php
include 'connect.php';

if(isset($_POST['save'])){

    $numeroDeChambre = $_POST['numchambre'];
    $contenanceMaximale = $_POST['ctnMax'];
    $contenanceActuelle = $_POST['ctnActu'];
    $localisation= $_POST['loc'];
    $sql = "insert into `chambre` (numero,contenanceMaximale,contenanceActuelle,localisation)
    values('$numeroDeChambre','$contenanceMaximale','$contenanceActuelle','$localisation')";
    $resultat = mysqli_query($con,$sql);
    if($resultat){
         header('location:afficherChambre.php');
          
    }
    else{
        die(mysqli_error($con));
    }



}

?>


