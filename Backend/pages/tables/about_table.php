<?php
$con = mysqli_connect("localhost", "root", "", "hospital");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
;
$h = $_POST['heading'];
$sh = $_POST['subheading'];
$pb = $_POST['patient_beds'];
$dn = $_POST['doctors_nurses'];
$hp = $_POST['happy_patients'];
$e = $_POST['experience'];
$sql = "update about_master
set heading = '$h', subheading = '$sh', patient_beds = '$pb', doctors_nurses = '$dn', happy_patients = '$hp', experience = '$e'";
$query = mysqli_query($con, $sql);
if ($query) {
    echo "<script type='text/javascript'> document.location ='about.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>