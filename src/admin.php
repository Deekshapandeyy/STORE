<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <h1><center>Pending Request users</center></h1>
    <div id="pending">
<?php
include "config.php";
$data = "SELECT * FROM `users` WHERE `status` = 'pending'";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
if($num>0){
    echo "<table >";
        echo "<thead><tr><th>ID</th><th>Name</th><th>E-mail</th><th>address</th><th>Pincode</th><th>Status</th><th>Role</th><th>Action</th></tr>";
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        
        echo "<tr><td>".$r["id"]."</td>";
        echo "<td>".$r["name"]."</td>";
        echo "<td>".$r["email"]."</td>";
        echo "<td>".$r["address"]."</td>";
        echo "<td>".$r["pincode"]."</td>";
        echo "<td><select name='status' id='user_status'>
        <option value='pending'>Pending</option>
        <option value='approved'>Approved</option>
        <option value='rejected'>Rejected</option></select></td>";
        echo "<td><select name='role' id='user_role'>
        <option value='user'>User</option>
        <option value='admin'>Admin</option></select></td>";
        echo "<td><button type= submit value='Submit' id='$r[id]' class='change_status'>Submit</button></td></tr>";

    }}  
    echo "</table>";
?>
</div>
<div id="user_5">
<hr><h1><center>Top 5 users</center></h1>
<?php
include "config.php";
$data="SELECT user_id,COUNT(user_id) as count FROM orders GROUP by user_id LIMIT 5";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
echo "<table>";
echo "<thead><tr><th>ID</th><th>Count</th></tr>";
if($num>0){
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        echo "<tr><td>".$r["user_id"]."</td>";
        echo "<td>".$r["count"]."</td>";
    }}  
    echo "</table>";
?>
</div>
 <div id="products_5">
<HR><h1><center>Top 5 Products</center></h1>
<?php
include "config.php";
$data="SELECT `name`,`category`,`price`,`description`,MAX(price)as total FROM `products` GROUP BY id LIMIT 5";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
if($num>0){
    echo "<table>";
    echo "<thead><tr><th>Name</th><th>Category</th><th>Price</th><th>Dscription</th><th>Total</th></tr>";
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        echo "<tr><td>".$r["name"]."</td>";
        echo "<td>".$r["category"]."</td>";
        echo "<td>".$r["price"]."</td>";
        echo "<td>".$r["description"]."</td>";
        echo "<td>".$r["total"]."</td>";
        echo "</tr>";

    }}  
    echo "</table>";
?>
</div>
<div id="orders_5">
<hr><h1><center>Top 5 Orders</center></h1>
<?php
include "config.php";
$data="SELECT `user_id`,max(total)as count from orders GROUP by user_id LIMIT 5";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
echo "<table>";
echo "<thead><tr><th>ID</th><th>Maximum Price</th></tr>";
if($num>0){
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        echo "<tr><td>".$r["user_id"]."</td>";
        echo "<td>".$r["count"]."</td>";
    }}  
    echo "</table>";
?>
</div>
<hr>
<center><button type="button" id="product" class="btn btn-info">All Products & User & Order </button></center>

</body>
<script src="./jS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>
