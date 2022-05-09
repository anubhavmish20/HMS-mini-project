<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $pid = $_POST['pid'];
    $did = $_POST['did'];
    $query = "UPDATE appointments SET `status` = 'complete' WHERE Patient = (SELECT `name` FROM `patient-records` WHERE ID = '$pid') AND Doctor = (SELECT `Full-Name` FROM `doctor-records` WHERE `Hospital-ID` = '$did')";
    $query2 = "UPDATE `sessions` SET `status` = 'complete' WHERE pname = (SELECT `name` FROM `patient-records` WHERE ID = '$pid') AND dname = (SELECT `Full-Name` FROM `doctor-records` WHERE `Hospital-ID` = '$did')";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    $query_result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
    header("Location: appointments.php");
?>