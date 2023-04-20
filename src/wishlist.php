<?php
include "config.php";
session_start();
$id=$_POST['id'];
$data="SELECT * FROM `products` WHERE `id`='$id'";
$result = mysqli_query($connection,$data);
$num = mysqli_num_rows($result);
print_r($num);
if($num>0){
while($r=mysqli_fetch_assoc($result)){ 
    $name=$r['name'];
   $price=$r['price'];
   $image=$r['image'];
   $id=$r['id'];
}
array_push($_SESSION['wishlist'],
    array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image))));
print_r($_SESSION['wishlist']);
// session_destroy();
}

?>