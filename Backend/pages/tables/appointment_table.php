<?php
$con = mysqli_connect("localhost", "root", "", "hospital");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
;
$status = $_POST['status'];
$id = $_POST['patient_id'];
$time = $_POST['timeslot'];
if ($status != "Accepted") {
    $sql = "update appointment_master
    set status = '$status', time = NULL where patientid = $id";
} else {
    $sql = "select dat from appointment_master where patientid = $id";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    $dat = $row['dat'];
    $sql = "select time from appointment_master where dat = '$dat'";
    $query = mysqli_query($con, $sql);
    $flag = 0;
    while ($row = mysqli_fetch_array($query)) {
        if ($time == substr($row['time'], 0, 5)) {
            echo "<script type='text/javascript'> document.location ='appointment.php'; </script>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        $sql = "update appointment_master
    set status = '$status', time = '$time' where patientid = $id";
    }
}
$query = mysqli_query($con, $sql);
if ($query) {
    echo "<script type='text/javascript'> document.location ='appointment.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "Error: " . $sql . "<br>" . $con->error;
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}
?>