
@extends('layout')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    /*
::::::::::::::::::::::::::::::::::::::::::::::::::::
Bootstrap 4 breakpoints
*/
/* Small devices (landscape phones, 544px and up) */
@media (min-width: 300px) {  
    #banner{
        width: 100%; 
        height: 250px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 7%; 
        margin-top: 7%;
        font-size: 13px;
      }
      .banner_write{
        font-size:16px;
      }
  
  }
   
  /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
  @media (min-width: 768px) {  
      #banner{
        width: 100%; 
        height: 500px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 10%; 
        margin-top: 10%;
        font-size: 20px;
      }

      .banner_write{
        font-size:20px;
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
        margin-left: 15%; 
        margin-top: 15%;
        font-size: 25px;
      }

      .banner_write{
        font-size:35px;
      }
     
  }
  
  
   
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 1000px) {  
    h1 {
        font-size:40px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 768px) {  
    h1 {
        font-size:28px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 544px) {  
    h1 {
        font-size:18px; /*1rem = 16px*/
    }    
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

<!--  Carousol -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 2)), url('../assets/img/logo1.jpg');">
                            <div class="row">
                                 <div class="col-12" style = "margin-top: 350px;">
                                     <div id="banner_left" class = "scrolling-text"> 
                         <h4  style="color:white; font-family: sans-seriff;  font-style:opaque; font-weight:Bold;"> 
                         <b>WELCOME TO OZARAMBA FOUNDATION:</b> WHERE WE PUT COMPASSION INTO ACTION </h4>
                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>

                    <div class="carousel-item ">
                   
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.9)),url('../assets/img/s1.jpg');"> 
                            <div class="row">
                                <div class="col-12" style = "margin-top: 350px;">
                                    <div id="banner_left" class = "scrolling-text">
                        <h3 style="color:white; font-family: sans-serriff;  font-style:opaque;">
                           <b> Hosting of Ozaramba Unity Cup</b> 
                        </h3>
                        <!--<p style="color:white;"> <b>We are solving the problem of isolation and <br>
                        lack of support in professional development</b></p> -->
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.8)),url('../assets/img/s2.jpg');"> 
                       <div class="row">
                           <div class="col-8" style = "margin-top: 400px;">
                           <div id="banner_left" class = "scrolling-text">
                   <h3 style="color:white; font-family: sans-serriff;  font-style:opaque;">
                      <b> Ozaramba Football Team </b> 
                   </h3>
                   <!--<p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.8)),url('../assets/img/s3.jpg');"> 
                       <div class="row">
                           <div class="col-12" style = "margin-top: 350px;">
                               <div id="banner_left" class = "scrolling-text">
                   <h3 style="color:white; font-family: sans-serriff;  font-style:opaque;">
                      <b> Chief Dr. Epiphanis Nnemeka "Ozaramba 1 of Nsu" advising his team</b> 
                   </h3>
                   <!--<p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.8)),url('../assets/img/s4.jpg');"> 
                       <div class="row">
                           <div class="col-12" style = "margin-top: 350px;">
                           <div id="banner_left" class = "scrolling-text">
                 <h3 style="color:white; font-family: sans-serriff;  font-style:opaque;">
                      <b> The Management Team of Ozaramba Football Club</b> 
                   </h3>
                    <!-- <p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                    </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
<!-- end of Carousol -->

<!-- About -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                <div class = "section">
                   <img class="rounded img-fluid float-end" src="{{url('/assets/img/logo2.jpg')}}" width="800px"/>
                </div>
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:cyan;">
                    <div style="padding-left: 15px; padding-right: 10px; font-size:18px">
                    <div class = "section">      
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
                        <button  class="btn btn-danger rounded-pill d-none d-md-block"><a href="/aboutus" class = "hov">
                        <b>Read more</b></a></button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of about -->



