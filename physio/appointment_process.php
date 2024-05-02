<?php
include "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $DoctorName = $_POST['DoctorName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $datetime = $_POST['datetime'];
    $state = $_POST['state_input'];
    $city = $_POST['district_input'];
    // $booking = $_POST['booking'];
    // $msg = $_POST['message'];

    $qry = "INSERT INTO appointment(name,phone,doctor_name,gender,email,dob,appointment_date,state,city) Values('$name','$phone','$DoctorName','$gender','$email','$dob','$datetime','$state','$city')";
    $result = mysqli_query($conn,$qry);
    if($result == 1){
        // header("Location:physio-home.php");
        echo "<script>alert('Appointment Booked Successfully');</script>";
    }else{
        echo "fail";
    }
}
?>