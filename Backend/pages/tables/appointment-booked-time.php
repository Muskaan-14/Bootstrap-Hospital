<?php

$con = mysqli_connect("localhost", "root", "", "hospital");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
;
$time = $_GET['last'];
$id = $_GET['id'];

$sql = "select dat from appointment_master where patientid = $id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
$dat = $row['dat'];
$sql = "select time from appointment_master where dat = '$dat'";
$query = mysqli_query($con, $sql);
$flag = 0;
while ($row = mysqli_fetch_array($query)) {
    if ($time == substr($row['time'], 0, 5)) {
        echo "block";
        $flag = 1;
    }
}
if ($flag == 0) {
    echo "none";
}