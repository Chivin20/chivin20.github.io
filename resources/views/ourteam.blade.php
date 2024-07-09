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
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>ADMINISTRATION</b></h1>
        </div>
    </div>
</div>
<!-- About the Founder -->
<div class="row">
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-5" style ="border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div class="container card">
                    <img class="rounded img-fluid mx-auto image" src="../assets/img/founder1.jpg" width="300px" />
                        <div class="middle">
                            <div class="text rounded">
                            <b>Chief Dr. Epiphanis Nneemeka & Lolo Stella Iregbu</b>
                                <br><b>Founder</b>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div style="padding-left: 60px; padding-right: 20px;">

                        <h2 class = "text-primary text-center"><b>About the Staff</b></h2>
                        <h5 style="text-align: justify; font-family: 'Quicksand', 'sans-serif'; line-height:1.50;">
                        There is no doubt that the successes recorded by any organization are eloquent testimonies 
                        of the high degree of commitment and tenacity of the purpose of its staff and evidence 
                        of the administrative know-how of its managers in actualizing the goals and aspirations of 
                        the organization.
                        <br><br>
                        Likewise, when the organizational climate is warm, cordial, and motivating, when the 
                        spirit of the employees is vibrant, peaceful, and inspiring there is no limit to the 
                        stretch of the potential and expertise of the employees in actualizing the visions of the founders of the establishment. 
                        Hence, producing an amazing work for the cause of providing food to the poor and needy in 
                        our communities.
                           
                        </h5>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
<!-- end of about the founder-->




<div class="row">
    <div class="container" style="font-family: 'Quicksand', sans-serif; margin-left: 20px; margin-top: 50px;">
            <h2 class="text-danger" style="padding-left:40px; font-size:35px;"><b>Ozaramba Foundation Managment Team</b></h2>
    </div>
</div>

<!-- About Principal of School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 20px; margin-bottom: 20px;" >
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
<!-- end of about Principal of School-->




<!-- <div class="row">
    <div class="container" style="font-family: 'Quicksand', sans-serif; margin-left: 20px;">
            <h2><b>Junior Leadership Team</b></h2>
    </div>
</div> -->

<!-- About Principal of School -->
<!-- <div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 20px; margin-bottom: 20px;" >
          
            <div class="row d-flex flex-row flex-nowrap overflow-auto">
                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/v62_6045.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    John Doe
                                    <p>Principal</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>John Doe</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/v62_6045.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    John Doe
                                    <p>Principal</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>John Doe</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/v62_6045.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    John Doe
                                    <p>Principal</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>John Doe</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/v62_6045.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    John Doe
                                    <p>Principal</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>John Doe</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" src="../assets/img/v62_6045.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    John Doe
                                    <p>Principal</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>John Doe</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->
<!-- end of about Principal of School-->
@endsection