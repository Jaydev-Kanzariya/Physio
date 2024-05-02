<?php
include "config.php";
$id = $_POST['id'];
$qury = "DELETE FROM appointment WHERE id='$id'";
$res = mysqli_query($conn,$qury);
if($res == 1){
    header('location:appointment-data.php');
}else{
    echo "not deleted";
}

?>