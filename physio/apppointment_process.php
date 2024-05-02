<?php
require "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $datetime = $_POST['datetime'];
    $state = $_POST['state_input'];
    $city = $_POST['district_input'];
    // $booking = $_POST['booking'];
    $msg = $_POST['message'];

    $qry = "INSERT INTO appointment(name,phone,email,dob,appointment_date,state,city,message) Values('$name','$phone','$email','$dob','$datetime','$state','$city','$msg')";
    $result = mysqli_query($conn,$qry);
    if($result){
        header("location:physio-home.html");
    }else{
        echo "fail";
    }
}

?>