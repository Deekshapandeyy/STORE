<?php
include "config.php";
$id=$_POST['id'];
$role=$_POST['role'];
$status=$_POST['status'];
$sql="UPDATE `users` SET `role`='$role',`status`='$status' WHERE `id`='$id';";
$result=mysqli_query($connection,$sql);

?>