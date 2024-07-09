<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozaramba Foundation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
    html, * {
        font-family: 'Quicksand', sans-serif !important;
    }

    #navi{
        text-decoration: none;
        color:blue;
    }

    #navi:hover{
        color: wheat;
    }

    .scrolling-text{
      white-space: nowrap;
      overflow: hidden;
      animation: scroll-text 10s linear infinite;
  }

  @keyframes  scroll-text {
      0%{
          transfom: translateX(0);
      }
      100% {
          transform:
          translateX(-100%);
      }
  }

    .section {
      opacity: 0; /* set initial opacity to 0 */
      transform: translateY(30px); /* set initial vertical position */
      transition: opacity 4s, transform 4s; /* define transition property */
  }

/* add a class to trigger the animation when scrolling */

  .animate{
      opacity: 1; /* change opacity to 1 */
      transform: translateY(0); /* move the section up */
  }

  #arrange{
      height:300px;
      margin-bottom:20px;
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
      <a class="navbar-brand" href="/"><img src="<?php echo e(url('/assets/img/logo.jpg')); ?>" height="80px" width="80px" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" id = "navi" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" id = "navi" href="<?php echo e(route('aboutus')); ?>" routerLink="/aboutus" routerLinkActive="active">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id = "navi" href="<?php echo e(route('ourevent')); ?>" routerLink="/ourevent" routerLinkActive="active">Our Event</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id = "navi" href="<?php echo e(route('ourteam')); ?>" routerLink="/ourteam" routerLinkActive="active">Our Team</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id = "navi" href="<?php echo e(route('contactus')); ?>" routerLink="/Contactus" routerLinkActive="active">Contact Us</a>
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
    
  .hov{
        text-decoration: none;
        color:white;
    }

    .hov:hover{
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
<footer class="page-footer font-small pt-4" style="color: white; background-color: cyan; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5));
 font-family: 'Quicksand', sans-serif; ">

    <!-- Footer Links -->
    <div class="container-fluid  text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase"> <b>Ozaramba Foundation</b></h5>
          <div class="wrapingimage">   
            <img src="<?php echo e(url('/assets/img/logo.jpg')); ?>" height="80px" width="80px" alt="logo" style = "padding-right:10px;">    
            </div>   
          <p style="text-align: justify; font-family: 'Quicksand', sans-serif;"> The main purpose of this Foundation is 
          aimed at improving lives, as one Family we can come together to make the world a better place. please we can 
          start by inviting our friends and family to join and be a part of this great family.

           </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-2" style = "margin-left: 70px;">
  
          <!-- Links -->
          <h5><b>Service</b></h5>
  
          <ul class="list-unstyled" style="font-size: 14px;">
            <li>
              <a href="/" class = "hov">Home</a>
            </li>
            <li>
              <a href="/aboutus" class = "hov">About Us</a>
            </li>
            <li>
              <a href="/ourstructure" class = "hov">Our Event</a>
            </li>
            <li>
              <a href="/ourteam" class = "hov">Our Team</a>
            </li>
            <li>
              <a href="/contactus" class = "hov">Contact Us</a>
            </li>
          </ul>
  
        </div>

        </hr>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5> <b>Follow Us On</b></h5>
  
          <ul class="list-unstyled" style="font-size: 14px;">
            <li>
              <a href="https://www.facebook.com/groups/3515220102102074" class = "hov">Facebook</a>
            </li>
            <li>
              <a href="#" class = "hov">Instagram</a>
            </li>
            <li>
              <a href="#" class = "hov">Twitter</a>
            </li>
            <li>
              <a href="#" class = "hov">LinkedIn</a>
            </li>
          </ul>

          </hr>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
   
    
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-1" style=" background-color: cyan; background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.6))">
    <p style = "font-weight: bold;">&copy; <span id = "currentYear" > 2023 </span> Copyright: 
      <a href="/">Ozaramba Foundation</a>
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


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

<script>

$(document).ready(function() {
    $(window).scroll(function(){
        $('.section').each(function() {
            var position = $(this).offset().top;
            var windowHeight = $(window).height();
            var scroll = $(window).scrollTop();

            if (position < scroll + windowHeight - 100) {
                $(this).addClass('animate');
            }
        });
    });
});

</script>
</body>
</html><?php /**PATH C:\Users\user\Documents\websites\ozaramba\resources\views/layout.blade.php ENDPATH**/ ?>