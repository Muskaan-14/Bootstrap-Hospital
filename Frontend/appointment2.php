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

$sql = " create table if not exists appointment_master(
    patientid int auto_increment primary key,
    fname varchar(50) Not Null,
    lname varchar(50) Not Null,
    gender char(1),
    email varchar(30) Not Null,
    pswd int Not Null,
    doctor_dept varchar(30),
    doctor_name varchar(50),
    dat date,
    description varchar(255),
    status varchar(15) default 'pending'
    )";
$query = mysqli_query($con, $sql);

$sql = "alter table appointment_master auto_increment=101";
$query = mysqli_query($con, $sql);

$fname = $_POST['patient_fname'];
$lname = $_POST['patient_lname'];
$gender = $_POST['patient_gender'];
$email = $_POST['patient_email'];
$pswd = $_POST['patient_pswd'];
$dept = $_POST['patient_dept'];
$dname = $_POST['patient_doctor'];
$dat = $_POST['patient_date'];
$year = substr($dat,6,4);
$month = substr($dat,0,2);
$dat = substr($dat,3,2);
echo "<script>
function isDateBeforeToday(date) {
    console.log(date.toDateString());
    return new Date(date.toDateString()) < new Date(new Date().toDateString());
}
let x = isDateBeforeToday(new Date($year, $month, $dat);
if (x == true) {
    alert('before date');
}
else{
    alert('correct date'); 
}
</script>";
$final = $year . '-' . $month . '-' . $dat;
$desc = $_POST['patient_description'];
$sql = "insert into appointment_master(fname,lname,gender,email,pswd,doctor_dept,doctor_name,dat,description)
    values('$fname','$lname','$gender','$email','$pswd','$dept','$dname','$final','$desc')";
$query = mysqli_query($con, $sql);
if ($query) {
    echo "<script>alert('Done');</script>";
    echo "<script type='text/javascript'> document.location ='appointment.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "Error: " . $sql . "<br>" . $con->error;
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}
?>