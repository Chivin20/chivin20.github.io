<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sankt George International School </title>
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
    <link rel="shortcut icon" href="<?php echo e(url('/assets/img/SANKTGEORGE.png')); ?>" />
   
</head>
<body>

<!-- nav ber -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="<?php echo e(url('/assets/img/SANKTGEORGEWHITE.jpg')); ?>" height="50px" width="50px" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo e(route('aboutus')); ?>" routerLink="/aboutus" routerLinkActive="active" >About Us</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('staff')); ?>" routerLink="/staff" routerLinkActive="active" >Adminstration</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('facilities')); ?>" routerLink="/facilities" routerLinkActive="active" >Facilities</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admission
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo e(route('calendar')); ?>" routerLink="/calendar" routerLinkActive="active" >Calendar</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('fees')); ?>" routerLink="/Fees" routerLinkActive="active">Fees</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('others')); ?>" routerLink="/others" routerLinkActive="active">Students Life</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contact-us')); ?>" routerLink="/Contact-Us" routerLinkActive="active">Contact Us</a>
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
<footer class="page-footer font-small pt-4" style="color: white; background-color: #dc3645;; font-family: 'Quicksand', sans-serif;">

    <!-- Footer Links -->
    <div class="container-fluid  text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase"> Sankt Georg School</h5>
          <div class="wrapingimage">   
            <img src="<?php echo e(url('/assets/img/SANKTGEORGE.png')); ?>" height="80px" width="80px" alt="logo">    
            </div>   
          <p style="text-align: justify; font-family: 'Quicksand', sans-serif;"> To create opportunities for excellence by preparing young people to consistently and positively impact our world for the present and future generations. 
          This would entail motivating and inspiring our students to access and imbibe knowledge that shapes their thought processes, sharpens their quest for integrity, 
          and ensures their well-being in every aspect of human endeavour. 
          To create a world shaped by empowerment, innovation, technology, and passion for positive change and development. 
           </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5>Service</h5>
  
          <ul class="list-unstyled" style="font-size: 14px;">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/aboutus">About the School</a>
            </li>
            <li>
              <a href="/">Academic Department</a>
            </li>
            <li>
              <a href="/fees">Fees</a>
            </li>
            <li>
              <a href="/contact-us">Contact Us</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 >Follow Us On</h5>
  
          <ul class="list-unstyled" style="font-size: 14px;">
            <li>
              <a href="https://web.facebook.com/SGISng/">Facebook</a>
            </li>
            <li>
              <a href="https://www.instagram.com/">Instagram</a>
            </li>
            <li>
              <a href="https://twitter.com/?logout=1686804422915">Twitter</a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/chukwuma-ugwu-68329a11a/">LinkedIn</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
   
    
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style=" background-color: #a40606; background-image: linear-gradient(rgba(240, 99, 99, 0.527),rgba(241, 114, 114, 0.5))">© 2022 Copyright:
      <a href="/">Sankt Georg School</a>
    </div>
    <!-- Copyright -->
  
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
</html><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/layout.blade.php ENDPATH**/ ?>