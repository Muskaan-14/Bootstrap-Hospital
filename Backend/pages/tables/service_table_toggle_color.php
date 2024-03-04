<?php
include("conn.php");

$data = $_GET['last'];

if ($data == "Active"){
    echo "rgb(249, 99, 118)";
}
else{
    echo "rgb(60,196,123)";
}
?>