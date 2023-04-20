<?php
include "config.php";
if (isset($_COOKIE['loign'])){
    $id = $_COOKIE['login'];
}
$stmt = "SELECT * from `cart` where `user_id`='$id' ";
$result = mysqli_query($conn, $stmt);
if (mysqli_num_rows($result) > 0) {
    $str = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $stmt1 = "SELECT * from `products` where `id`='$row[product_id]'";
        $res = mysqli_query($conn, $stmt1);
        if (mysqli_num_rows($res) > 0) {
            while ($r = mysqli_fetch_assoc($res)){

                echo" <div class='card-body'>
                    <div class='row'>
                    <div class='col-lg-3 col-md-10 mb-4 mb-lg-0'>
                    <div class='bg-image hover-overlay hover-zoom ripple rounded' data-mdb-ripple-color='light'>
                    <img src='".$r[img]."'class='w-100' alt='Backpack' />
                    <a href='#!'><div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div></a>
                    </div>
                    </div>
                    <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>
                    <p><strong>".$r[name]."</strong></p>
                    <p class='text-start'>USD-
                    <strong>".$r[price]."</strong>
                    </p>
                    <button type='button' class='btn btn-primary btn-sm me-1 mb-2' id='$key' onclick='removeitem(this.id)' data-mdb-toggle='tooltip'
                    title='Remove item'>Remove
                    <i class='fas fa-trash'></i>
                    </button>
                    
                    <button type='button' class='btn btn-danger btn-sm mb-2' id='$key' onclick='wishlist(this.id)' data-mdb-toggle='tooltip'
                    title='Move to the wish list'>Wishlist
                    <i class='fas fa-heart'></i>
                    </button>
                    </div>
                    </div>
                    <div class='options'>
                    <a href='#' class='option2 move' id='cart_$r[id]'>
                    Wish List
                    </a>
                    <a href='#' class='option2 buy' id='cart_buy_$r[id]'>
                    Buy Now 
                    </a>
                    <button class='delete' id='cart_$r[id]'>X</button>
                    </div>
                    </div>
                    </div>";
            }

        }
    }} 
    ?>
    