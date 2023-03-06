
<?php
include 'connect.php';
$matriculeRecu = $_GET['modificationId'];
$sql = "SELECT * FROM `etudiants` WHERE matricule='$matriculeRecu'";
$result = mysqli_query($con,$sql);
$ligne =  mysqli_fetch_assoc($result);
$nomRecu = $ligne['nom'];
$prenomRecu = $ligne['prenom'];
$typeEtudiantRecu = $ligne['typeEdutiant'];
$emailRecu = $ligne['email'];
$statusEtudiantRecu = $ligne['status'];


if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
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
    $sql = "UPDATE `etudiants` SET `nom`='$nom',`prenom`='$prenom',`matricule`='$matricule',`status`='$statusEtudiant',`typeEdutiant`='$typeEtudiant',`email`='$email' WHERE `matricule`='$matriculeRecu'";

    $resultat = mysqli_query($con, $sql);

    if($resultat){
       
        header('location:afficherEtudiant.php');
    }

    else{
        die(mysqli_error($con));
    }



}



?>


