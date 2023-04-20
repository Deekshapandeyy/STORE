<?php
include "config.php";

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$status=$_POST['status'];
$total=$_POST['total'];

$data="UPDATE `users` SET `name`='$name',`shipping_address`='$address',`order_status`='$status',
`total`='$total' WHERE `id`=$id";
$sql_stmt = mysqli_query($connection,$data);


?>