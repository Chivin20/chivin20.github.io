@extends('layout')

@section('content')

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
<div class = "section">
<div class="row">
    <div class="container">
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>EVENTS</b></h1>
        </div>
    </div>
</div>



<!-- About Principal of School -->
<div class="row">
    <div class="container">
        <div class="col-12" style="margin-top: 30px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-5" style ="border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div class="container card">
                        <img class="rounded img-fluid mx-auto image" src="../assets/img/event1.jpg" width="300px"  />
                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div style="padding-left: 40px; padding-right: 20px; font-size: 16px; text-align:justify;">
                        
                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                         We are Improving Lives in Communities.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        We Support and Empower the Most Vulnerable in Communities.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        We Turn Vulnerability Into Strength.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        A Foundation Supporting & Spreading The Message of Love & Empathy To Restore 
                        the Dignity of The Human Race.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        We Help and Support The Weak and Vulnerable To Meet Their Basic Needs.</h5>
                        
                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        We Support and Encourage New Businesses With Start-ups Capital.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        Rural Communities Deserve Access To Clean, Save and Portable Drinking Water.
                        <br><br> Ozaramba Foundation is Committed To Providing The Access.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        We Donate Food Supplies To The Weak, Poor & Vulnerable in Communities.</h5>

                        <h5 style="font-family: 'Quicksand', sans-serif; font-size:20px;">
                        Ozaramba Foundation Unity Cup: A Fund Raising Annual Soccer Game For Male and Female Teams To Support 
                        the Works and Programs of The Foundation.</h5>
                        
                        
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
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/e8.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    FEEDING SCHOOL PUPILS
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/e9.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                FEEDING SCHOOL PUPILS
                                </div>
                                
                            </div>
                    
                       
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/e10.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                FEEDING SCHOOL PUPILS
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/e11.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    Feeding the Needy
                                </div>
                                
                            </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <!--<div class="col-sm-12 col-md-3, d-flex align-items-center justify-content-center" style = "padding-bottom: 25px;">
    <button class="btn btn-outline-danger rounded-pill bg-danger"><a href="/gallery">View More</a></button>
    </div>
</div>
end of about Principal of School-->
@endsection