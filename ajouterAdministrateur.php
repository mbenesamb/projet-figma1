<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['numeromatricule'];

    $email = $_POST['email'];


    $sql = "INSERT INTO `administrateur`( `matricule`,`nom`, `prenom`,`email`) 
            VALUES ('$matricule','$nom','$prenom','$email')";

    $resultat = mysqli_query($con, $sql);

    if($resultat){
        header('location:afficherAdministrateur.php');
    }

    else{
        die(mysqli_error($con));
    }



}



?>


