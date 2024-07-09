

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
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>Book a Visit</b></h1>
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
                        <img class="rounded img-fluid mx-auto image" src="../assets/img/schoolproprietor.jpg" style = "width:400px; height:500px;"/>
                        <div class="middle">
                            <div class="text rounded">
                            Rev Fr. Victor Anoka
                                <p>School Proprietor</p>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div style="padding-left: 40px; padding-right: 20px; font-size: 20px;">
                        
                        <h6 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:35px;">Hello</h6>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                            You are warmly invited to meet senior members of staff who will be happy to discuss your child's education with you. 
                            We are currently able to offer in-school meetings, 
                            remote online meetings and tours of the campus.          
                        </p>

                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                            And you can as well book a visit on the open day when the date has been made know. 
                            please do well to visit your children from time to time.        
                        </p>

                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                            Our Customer Service Department is available to answer any questions you may have. 
                        </p>

                       
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                            To book a visit please contact admissions on <b>090154962207</b> or send us an 
                            <b>E-mail: Sanktgeorgcustomerservice@gmail.com.</b>              
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of about Principal of School-->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/visit.blade.php ENDPATH**/ ?>