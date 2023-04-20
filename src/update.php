<?php
include "config.php";

$id=$_POST['id'];
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$description=$_POST['description'];

$data="UPDATE `products` SET `name`='$name',`category`='$category',
`price`='$price',`quantity`='$quantity',`description`='$description' WHERE `id`=$id";
$sql_stmt = mysqli_query($connection,$data);
// header("Location: allproducts.php"); 

?>