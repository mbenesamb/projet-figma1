<?php
    include 'connect.php';

    if(isset($_GET['suppressionId'])){
        $matricule = $_GET['suppressionId'];
        $sql = "delete from `etudiants` where matricule = $matricule";
        $result = mysqli_query($con, $sql);
        if($result){
           header('location:afficherEtudiant.php');
        }
        else{
            die(mysqli_error($con));
        }

    }

?>