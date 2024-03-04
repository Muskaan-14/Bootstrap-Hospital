<?php
include("conn.php");
$target = "images/".basename($_FILES['image']['name']);
// $i = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$i = $_FILES['image']['name'];
$n = $_POST['name'];
$r = $_POST['review'];
$sql = "insert into testimonial_master(image, name, review)
values ('$i','$n','$r')";
$query = mysqli_query($con, $sql);
if ($query) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    echo "<script type='text/javascript'> document.location ='testimonials.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>