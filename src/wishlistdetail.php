<?php
session_start();

if (isset($_COOKIE['loign'])){
    $id = $_COOKIE['login'];
}
$stmt = "SELECT * from `wish` where `user_id`='$id' ";
$result = mysqli_query($conn, $stmt);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $stmt1 = "SELECT * from `Products` where `id`='$row[product_id]'";
        $res = mysqli_query($conn, $stmt1);
        if (mysqli_num_rows($res) > 0) {
            echo "<div class='table-wishlist'>
            <table cellpadding='0' cellspacing='0' border='0' width='100%'>
            <thead>
                <tr>
                    <th width='45%'>Product Name</th>
                    <th width='15%''>Unit Price</th>
                    <th width='15%''></th>
                    <th width='10%'></th>
                </tr>
            </thead><tbody>";
            while ($r = mysqli_fetch_assoc($res)) {
                echo "<tr>
                <td width='45%'>
                <div class='display-flex align-center'>
                <div class='img-product'>
                <img src=".$r['image']." alt='' class='mCS_img_loaded'>
                </div>
                <div class='name-product'>
                ".$r['name']."
                </div>
                </div>
                </td>
                <td width='15%' class='price'>$".$r['price']."</td>
                <div class='options'>
                    <a href='#' class='option2 move' id='wish_$r[id]'>
                    Add Cart
                    </a>
                    <a href='#' class='option2 buy' id='wish_buy_$r[id]'>
                    Buy Now 
                    </a>
                    <button class='delete' id='wish_$r[id]'>X</button>
                    </div>
                <td width='15%'><button class='round-black-btn small-btn' id=$v[id] onclick='addcart($v[id])'>Add to Cart</button></td>
                <td width='15%'><button class='round-black-btn small-btn' id=$v[id] onclick='remove($v[id])'>Remove</button></td>
                <td width='10%' class='text-center'><a href='#' class='trash-icon'><i class='far fa-trash-alt'></i></a></td>
                </tr>";
                    }}
                    echo "</tbody></table>";

    }}


?>