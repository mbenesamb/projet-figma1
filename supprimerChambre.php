<?php
    include 'connect.php';

    if(isset($_GET['suppressionId'])){
        $numero = $_GET['suppressionId'];
        $sql = "delete from `chambre` where numero = '$numero'";
        $result = mysqli_query($con, $sql);
        if($result){
           
           header('location:afficherChambre.php');
        }
        else{
            die(mysqli_error($con));
        }

    }

?>