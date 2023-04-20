<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase ">Registration form</h3>
                <form id="myForm">
                <div class="row">
                  <!-- name -->
                  <div class="col-md-11 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" name="name" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form3Example1m">Full Name</label>
                      
                    </div>
                    <span id="error"></span>
                  </div>
                  
                 
<!-- address -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
                <span id="errorn"></span>
                <!-- pincode -->
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="number" id="form3Example1n1" name="pincode" class="form-control form-control-lg" required />
                      <label class="form-label" for="form3Example1n1">Pincode</label>
                    </div>
                    <span id="errorm"></span>
                  </div>
                </div>

<!-- email -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                <span id="errorq"></span>
                <!-- password -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example90" name="password" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example90">Password</label>
                </div>
                <span id="errorp"></span>
                <!-- confirm password -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example99" name="repassword" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example99">Confirm password</label>
                </div>
                <span id="errorr"></span>
                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option value="Role">--Role--</option>
                      <option value="User">User</option>
                      <option value="Admin">Admin</option>
                    </select>

                  </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg reset">Reset all</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2  "id="submit" name="submit">Submit form</button>
                </div>

              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="./jS/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>