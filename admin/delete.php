<?php
include "config.php";

$id=$_POST["id"];
$qry="DELETE FROM doctor_master WHERE id='$id'";
$result = mysqli_query($conn,$qry);
if($result == 1){
    header('location:doctor-data.php');
}else{
    echo "not deleted";
}

?>