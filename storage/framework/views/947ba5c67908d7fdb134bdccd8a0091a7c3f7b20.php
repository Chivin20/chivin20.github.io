


<?php $__env->startSection('content'); ?>
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
        margin-left: 20%; 
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
        font-size:22px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 544px) {  
    h1 {
        font-size:16px; /*1rem = 16px*/
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
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 5)), url('../assets/img/slider1.jpg');">
                            <div class="row">
                                 <div class="col-8" style = "margin-top: 5px;">
                                     <div id="banner_left" class = "section"> 
                         <p style="color:yellow;"> <b>WELCOME TO ACHIEVER'S NETWORK</b> </p>
                            <h1 class = "banner_write" style="color:white; font-family: sans-seriff;  font-style:opaque; font-weight:Bold;">
                            PROVIDING NECCESSARY TOOLS FOR PROFESSIONAL DEVELOPMENT </h1>
                        <p  style="color:yellow; font-family: sans-serriff;  font-style:opaque; font-weight:Bold;">We empower individuals to reach their goals and advance in their careers.</p>
                        <button onclick="contactus()" class="btn btn-primary btn-sm rounded-pill" style = "font-size:18px;"><b>GET STARTED</b></button>
                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>

                    <div class="carousel-item ">
                   
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('../assets/img/slider2.jpg');"> 
                            <div class="row">
                                <div class="col-8">
                                    <div id="banner_left">
                      <!--  <h1 class = "banner_write" style="color:yellow; font-family: sans-serriff;  font-style:opaque;">
                           <b> Empowering Success!</b> 
                        </h1>
                        <p style="color:white;"> <b>We are solving the problem of isolation and <br>
                        lack of support in professional development</b></p> -->
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('../assets/img/slider3.jpg');"> 
                       <div class="row">
                           <div class="col-8">
                               <div id="banner_left">
                 <!--  <h1 class = "banner_write" style="color:yellow; font-family: sans-serriff;  font-style:opaque;">
                      <b> Empowering Success!</b> 
                   </h1>
                   <p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('../assets/img/slider4.jpg');"> 
                       <div class="row">
                           <div class="col-8">
                               <div id="banner_left">
                 <!--  <h1 class = "banner_write" style="color:yellow; font-family: sans-serriff;  font-style:opaque;">
                      <b> Empowering Success!</b> 
                   </h1>
                   <p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('../assets/img/slider5.jpg');"> 
                       <div class="row">
                           <div class="col-8">
                               <div id="banner_left">
                 <!--  <h1 class = "banner_write" style="color:yellow; font-family: sans-serriff;  font-style:opaque;">
                      <b> Empowering Success!</b> 
                   </h1>
                   <p style="color:white;"> <b>We are solving the problem of isolation and <br>
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

<!-- what we do -->
<div class="row">
    <div class="container-fluid">
    <div class = "section">
        <div class="col-12" style=" margin-top: 70px;">
        <h1 class = "text-danger" style = "font-family:sans-seriff; font-size:30px; font-style:opaque; text-align:center"> 
        <b>What We Offer</b> </h1> 
        </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid">
        <div class = "col-12">
            <div class = "section">

            <div class ="row">
                <div class="col-sm-4" style="margin-top: 70px;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h3 style = "font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:darkblue;">
                        <b>Creative Concept</b></h3>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Connecting driven individuals to opportunities, able mentors, and like minded professionals
                        thereby empowering success. </h5>
                    </div> 
                </div>

                <div class="col-sm-4" style="margin-top: 70px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h3 style = "font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:darkblue;">
                        <b>Market Analysis</b> </h3>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Tailor Message to their interest and need using Social Media and E-mail Marketing to
                        reach them effectively </h5>
                    </div> 
                </div>

                <div class="col-sm-4" style="margin-top: 70px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h3 style = "font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:darkblue;">
                        <b>Empowering Individuals</b></h3>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        We empower individuals to reach their goals and advance in their. We are solving the problem of
                        isolation and lack of support in Professional Development. </h5>
                    </div> 
                </div>
            </div>

            </div>
        </div>
    </div>
</div>

<!-- end of what we offer -->


<!-- About us -->
<div class="row" style = "margin-top:50px; background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 10)),url('../assets/img/contact-bg.jpg');">
    <div class="container-fluid" >
    <div class = "section">
        <div class="col-12" style = "margin-top:50px;">
            <h1 class = "text-danger" style = "text-align:center;" ><b>About Us</b></h1> 
            </br>

            <h5 style="text-align: center; color:white; font-family: 'Quicksand', sans-serif; padding-left:70px; padding-right:70px; margin-bottom:70px;">
            Achiever's Network deals with isolation & lack of support of professional development, educate individuals
            on how to choose career compatible with their skills and value, connects and empower individuals to reach their 
            goals, advertising and publicizing, network events and workshops for professional development. </h5>

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
                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:darkblue;"><b>Our Vision</b> </h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        To create opportunities for excellence by preparing young people to consistently and positively impact our world for the present and future generations. 
                        This would entail motivating and inspiring our students to access and imbibe knowledge that shapes their thought processes, 
                        sharpens their quest for integrity, and ensures their well-being in every aspect of human endeavour. 
                        <br>
                        To create a world shaped by empowerment, innovation, technology, and passion for positive change and development. 
                        </p>
                    </div>
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:darkblue;"><b>Our Mission</b> </h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        To inspire and motivate our students, through the establishment of adequate behavioural support, to meet the moral, 
                        economic academic, sociocultural, 
                        and emotional challenges of our time.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   <img class="rounded img-fluid float-start" src="../assets/img/mission.jpg" width="800px" />
                </div>

                
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of Our Vision and Mission -->


