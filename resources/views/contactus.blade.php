@extends('layout')

@section('content')

<div class = "section">
<div class="row">
<div class="container">
<div class="col-12">

        <div class="col-sm-12 col-md-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>CONTACT US</b></h1>
        </div>
        </div>
        </div>
        </div>

    
<!-- About Principal of School -->       
<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">

    <div class="col-sm-12 col-md-6" style="margin-top: 40px;">

        <div class="text-left" style="padding-right: 20px; padding-bottom: 25px;">
       
                        <div class="shadow p-3 mb-2 bg-body rounded">
                             <div class="row">
                                <div class="col-3">
                            <h5><b> Address: </b> </h5>
                                </div>
                                <div class="col-9">
                            <h5 style = "text-align:justify;"> Online</h5>
                            <h5 style = "text-align:justify;"> To visit us Click on the link below </h5>
                            <h5 style = "text-align:justify;"> 
                            <a href = "https://www.facebook.com/groups/3515220102102074" id = "navi" target = "_blank"> 
                            Visit Us </a> </h5> 
                               
                                </div>
                            </div>
                        </div>

                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h5><b> Telephone: </b> </h5>
                        </div>
                        <div class="col-9">
                            <h5 style = "text-align:justify;">07036398353 </h5>
                            <h5 style = "text-align:justify;">08102933400 </h5>
                        </div>
                    </div>
                </div>

                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h5> <b> Email: </b> </h5>
                        </div>
                        <div class="col-9">
                            <h5 style = "text-align:justify;">ozarambafoundation@gmail.com </h5>
                            <!-- <p>sanktgeorg044@gmail.com</p> -->
                        </div>
                    </div>
                </div>


                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h5> <b> Website: </b> </h5>
                        </div>
                        <div class="col-9">
                            <h5 style = "text-align:justify;"> www.ozarambafoundation.com</h5>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>  
    </div>
        </div>


                <div class="col-sm-12 col-md-6"  style=" font-family: 'Quicksand', sans-serif; 
                background-color:#FFFEFA; border-left: 5px solid; border-left-color:#FFE5B4; margin-bottom:20px;">
                     <h1 class="mt-3 pt-3" style="font-size: 22px; text-color: black; margin: 20px 20px"><b>GET IN TOUCH</b></h1>
                
                    <form action="#">
						<div class="row form-group">
							<div class="col-9" style = "margin-bottom:10px;">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Full Name">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-9" style = "margin-bottom:10px;">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Email Address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-9" style = "margin-bottom:10px;">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Subject of the Message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-9" style = "margin-bottom:10px;">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
							</div>
						</div>
						<div class="form-group" style = "margin-bottom:10px;">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
                </div>
</div>       
       
<!-- <div class="col-sm-12 col-md-6">
          <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15887.331919000448!2d6.941180016540041!3d5.44231508091392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10425b7eb772dc23%3A0xa6046d93de08023c!2s460117%2C%20Avu%2C%20Imo!5e0!3m2!1sen!2sng!4v1685436827990!5m2!1sen!2sng" width="1500" height="400" style="border:10px; margin-bottom:20px;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
          </div>
        </div> -->        
</div>
</div>
</div>
</div>

<!-- end of about Principal of School-->

 

@endsection