<!-- About us -->
<div class="row" style = "margin-top:50px; background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 10)),url('../assets/img/contact-bg.jpg');">
    <div class="container-fluid" >
    <div class = "section">
        <div class="col-12" style = "margin-top:50px;">
            <h1 class = "text-warning" style = "text-align:center; color: darkblue;" ><b>Objectives of Ozaramba Foundation</b></h1> 

            <h5 style="text-align: center; color:white; font-family: 'Quicksand', sans-serif; padding-left:70px; 
            padding-right:70px; margin-bottom:70px; line-height: 1.60;">
            To reduce poverty and illness. <br> To support and empower the most vulnerable. <br>To give rural dwellers 
            access to clean and portable drinking water. <br>To support and encourage business start-ups. </h5>

        </div>
    </div>
    </div>
</div>
<!-- end of About us -->

<!-- About Our Vision and Mission -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12">
        <div class = "section">
            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-right: 5px solid; 
                border-right-color:cyan;">
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h1 class = "text-primary" style="color:darkblue;"><b>Our Vision</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        To be part and partner in creating a World where human race will conquer hunger. To create 
                        opportunities for excellence by preparing young people to consistently and positively impact our 
                        world for the present and future generations. 
                        <br>
                        Thereby motivating and inspiring people in small scale businesses to have access to capitals inorder
                        to promote their business and also imbibe knowledge that shapes their thought processes, sharpens 
                        their quest for integrity, and ensures their well-being in every aspect of human endeavour.  
                        </h5>
                    </div>
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h1 class = "text-primary"><b>Our Mission</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        To improve lives in meaningful ways through Scholarships, construction of boreholes in 
                        rural communities to give rural dwellers access to clean, safe and portable drinking water, 
                        donating food supplies to the poor and vulnerable and supporting start-up with business capital.
                        <br>
                        To turn vulnerability into strength. To show Love and Empathy inorder to restore 
                        the dignity of Human Race
                        </h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   <img class="rounded img-fluid float-start" src="../assets/img/v1.jpg" width="800px" />
                </div>

                
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of Our Vision and Mission -->


<!-- About our event -->
<div class="row">
<div class = "section">
    <div class="container-fluid" >
        <div class="col-12" style = "margin-top:40px;">
            <h1 class = "text-danger" style = "text-align:center;" ><b>Our Events</b></h1> 

        </div>
    </div>
    </div>


<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 40px;">
                   
                   <img class="rounded img-fluid float-end" src="../assets/img/event.jpg" width="800px" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 30px;border-left: 5px solid; border-left-color:cyan;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h2 class = "text-primary" style="font-family: 'Quicksand', sans-serif;"><b>Our Event</b></h2>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        December 27th of each year  marks the annual celebration of the fundraising event for 
                        Ozaramba Foundation through Ozaramba Foundation Unity Cup finale for both male and female 
                        soccer teams. In the last five years, Ozaramba Foundation has supported and empowered 
                        vulnerable individuals to meet their basic needs. 
                        <br><br />
                        The Management of Ozaramba Foundation 
                        calls on everyone to join hands with the Foundation in building equitable and 
                        sustainable communities on the principles of Love and Empathy for the human race. 
                        The Foundation is thankful to their donors who have continued to support their efforts in 
                        helping and empowering vulnerable individuals in the communities.</h5>                 
                        <button  class="btn btn-danger rounded-pill d-none d-md-block"><a href="/ourevent" class = "hov">
                        <b>Read more</b></a></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of our event-->


<!--  Carosol Header-->
<div class = "row" style = "margin-top:50px; 
background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 15)),url('../assets/img/contact-bg.jpg');">
<div class="section">
    <div class="container-fluid">
        <div class="col-12 text-center mt-8 text-danger" style = "margin-top:30px; margin-bottom:20px;">
            <h1>_____ Testimonials_____</h1>
            
        </div>
    </div>
</div>

<!-- end of Carosol Header -->

