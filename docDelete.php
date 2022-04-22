<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $id = $_POST['ID'];
    $query = "DELETE FROM `doctor-records` WHERE `Hospital-ID` = '$id'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    header("Location: doctor.php");
?>