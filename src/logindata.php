<?php

include "config.php";
if(isset($_POST)){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
}


$sql="SELECT * FROM `users` WHERE `status`='approved' AND `email`='$email' AND `password`='$pass' ";
$result=mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($num>0)
{
setcookie("Login", $row['id'], time() + (86400 * 30), "/");
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart']['new'] as $key => $value) {
        $stmt = "SELECT * FROM  `cart` where `user_id`='$row[id]' and `product_id`='$value' ";
        $res = mysqli_query($connection, $stmt);
        if (!(mysqli_num_rows($res) > 0)) {
            $stm = "INSERT into `cart` values($value,$row[id]) ";
            mysqli_query($connection, $stm);
        }
    }
    }
    if (isset($_SESSION['wish'])) {
        foreach ($_SESSION['wish']['new'] as $key => $value) {
            $stmt = "SELECT * FROM  `wish` where `user_id`='$row[id]' and `product_id`='$value' ";
            $res = mysqli_query($connection, $stmt);
            if (!(mysqli_num_rows($result1) > 0)) {
                $stm = "INSERT into `wish` values($value,$row[id]) ";
                mysqli_query($connection, $stm);
            }
        }
    }
    session_unset();
    echo true;
}
else{
    echo false;
}

?>