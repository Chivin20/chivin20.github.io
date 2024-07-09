

<?php $__env->startSection('content'); ?>

<style>
      
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
</style>
<div class="row">
    <div class="container">
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>ABOUT US</b></h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   
                   <img class="rounded img-fluid float-end" src="<?php echo e(url('/assets/img/about.png')); ?>" style =" width:600px; margin-bottom:20px;" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                      
                        <h3 style="color:#4A0404;">Sankt Georg School</h3>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Sankt Georg International School (SGIS) Avu, Owerri West Local Government Area, Imo State, Nigeria, 
                        is a co-educational School owned by Echidime Hope For Future Foundation Nigeria, 
                        in collaboration with Echidime Hoffnung fuer die Zukunft Germany. SGIS is duly acquired, 
                        officially and legally registered, 
                        and approved by the Imo State Government.
                        <br>
                        SGIS is a model school of international standards with a mission for quality academic standards and personalized attention. The Secondary Section of SGIS is exclusively for boarders.   <br /> <br />
                        SGIS is known for its Conducive Learning Environment, Qualified Teachers, Personalized Attention, Activity Based Learning, Modern Approach, etc.

                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style = "background-color:#FFFEFA;">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:#4A0404;">Our Vision </h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        To create opportunities for excellence by preparing young people to consistently and positively impact our world for the present and future generations. 
                        This would entail motivating and inspiring our students to access and imbibe knowledge that shapes their thought processes, 
                        sharpens their quest for integrity, and ensures their well-being in every aspect of human endeavour. 
                        <br>
                        To create a world shaped by empowerment, innovation, technology, and passion for positive change and development. 
                        </p>
                    </div>
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:#4A0404;">Our Mission </h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        To inspire and motivate our students, through the establishment of adequate behavioural support, to meet the moral, 
                        economic academic, sociocultural, 
                        and emotional challenges of our time.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   <img class="rounded img-fluid float-start" src="../assets/img/comupter_lab.png" style =" width:600px; margin-bottom:20px;" />
                </div>

                
            </div>
        </div>
    </div>
</div>
<!-- end of Our Vision and Mission -->

<?php $__env->stopSection(); ?>
<!-- end of about -->
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/aboutus.blade.php ENDPATH**/ ?>