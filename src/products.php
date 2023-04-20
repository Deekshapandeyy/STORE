<?php
include "config.php";
$sql="SELECT * FROM `products` ";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if($num>0){
    echo "<div class=\"row\" style = 'box-sizing: border-box;'>";
    while($row=mysqli_fetch_assoc($result)){  
         // see how to give box-sizing border-box here
        echo "<div class=\"col-lg-3 col-md-6 col-sm-6 d-flex\">
            <div class=\"card w-100 my-2 shadow-2-strong\">
                <img src=\"$row[image]\" class=\"card-img-top\"
                    style=\"aspect-ratio: 1 / 1\" />
                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title\">$row[name]</h5>
                    <p class=\"card-text\">$ $row[price]</p>
                    <div class=\"card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto\">
                    <a class=\"m-0 btn btn-secondary shadow-0 me-0 add-cart\" id='cart_$row[id]' onclick = 'addcart(this.id)'>AddCart</a>
                        <a class=\"m-1 btn btn-info shadow-0 me-1 wishlist\" id='wish_$row[id]' onclick = 'wishlist(this.id])'>Wishlist</a>
                        </div>
                         
                </div>
            </div>
        </div>"; 
    }
  echo "  </div>";
}
?>
<!-- -->
                    <!-- echo " <div class='\"col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center\"'>
					<div class='\"single-product-item\"'>
						<div class='product-image'>
							<a href=''><img src='".$row[image]."' alt=""></a>
						</div><h3>".$row[name]."</h3><p class='\"product-price\"'><span>Per Kg</span> ".$row[price]"</p>
						<a href='cart.php' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
					</div>
                     // <a class=\"m-1 btn btn-danger shadow-0 me-1 delete-from-cart\" id=\"$row[id]\" onclick = 'del($row[id])'>Delete</a>
				</div>";
    } -->