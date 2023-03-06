
<?php
include 'connect.php';
$numero = $_GET['modificationId'];
$sql = "SELECT * FROM `chambre` WHERE `numero` = '$numero'";
$result = mysqli_query($con,$sql);

$ligneRecu = mysqli_fetch_assoc($result);

$contenanceActuelleRecup = $ligneRecu['contenanceActuelle'];
$contenanceMaximaleRecup = $ligneRecu['contenanceMaximale'];
$localisationRecup = $ligneRecu['localisation'];


if(isset($_POST['submit'])){
    $contenanceActuelle = $_POST['contenanceActuelle'];
    $contenanceMaximale = $_POST['contenanceMaximale'];
    $localisation = $_POST['localisation'];
    $sql = "UPDATE `chambre` SET `numero`='$numero',`contenanceMaximale`='$contenanceMaximale',`contenanceActuelle`='$contenanceActuelle',`localisation`='$localisation' WHERE `numero`='$numero'";

    $resultat = mysqli_query($con, $sql);

    if($resultat){
       
        header('location:afficherChambre.php');
    }

    else{
        die(mysqli_error($con));
    }



}



?>


