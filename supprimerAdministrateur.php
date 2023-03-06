<?php
    include 'connect.php';

    if(isset($_GET['suppressionId'])){
        $matricule = $_GET['suppressionId'];
        $sql = "delete from `administrateur` where matricule = '$matricule'";
        $result = mysqli_query($con, $sql);
        if($result){
           header('location:afficherAdministrateur.php');
        }
        else{
            die(mysqli_error($con));
        }

    }

?>