<!-- About our structure -->
<div class = "section">
<div class="row" style = "margin-top:50px;">
    <div class="container-fluid" >
        <div class="col-12" style = "margin-top:50px;">
            <h1 class = "text-danger" style = "text-align:center;" ><b>Our Structure</b></h1> 

        </div>
    </div>
    </div>


<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   
                   <img class="rounded img-fluid float-end" src="../assets/img/structure.jpg" width="800px" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:darkblue; font-family: 'Quicksand', sans-serif;"><b>Achiever's Network Structure</b></h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Achiever's Network comprises of diligent, displined and dedicated team, this team comprises of professional personal
                        that guide and coach individuals on how to achieve their goals. They also tailor messages to their interest and needs using
                        social media and Email Marketing.
                        <br><br />
                        They target audience include organizations who want to minimize process logs through strategic sourcing of customer expectation
                        management and so on. Achiever's Network helps in providing means for individuals and organizations to achieve their goals. 
                        </p>                 
                        <button  class="btn btn-primary rounded-pill d-none d-md-block"><a href="/ourstructure">Read more</a></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of our structure-->


<!--  Carosol Header-->
<div class = "section" style = "margin-top:20px; background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 10)),url('../assets/img/contact-bg.jpg');">
<div class="row">
    <div class="container-fluid mt-5">
        <div class="col-12 text-center mt-5 text-danger" >
            <h1>_____ Testimonials_____</h1>
            
        </div>
    </div>
</div>
<!-- end of Carosol Header -->

<!--  Carousol -->
<div class="row">
    <div class="container-fluid" style = "margin-bottom:50px; color:white;">
        <div class="col-12 text-center mt-5" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            My daughter went from struggling with Mathematics before  I brought her here to winning ways<br />
                            Today, she can confidently take part in Maths competitions at her level with a high chance of doing very well.<br />
                             Thanks to the transformation from members and staff of Sankt George. 
                            Sankt George is the best place to be
                        </p>
                        <h5>MRS NWOKO CHINYERE</h5>
                        
                    </div>

                    <div class="carousel-item ">
                        
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            I got involved with Sankt George School after my son’s academic improvement after a few weeks of their free summer lesson. <br />
                            I had to pull him out of his previous school to continue at Sankt George. After the first term here,<br />
                             I’ve since more improvement both morally and academically
                        </p>
                        <h5>DR. MRS. EBE TOCHUKWU</h5>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            My joy is the fact that after just one term, my daughter is now more outspoken,<br />
                             confident, and shows her eagerness to learn. <br />
                            It’s beautiful to watch as a parent                      
                        </p>
                        <h5>MRS LILIAN OGUOMA</h5>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            Among other things, one area I love about the administration is how spontaneous <br />
                            they are with improvement in areas parents raise concerns
                        </p>
                        <h5>DR OGUOMA OKECHUKWU</h5>
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
</div>
<!-- end of Carousol -->


<!--  Team Header-->
<div class = "section">
<div class="row" style=" margin-top: 50px;">
    <div class="container-fluid  ">
        <div class="col-12 text-center text-danger" >
            <h1>Meet our Team</h1>
        </div>
    </div>
</div>
</div>
<!-- end of Team Header -->

<!-- About Our Team -->
<div class = "section">
<div class="row">
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-5"  >
                    <div class="container card">
                        <img class="rounded img-fluid mx-auto image" src="../assets/img/founder.jpg" width="300px" />
                        <div class="middle">
                            <div class="text rounded">
                            Sir Kelvin Emeka
                                <p>Founder</p>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div style="padding-left: 40px; padding-right: 20px; font-size: 18px;">
                        
                        <h3 style = "font-weight: Bold;">Achiever's Network Team</h3>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        There is no doubt that the successes recorded by any organization are eloquent testimonies of the high degree of commitment and 
                        tenacity of the purpose of its staff and evidence of the administrative know-how of its managers in actualizing the goals and aspirations of 
                        the organization.
                        Likewise, when the organizational climate is warm, cordial, and motivating, when the spirit of the employees is vibrant, 
                        peaceful, and inspiring there is no limit to the stretch of the potential and expertise of the employees in actualizing the visions of the founders of the establishment. 
                        Hence, the glittering academic, spiritual, and social transformation parents witness in their children since the inception of the school. 
         
                        </p>
                        <button  class="btn btn-primary rounded-pill d-none d-md-block"><a href="/ourteam">Read more</a></button>
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
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/ceo.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>Chief Executive Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> Achiever Angel Ogbonna </h5>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/sec.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>General Secretary</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> Achiever Chioma Chinedu </h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/coo.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Chief Operating Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title">Achiever Udeanya Precious Zoe</h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/presenter.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Presenter</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title">Achiever Charles Ogbonnaya</h5>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<!-- end of out team-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function contactus(){
        window.location = '/contactus'
    }
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\achieversnet\resources\views/home.blade.php ENDPATH**/ ?>