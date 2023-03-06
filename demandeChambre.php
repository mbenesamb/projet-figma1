<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];

    $niveauEtude = $_POST['niveauEtudiant'];


    $sql = "INSERT INTO `demandechambre`(`matricule`, `nom`, `prenom`, `niveauEtude`) 
            VALUES ('$matricule','$nom','$prenom','$niveauEtude')";

    $resultat = mysqli_query($con, $sql);

    if($resultat){
        $msg = "Votre demande a ete pris en compte";
        echo $msg;
       
        
        header('location:menuEtudiant.php');
    }

    else{
        die(mysqli_error($con));
    }



}



?>


