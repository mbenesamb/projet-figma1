
<?php
include 'connect.php';
$matriculeRecu = $_GET['modificationId'];
$sql = "SELECT * FROM `administrateur` WHERE matricule='$matriculeRecu'";
$result = mysqli_query($con,$sql);
$ligne =  mysqli_fetch_assoc($result);
$nomRecu = $ligne['nom'];
$prenomRecu = $ligne['prenom'];
$emailRecu = $ligne['email'];


if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $email = $_POST['email'];
    $sql = "UPDATE `administrateur` SET `nom`='$nom',`prenom`='$prenom',`matricule`='$matricule',`email`='$email' WHERE `matricule`='$matriculeRecu'";

    $resultat = mysqli_query($con, $sql);

    if($resultat){
       
        header('location:afficherAdministrateur.php');
    }

    else{
        die(mysqli_error($con));
    }



}



?>


