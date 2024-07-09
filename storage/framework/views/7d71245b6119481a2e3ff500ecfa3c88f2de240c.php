

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
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>FACILITIES</b></h1>
        </div>
    </div>
</div>



<!-- About Principal of School -->
<div class="row">
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-5"  >
                    <div class="container card">
                        <img class="rounded img-fluid mx-auto image" src="../assets/img/facility5.png" width="300px"  />
                        <div class="middle">
                            <div class="text rounded">
                                School Computer
                                <p>laboratory</p>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div style="padding-left: 40px; padding-right: 20px; font-size: 16px;">
                        
                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:20px;">Science Laboratories</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        There are separate purpose-built laboratories for Physics, Chemistry, Basic Technology, Biology, and Mathematics subjects.
                        </p>

                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:20px;">Art Laboratories</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                         There are separate purpose-built laboratories for Geography and Home Economics subjects.
                        </p>

                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:20px;">Library</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                         The secondary school section has a well-equipped spacious library with books from various fields to enable students to perform any research work. 
                        The library also serves as a quiet zone for students to study.
                        </p>

                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:20px;">Audio-Visual Laboratory</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The laboratory is equipped with a smart interactive board, projectors, surround sound system, and purpose-designed furniture
                        </p>

                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:20px;">Language Laboratory</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The laboratory serves to enable students to learn new languages more effectively by using equipment that monitors their abilities in pronunciation and comprehension.
                        </p>
                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:20px;">Agriculture</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        There is a school farm and fish pond to promote the learning of agricultural science
                        </p>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of about Principal of School-->



<!-- About Principal of School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility6.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    Audio-Visual

                                    <p>Laboratories</p>
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility2.png" />
                            <div class="middle">
                                <div class="text rounded">
                                Play Ground
                                </div>
                                
                            </div>
                    
                       
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility3.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    Art 
                                    <p>Laboratories</p>
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility4.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    Class room
                                </div>
                                
                            </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3, d-flex align-items-center justify-content-center" style = "padding-bottom: 25px;">
    <button class="btn btn-outline-danger rounded-pill bg-danger"><a href="/gallery">View More</a></button>
    </div>
</div>
<!-- end of about Principal of School-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/facilities.blade.php ENDPATH**/ ?>