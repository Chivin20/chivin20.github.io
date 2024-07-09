@extends('layout')

@section('content')

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
<div class = "section">
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
                   
                   <img class="rounded img-fluid float-end" src="{{url('/assets/img/aboutus.jpg')}}" style =" width:600px; margin-bottom:20px;" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 40px;">
                        
                        <h1 class = "text-primary" style="text-align:center;"><b>About Ozaramba Foundation</b></h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        Ozaramba Foundation is a Non-Profit, Non-Governmental Organization (NGO) committed to assisting, 
                        supporting and empowering Children, Women, Youths with Special Needs and other Vulnerable 
                        Individuals and was founded by Chief Dr. Epiphanis Nnemeka (Ozaramba 1 of Nsu) & Lolo Stella Iregbu.
                        <br> <br>
                        The Foundation aims to improve lives in meaningful ways through Scholarships, construction of 
                        boreholes in rural communities to give rural dwellers access to clean, safe and portable drinking 
                        water, donating food supplies to the poor and vulnerable and supporting start-up with business 
                        capital.
                        </h5>
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
                <div class="col-sm-12 col-md-6" style="margin-top: 50px; ">
                    <div class="text-center" style="padding-left: 40px; padding-right: 40px;">
                    <h1 class = "text-primary" style="color:darkblue;"><b>Our Vision</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        To be part and partner in creating a World where human race will conquer hunger. To create 
                        opportunities for excellence by preparing young people to consistently and positively impact our 
                        world for the present and future generations. 
                        <br><br>
                        Thereby motivating and inspiring people in small scale businesses to have access to capitals inorder
                        to promote their business and also imbibe knowledge that shapes their thought processes, sharpens 
                        their quest for integrity, and ensures their well-being in every aspect of human endeavour.  
                        </h5>
                    </div>
                    <div class="text-center" style="padding-left: 40px; padding-right: 40px;">
                    <h1 class = "text-primary"><b>Our Mission</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.50;">
                        To improve lives in meaningful ways through Scholarships, construction of boreholes in 
                        rural communities to give rural dwellers access to clean, safe and portable drinking water, 
                        donating food supplies to the poor and vulnerable and supporting start-up with business capital.
                        <br><br>
                        To turn vulnerability into strength. To show Love and Empathy inorder to restore 
                        the dignity of Human Race
                        </h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px; margin-bottom: 60px; border-left: 5px solid; border-left-color:#FFE5B4;">
                   <img class="rounded img-fluid float-start" src="../assets/img/mission.jpg" style =" width:600px;" />
                </div>

                
            </div>
        </div>
    </div>
</div>
<!-- end of Our Vision and Mission -->

@endsection
<!-- end of about -->