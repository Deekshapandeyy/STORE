<?php

include "config.php";
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$role=$_POST['role'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];

$sql="INSERT INTO `users`(`name`, `email`, `password`, `address`, `pincode`, `role`, `status`) 
VALUES ('$name','$email','$pass','$address','$pincode','$role','pending')";

$result=mysqli_query($connection,$sql);
$data="SELECT `id` FROM `users` WHERE `email`='$email' AND `password` ='$pass'";
$res=mysqli_query($connection,$data);
$num = mysqli_num_rows($res);
if($num>0){
    $r=mysqli_fetch_assoc($res);
    while($r=mysqli_fetch_assoc($res)){  
        $str=$r["id"];
    }} 
    setcookie ("user_id",$str,time()+ 86400*30, "/");
    setcookie ("email",$_POST["email"],time()+ 86400*30, "/");
	setcookie ("password",$_POST["pass"],time()+ 86400*30, "/");
	echo "Cookies Set Successfuly";

?>