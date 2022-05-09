<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $name = $_POST['name'];
    $id = $_POST['id'];
    $field = $_POST['field'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO `doctor-records` (`Full-Name`, `Hospital-ID`, Designation, Email, Contact) VALUES ('$name', '$id', '$field', '$email', '$phone')";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    header("Location: doctor.php");
?>