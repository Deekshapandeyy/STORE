<?php
include "config.php";

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];

$data="UPDATE `users` SET `name`='$name',`email`='$email',`address`='$address',
`pincode`='$pincode' WHERE `id`=$id";
$sql_stmt = mysqli_query($connection,$data);


?>