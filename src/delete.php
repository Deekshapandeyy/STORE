<?php
include "config.php";
$id=$_POST['id'];
$data="DELETE FROM `products` where `id`='$id'";
$sql_stmt = mysqli_query($connection,$data);
// header("location":"admin.php");
?>
