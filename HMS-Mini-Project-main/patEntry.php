<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $name = $_POST['name'];
    $id = $_POST['id'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO `patient-records` (`name`, `ID`, age, email, contact) VALUES ('$name', '$id', '$age', '$email', '$phone')";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    header("Location: patient.php");
?>