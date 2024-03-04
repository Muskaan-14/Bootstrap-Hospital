<?php
$con = mysqli_connect("localhost", "root", "");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
;

$query = mysqli_query($con, "create database if not exists hospital");
if ($query) {
    ;
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}

$con = mysqli_connect("localhost", "root", "", "hospital");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
;

$sql = " create table if not exists login_master(
    fname varchar(50) Not Null,
    lname varchar(50) Not Null,
    email varchar(30) Not Null,
    phone_no int(10) not null,
    pswd int Not Null,
    gender char(1),
    primary key (email, phone_no)
    )";
$query = mysqli_query($con, $sql);

$fname = $_POST['register_fname'];
$lname = $_POST['register_lname'];
$email = $_POST['register_email'];
$phone = $_POST['register_phone'];
$pswd = $_POST['register_pswd'];
$gender = $_POST['register_gender'];

$sql = "Select * from login_master where email = '$email' and pswd = $pswd";
$query = mysqli_query($con, $sql);
if ($query) {
    $row = mysqli_fetch_array($query);
    if (empty($row)) {
        $sql = "insert into login_master
        values('$fname','$lname','$email','$phone',$pswd,'$gender')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('Done');</script>";
            echo "<script type='text/javascript'> document.location ='appointment.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "<script>alert('Data already exists! You may log in directly');</script>";
        echo "<script type='text/javascript'> document.location ='login.php'; </script>";
    }
} else {
    echo "<script>alert('Something went wrong');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}



?>