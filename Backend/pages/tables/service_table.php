<?php
include("conn.php");
$target = "images/".basename($_FILES['image']['name']);
// $i = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$i = $_FILES['image']['name'];
$h = $_POST['heading'];
$sh = $_POST['subheading'];
$sql = "insert into service_master(image, heading, subheading, status)
values ('$i','$h','$sh','Active')";
$query = mysqli_query($con, $sql);
if ($query) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    echo "<script type='text/javascript'> document.location ='services.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>