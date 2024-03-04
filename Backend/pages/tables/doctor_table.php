<?php
include("conn.php");
$target = "images/".basename($_FILES['image']['name']);
// $i = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$i = $_FILES['image']['name'];
$n = $_POST['name'];
$d = $_POST['degree'];
$s = $_POST['speciality'];
$p = $_POST['patients'];
$sql = "insert into doctor_master(image, name, degree, speciality, patients)
values ('$i','$n','$d','$s',$p)";
$query = mysqli_query($con, $sql);
if ($query) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    echo "<script type='text/javascript'> document.location ='doctors.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>