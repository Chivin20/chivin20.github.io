<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achiever's Network </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
    html, * {
        font-family: 'Quicksand', sans-serif !important;
    }
    </style>
    <script type="text/javascript" src="9a245cb6-b747-11ec-8d3a-0cc47a792c0a_id_9a245cb6-b747-11ec-8d3a-0cc47a792c0a_files/wz_jsgraphics.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(url('/assets/img/logo1.jpg')); ?>" />
   
</head>
<body>

<!-- nav ber -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="<?php echo e(url('/assets/img/logo1.jpg')); ?>" height="80px" width="80px" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('aboutus')); ?>" routerLink="/aboutus" routerLinkActive="active">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('ourstructure')); ?>" routerLink="/ourstructure" routerLinkActive="active">Our Structure</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('ourteam')); ?>" routerLink="/ourteam" routerLinkActive="active">Our Team</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contactus')); ?>" routerLink="/Contactus" routerLinkActive="active">Contact Us</a>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger bg-danger" style="color: white;" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->

<?php echo $__env->yieldContent('content'); ?>

<!-- footer style -->
<style>
    a{
        text-decoration: none;
        color:white;
    }

    a:hover{
        color: wheat;
    }

    .wrapingimage  
    {  
    float: left;   
    margin: 2px 2px 2px 2px;   
    border: 2px;  
    } 
</style>
<!-- Footer -->
<footer class="page-footer font-small pt-4" style="color: white; background-color: darkblue;; font-family: 'Quicksand', sans-serif;">

    <!-- Footer Links -->
    <div class="container-fluid  text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase"> <b>Achiever's Network</b></h5>
          <div class="wrapingimage">   
            <img src="<?php echo e(url('/assets/img/logo2.jpg')); ?>" height="80px" width="80px" alt="logo" style = "padding-right:10px;">    
            </div>   
          <p style="text-align: justify; font-family: 'Quicksand', sans-serif;"> To create opportunities for excellence by preparing young people to consistently and positively impact our world for the present and future generations. 
          We empower individuals to reach their goals and advance their careers. We are solving the 
          problem of isolation and lack of support in professional development.
           </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5><b>Service</b></h5>
  
          <ul class="list-unstyled" style="font-size: 14px;">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/aboutus">About Us</a>
            </li>
            <li>
              <a href="/ourstructure">Our Structure</a>
            </li>
            <li>
              <a href="/ourteam">Our Team</a>
            </li>
            <li>
              <a href="/contactus">Contact Us</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5> <b>Follow Us On</b></h5>
  
          <ul class="list-unstyled" style="font-size: 14px;">
            <li>
              <a href="#">Facebook</a>
            </li>
            <li>
              <a href="#">Instagram</a>
            </li>
            <li>
              <a href="#">Twitter</a>
            </li>
            <li>
              <a href="#">LinkedIn</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
   
    
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style=" background-color: darkblue; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))">
    <p>&copy; <span id = "currentYear"> 2023 </span> Copyright: 
      <a href="/">Achiever's Network</a>
      </p>
    </div>
    <!-- Copyright -->
  
  <script>
  //get the current year
  const currentYear = new Date().getFullYear();

  //update the content of the element with the currentyear id
  document.getElementById('currentYear').textContent = currentYear;

  </script>
  
  </footer>
  <!-- Footer -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  <script>
      (function () {
    "use strict";
        //===== close navbar-collapse when a  clicked
        let navbarToggler = document.querySelector(".navbar-toggler");
        const navbarCollapse = document.querySelector(".navbar-collapse");

        navbarToggler.addEventListener("click", function () {
            navbarToggler.classList.toggle("active");
            navbarCollapse.classList.toggle("show");
        });
        
        })();
  </script>
</body>
</html><?php /**PATH C:\Users\user\Desktop\achieversnet\resources\views/layout.blade.php ENDPATH**/ ?>