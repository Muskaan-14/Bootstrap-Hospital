<?php
include("conn.php");

$data = $_GET['last'];
$id = $_GET['id'];

if ($data == "Active"){
    $data = "Deactive";
}
else{
    $data = "Active";
}
$sql = "update service_master set status='$data' where service_id = $id";
$query = mysqli_query($con,$sql);
echo $data;
?>