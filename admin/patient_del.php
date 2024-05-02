<?php
include "config.php";
$id = $_POST['id'];
$qury = "DELETE FROM patient WHERE id='$id'";
$res = mysqli_query($conn,$qury);
if($res == 0){
    echo "not deleted";
}else{
    header('location:patient-data.php');
}

?>