<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style1.css">
  <title>Shop page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
      <div class="container">
        <div class="row gy-3">
          <div class="order-lg-last col-lg-12 col-sm-8 col-8">
            <div class="d-flex float-end">
              <a href="./login.php" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target=""> <i
                  class="fas fa-user-alt m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">Sign in</p>
              </a>
              <a href="./view/wishlistview.php"
                class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i
                  class="fas fa-heart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">Wishlist</p>
              </a>
              <a href="./view/cartview.php"
                class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i
                  class="fas fa-shopping-cart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">My cart</p>
              </a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </header>

  <!--  intro  -->
  <section class="mt-3">
    <div class="container">
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./images/pexels-tim-mossholder-3696755.jpg" class="d-block w-100 " alt="Arrival">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/pexels-tima-miroshnichenko-5662862.jpg" class="d-block w-100 " alt="SALE">
            <div class="carousel-caption d-none d-md-block">
              <h5>SALE SALE SALE</h5>
              <p>Some new arrivals in the site GO! Checkout!.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/pexels-tim-mossholder-3696755.jpg" class="d-block w-100 " alt="Arrival">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </main>
    </div>
    <!-- container end.// -->
  </section>
  <!-- intro -->

  <!-- Products -->
  <section>
    <div class="container my-5">
      <header class="mb-4">
        <h3>New products</h3>
      </header>
      <div class="row">
        
        
        <?php
        include "products.php";
        ?>
    
      </div>
    </div>
  </section>
  <!-- Products -->


  

  <section>
    <div class="container">
      <div class="px-4 pt-3 border">
        <div class="row pt-1">
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-thumbs-up fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Reasonable prices</h6>
                <p class="mb-0">Have you ever finally just</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-plane fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Worldwide shipping</h6>
                <p class="mb-0">Have you ever finally just</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-star fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Best ratings</h6>
                <p class="mb-0">Have you ever finally just</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-phone-alt fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Help center</h6>
                <p class="mb-0">Have you ever finally just</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted bg-primary mt-3">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start pt-4 pb-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-12 col-lg-3 col-sm-12 mb-2">
            <!-- Content -->
            <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
              MDB
            </a>
            <p class="mt-1 text-white">
              © 2023 Copyright: MDBootstrap.com
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Store
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white-50" href="#">About us</a></li>
              <li><a class="text-white-50" href="#">Find store</a></li>
              <li><a class="text-white-50" href="#">Categories</a></li>
              <li><a class="text-white-50" href="#">Blogs</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Information
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white-50" href="#">Help center</a></li>
              <li><a class="text-white-50" href="#">Money refund</a></li>
              <li><a class="text-white-50" href="#">Shipping info</a></li>
              <li><a class="text-white-50" href="#">Refunds</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Support
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white-50" href="#">Help center</a></li>
              <li><a class="text-white-50" href="#">Documents</a></li>
              <li><a class="text-white-50" href="#">Account restore</a></li>
              <li><a class="text-white-50" href="#">My orders</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-12 col-sm-12 col-lg-3">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
            <p class="text-white">Stay in touch with latest updates about our products and offers</p>
            <div class="input-group mb-3">
              <input type="email" class="form-control border" placeholder="Email" aria-label="Email"
                aria-describedby="button-addon2" />
              <button class="btn btn-light border shadow-0" type="button" id="button-addon2"
                data-mdb-ripple-color="dark">
                Join
              </button>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <div class="">
      <div class="container">
        <div class="d-flex justify-content-between py-4 border-top">
          <!--- payment --->
          <div>
            <i class="fab fa-lg fa-cc-visa text-white"></i>
            <i class="fab fa-lg fa-cc-amex text-white"></i>
            <i class="fab fa-lg fa-cc-mastercard text-white"></i>
            <i class="fab fa-lg fa-cc-paypal text-white"></i>
          </div>
          <!--- payment --->

          <!--- language selector --->
          <div class="dropdown dropup">
            <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown"
              aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
              <li>
                <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i
                    class="fa fa-check text-success ms-2"></i></a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
              </li>
            </ul>
          </div>
          <!--- language selector --->
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
</body>
<!-- <script src="./jS/main.js"></script> -->
<script src="./jS/products.js"></script>
<!-- <script src="./jS/script.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
  integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
  integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>