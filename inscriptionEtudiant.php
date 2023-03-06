<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['numeromatricule'];

    $typeEtudiant = $_POST['optionChoisi'];
    switch ($typeEtudiant) {
        case 'choix1':
            $typeEtudiant = $_POST['choix1'];
            break;
        case 'choix2':
            $typeEtudiant = $_POST['choix2'];
            break;
       
    }

    $statusEtudiant = $_POST['optionStatus'];
    switch ($statusEtudiant) {
        case 'choice1':
            $statusEtudiant = $_POST['choice1'];
            break;
        case 'choice2':
            $statusEtudiant = $_POST['choice2'];
            break;
       
    }
    $email = $_POST['email'];


    $sql = "INSERT INTO `inscription`(`nom`, `prenom`, `email`, `mdp` ) 
            VALUES ('$nom','$prenom','$email','$mdp')";

    $resultat = mysqli_query($con, $sql);

    if($resultat){
        echo "Inscription avec succés";
        header('authentification.php');
    }

    else{
        die(mysqli_error($con));
    }



}



?>