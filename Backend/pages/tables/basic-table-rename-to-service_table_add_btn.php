<?php
include("conn.php");

$data = $_GET['last'];

if ($data == "Add"){
    $data = "Save";
}
else{
    $data = "Add";
}
// $sql = "update service_master set status='$data' where service_id = $id";
// $query = mysqli_query($con,$sql);
echo $data;
?>