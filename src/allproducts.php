<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href='./css/style1.css'>
</head>
<?php
include "config.php";
echo "<center><h1>ALL  PRODUCT  DETAILS </h1></center>";
$data = "SELECT * FROM `products`";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
$str="";
if($num>0){
    echo "<table class='table table-striped table-hover'>";
        echo "<thead><tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Quantity</th><th>Description</th><th>Action</th></tr>";
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        
        $str.= "<tr><td>".$r["id"]."</td></td>
         <td><input type='text' class='inputtext$r[id]' id='name$r[id]' disabled value=".$r["name"]."></td>
        <td><input type='text' class='inputtext$r[id]' id='category$r[id]'  disabled value=".$r["category"]."></td>
        <td><input type='text' class='inputtext$r[id]' id='price$r[id]'  disabled value=".$r["price"]."></td>
        <td><input type='text' class='inputtext$r[id]' id='quantity$r[id]' disabled value=".$r["quantity"]."></td>
        <td><input type='text' class='inputtext$r[id]'  id='description$r[id]'  disabled value=".$r["description"]."></td>
        <td><button type=button class='btn' id='".$r['id']."'>EDIT</button>
        <button type=button class='delete_btn' id='$r[id]'>DELETE</button></td></tr>";

    }}  
    echo $str;
    echo "</table>";
    echo "<hr>";
    
?>
<?php
include "config.php";
echo "<center><h1>ALL  USER  DETAILS </h1></center>";
$data = "SELECT * FROM `users`";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
$str="";
if($num>0){
    echo "<table class='table table-striped table-hover'>";
        echo "<thead><tr><th>ID</th><th>Name</th><th>E-mail</th><th>address</th><th>Pincode</th><th>Status</th><th>Action</th></tr>";
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        
        echo "<tr><td>".$r["id"]."</td>";
        echo "<td><input type='text' class='inputtext$r[id]' id='name$r[id]' disabled value=".$r["name"]."></td>";
        echo "<td><input type='text' class='inputtext$r[id]' id='email$r[id]' disabled value=".$r["email"]."></td>";
        echo "<td><input type='text' class='inputtext$r[id]' id='address$r[id]' disabled value=".$r["address"]."></td>";
        echo "<td><input type='text' class='inputtext$r[id]' id='pincode$r[id]' disabled value=".$r["pincode"]."></td>";
        echo "<td><input type='text' class='inputtext$r[id]' id='status$r[id]' disabled value=".$r["status"]."></td>";
        echo "<td><button type=button class='btn_user' id='update".$r['id']."'>EDIT</button>";  
       echo " <button type=button class='delete_btn_user' id='update".$r['id']."'>DELETE</button></td></tr>";

    }}  
    echo $str;
    echo "</table>";
    echo "<hr>";
    
?>
<?php
include "config.php";
echo "<center><h1>ALL  ORDER  DETAILS </h1></center>";
$data = "SELECT * FROM `orders`";
$sql_stmt = mysqli_query($connection,$data);
$num = mysqli_num_rows($sql_stmt);
$str="";
if($num>0){
    echo "<table class='table table-striped table-hover'>";
        echo "<thead><tr><th>ID</th><th>User Id</th><th>Shipping Address</th><th>Order Status</th><th>Total</th><th>Action</th></tr>";
    while($r=mysqli_fetch_assoc($sql_stmt)){  
        
        echo "<tr><td>".$r["id"]."</td>";
         echo "<td><input type='text' class='input$r[id]' id='name$r[id]' disabled value=".$r["user_id"]."></td>";
        echo "<td><input type='text' class='input$r[id]' id='shipping_address$r[id]' disabled value=".$r["shipping_address"]."></td>";
        echo "<td><input type='text' class='input$r[id]' id='order_status$r[id]' disabled value=".$r["order_status"]."></td>";
        echo "<td><input type='text' class='input$r[id]' id='total$r[id]' disabled value=".$r["total"]."></td>";
        echo "<td><button type=button class='btn_order' id='edit".$r['id']."'>EDIT</button>";  
       echo " <button type=button class='delete_btn_order' id='edit".$r['id']."'>DELETE</button></td></tr>";

    }}  
    echo $str;
    echo "</table>";
    echo "<hr>";
    
?>
<script src="./jS/script.js"></script>