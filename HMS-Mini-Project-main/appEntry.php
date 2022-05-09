<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $pid = $_POST['pid'];
    $did = $_POST['did'];

    $query = "INSERT INTO `appointments` (Patient, Doctor, Field, `Time`) SELECT `patient-records`.`name`, `doctor-records`. `Full-Name`, `doctor-records`.Designation, CURRENT_TIMESTAMP(2) FROM `patient-records`, `doctor-records` WHERE `patient-records`.`ID` = '$pid' AND `doctor-records`.`Hospital-ID` = '$did'";

    $query2 = "INSERT INTO `sessions`(`pid`, `pname`, `did`, `dname`, `field`, `time`, `status`) SELECT p.`ID`, p.`name`, d.`Hospital-ID`, d.`Full-Name`, d.`Designation`, a.`Time`, a.`status` FROM `patient-records` p, `doctor-records` d, `appointments` a WHERE p.`ID` = '$pid' AND d.`Hospital-ID` = '$did' AND p.`name` = a.`Patient` AND d.`Full-Name` = a.`Doctor`";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    $query_result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
    header("Location: appointments.php");
?>