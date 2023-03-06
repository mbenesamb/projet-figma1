<?php

$con = new mysqli('localhost','root','','allocationchambre');

if(!$con){
    die(mysqli_error($con));
}

?>