

<?php $__env->startSection('content'); ?>

<style>
    /*
::::::::::::::::::::::::::::::::::::::::::::::::::::
Bootstrap 4 breakpoints
*/
/* Small devices (landscape phones, 544px and up) */
@media (min-width: 444px) {  
    #banner{
        width: 100%; 
        height: 250px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 10%; 
        margin-top: 10%;
      }
     
     
  
  }
   
  /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
  @media (min-width: 768px) {  
      #banner{
        width: 100%; 
        height: 400px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 20%; 
        margin-top: 20%;
      }
     
   
  }
   
  /* Large devices (desktops, 992px and up) */
  @media (min-width: 1000px) { 
    #banner{
        width: 100%; 
        height: 650px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 20%; 
        margin-top: 20%;
      }
     
  }
   
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 1200px) {  
    h1 {font-size:3rem;} /*1rem = 16px*/    
  }



  
  
  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }
  
  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .card:hover .image {
    opacity: 0.3;
  }
  
  .card:hover .middle {
    opacity: 1;
  }
  
  .text {
    background-color: #a40606;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }


  
   
  /*
  ::::::::::::::::::::::::::::::::::::::::::::::::::::
  Custom media queries
  */
</style>

<div class="row">
    <div class="container">
        <div class="col-12" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>GALLERY</b></h1>
        </div>
    </div>
</div>

<!-- About Principal of School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-6"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/facility6.png" style="height:450px; weight:500px; margin-bottom:30px;" />
                            <div class="middle">
                                <div class="text rounded">
                                    Audio-Visual

                                    <p>Laboratories</p>
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-6"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/facility2.png" style="height:450px; weight:500px;"/>
                            <div class="middle">
                                <div class="text rounded">
                                Play Ground
                                </div>
                                
                            </div>
                    
                       
                    </div>
                </div>


                <div class="col-sm-12 col-md-6" style="margin-bottom: 20px;"  >

                    <div class="card">
                        
                            <img  class="rounded img-fluid mx-auto image" src="../assets/img/facility3.png"  style="height:450px; weight:500px;"/>
                            <div class="middle">
                                <div class="text rounded">
                                    Art 
                                    <p>Laboratories</p>
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>


                <div class="col-sm-12 col-md-6"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/facility4.png"  style="height:450px; weight:500px;"/>
                            <div class="middle">
                                <div class="text rounded">
                                    Class room
                                </div>
                                
                            </div>
                    
                    </div>
                </div>

                <div class="col-sm-12 col-md-6"style="margin-bottom: 20px;" >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/facility5.png"  style="height:450px; weight:500px;"/>
                            <div class="middle">
                                <div class="text rounded">
                                    Computer Laboratory
                                </div>
                                
                            </div>
                    
                    </div>
                </div>

                <div class="col-sm-12 col-md-6"  >

            <div class="card">
    
        <img class="rounded img-fluid mx-auto image" src="../assets/img/facility7.png"  style="height:450px; weight:500px;"/>
        <div class="middle">
            <div class="text rounded">
            Security Post
            </div>
            
        </div>

</div>
</div>
                
            </div>
        </div>
    </div>
    
</div>
<!-- end of about Principal of School-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/gallery.blade.php ENDPATH**/ ?>