<!--  Carousol -->
    <div class = "row">
    <div class = "section">
    <div class="container-fluid" style = "margin-bottom:50px; color:white;">
        <div class="col-12" >
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner text-center mt-8">
                    <div class="carousel-item active">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                           Ozaramba foundation has been able to provide food for the needy in the community as well as supporting
                           small scale businesses with capitals to boost their businesses. <br>
                           The foundation has also helped youths by organizing and hosting unity cups in order to keep the youths
                           off the street.
                        </h5>
                        <h4>MRS NWOKO CHINYERE</h4>
                        
                    </div>

                    <div class="carousel-item">
                        
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            Ozaramba Foundation as a Non-Governmental Organization (NGO) with liited resources and with 
                            a genuine purpose of improving the living standard of the less priviledged
                            children by giving them shelter, food, healthy conditions, education etc. 
                        </h5>
                        <h4>DR. MRS. UDEANYA OGECHI</h4>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            Ozaramba Foundation has helped in supporting destitute elderly women by giving them food
                            every day and instilling a hope in them that they too are wanted. <br> struggling women with a lot of
                            responsibilities have an avenue to work and earn with dignity through tailoring centers and other
                            businesses.                       
                        </h5>
                        <h4>MRS LILIAN OGUOMA</h4>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                        Chief Dr. Epiphanis Nnemeka (Ozaramba 1 of Nsu) & Lolo Stella Iregbu through Ozaramba Foundation is 
                        carrying out for so many years with immense hard work, dedication, perseverance and with a vision to
                        support and uplift the economically and socially deprived people. 
                        </h5>
                        <h4>DR OGUOMA OKECHUKWU</h4>
                    </div>
                 
                </div>
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- end of Carousol -->


<!--  Team Header-->
<div class="row" style="margin-top: 50px;">
<div class = "section">
    <div class="container-fluid ">
        <div class="col-12 text-center text-danger" >
            <h1><b>Meet our Team</b></h1>
        </div>
    </div>
</div>
</div>
<!-- end of Team Header -->

<!-- About Our Team -->
<div class="row">
<div class = "section">
    <div class="container">
        <div class="col-12" style="margin-top: 10px; margin-bottom: 20px;" >
            <div class="row">
            <div class="col-sm-12 col-md-5" >
                    <div class="container card" style = "margin-top: 40px;">
                        <img class="rounded img-fluid mx-auto image" src="../assets/img/founder.jpg" width="300px" />
                        <div class="middle">
                            <div class="text rounded">
                            Chief Dr. Epiphanis Nneemeka & Lolo Stella Iregbu
                                <p>Founder</p>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7" style="margin-top: 30px;border-left: 5px solid; border-left-color:cyan;">
                    <div style="padding-left: 40px; padding-right: 10px; font-size: 18px;">
                        
                        <h2 class = "text-primary" style = "font-weight: Bold;">Ozaramba Foundation</h2>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height:1.60;">
                        There is no doubt that the successes recorded by any organization are eloquent testimonies of the high degree of commitment and 
                        tenacity of the purpose of its staff and evidence of the administrative know-how of its managers in actualizing the goals and aspirations of 
                        the organization.<br><br>
                        Likewise, when the organizational climate is warm, cordial, and motivating, when the spirit of the employees is vibrant, 
                        peaceful, and inspiring there is no limit to the stretch of the potential and expertise of the employees in actualizing the visions of the founders of the establishment. 
                        Hence, producing an amazing work for the cause of providing food to the poor and needy in our communities.
         
                        </h5>
                        <button  class="btn btn-danger rounded-pill d-none d-md-block"><a href="/ourteam"class = "hov">
                        <b>Read more</b></a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
    <div class="container-fluid">
        <div class="col-12" >
        <div class="row d-flex flex-row flex-nowrap overflow-auto">

                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/romanus.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>Admin Manager</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Mr. Romanus Chukwudi Nwokorie </b> </h5>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/ogechi.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>Secretary</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Ogechi Ofoma Chile </b> </h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/precious.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Admin Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Udeanya Precious Zoe </b> </h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/sarah.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Admin Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Sarah Ndukwo Ojebe </b> </h5>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<!-- end of out team-->


@endsection

