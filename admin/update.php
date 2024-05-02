<?php
include "config.php"; // Include your database connection file
//update doctor data
if (isset($_POST['update'])) {
    // Retrieve data from the form
    $id = $_POST['id'];
    $name = $_POST['fname'];
    $phone = $_POST['no'];
    $email = $_POST['email'];

    // Prepare and execute the update query
    $query = "UPDATE doctor_master SET Full_name='$name', Phone='$phone', Email='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:doctor-data.php");
    } else {
        echo "Error updating record ";
    }
}

//update patient data
if (isset($_POST['submit'])) {
    // Retrieve data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['no'];

    // Prepare and execute the update query
    $query = "UPDATE patient SET name='$name', gender='$gender', Email='$email', phone='$phone' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // echo "sucess";
        header("location:patient-data.php");
    } else {
        echo "Error updating record";
    }
}

//update appoinmtment data
if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $DoctorName = $_POST['DoctorName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $appo = $_POST['appo'];
    $state_input = $_POST['state_input'];
    $district_input = $_POST['district_input'];
    // $msg = $_POST['message'];

    $qry = "UPDATE appointment SET name='$name',phone='$phone',doctor_name='$DoctorName',gender='$gender',email='$email',dob='$dob',appointment_date='$appo',state='$state_input',city='$district_input' WHERE id='$id'";
    $result = mysqli_query($conn, $qry);

    if ($result) {
        // echo "sucess";
        header("location:appointment-data.php");
    } else {
        echo "Error updating record";
    }
}

?>