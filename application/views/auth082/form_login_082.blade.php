<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop-082</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/font/bootstrap-icons.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <script src="https://kit.fontawesome.com/46db5e6224.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
   .background-radial-gradient {
    background-color: hsl(218, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(220, 80%, 45%) 15%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        hsl(220, 80%, 40%) 35%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        hsl(220, 80%, 30%) 75%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        hsl(220, 80%, 29%) 80%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        transparent 100%),
    radial-gradient(1250px circle at 100% 100%,
        hsl(220, 80%, 55%) 15%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        hsl(220, 80%, 40%) 35%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        hsl(220, 80%, 30%) 75%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        hsl(220, 80%, 29%) 80%,     /* Naikkan nilai hue, kecerahan, dan kejenuhan */
        transparent 100%);
}




    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#013785, #0d6efd);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#013785, #0d6efd);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          The best catshop <br />
          <span style="color: hsl(218, 81%, 75%)">In the world</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Selamat datang di Catshop kami, tempat di mana keindahan dan kelembutan berkumpul. Kami membawa Anda ke dunia yang dipenuhi dengan kucing yang menggemaskan dan perlengkapan berkualitas untuk kesejahteraan mereka. Mari jelajahi beragam produk kami yang dirancang dengan cinta untuk kucing kesayangan Anda. Bersiaplah untuk merasakan kehangatan dan kegembiraan bersama Catshop kami.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="" method="post">
              <h3>Form Login</h3>
              <p></p>
              {{-- <?=$this->session->flashdata('msg')?> --}}
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="username" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Username</label>
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4 w-100">

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</form>
</body>
</html>