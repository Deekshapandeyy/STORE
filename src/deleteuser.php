<?php
include "config.php";
$id=$_POST['id'];
$data="UPDATE `users` SET `status`='pending' WHERE `id`='$id'";
$sql_stmt = mysqli_query($connection,$data);
// header("location":"admin.php");
?>
