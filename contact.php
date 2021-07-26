
<?php include 'header.php' ?>

        </div><!-- /.site-header -->

        <!-- Slider -->        <!-- Page title -->
        <div class="page-title parallax-style contact">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2>Contact us</h2>
                        </div><!-- /.page-title-heading -->                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->

        <div class="page-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="breadcrumbs">
                           
                            <ul class="trail-items">
                                <li class="trail-item"><a href="index-2.html">Home</a></li>
                                <li>Contact us</li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-breadcrumbs -->

     
     

        <div class="flat-row pad-bottom40px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="flat-contact-us">
                            <h4 class="flat-title-section style mag-top0px">Contact Details</h4>
                            <p>Find out opening hours and information for MSQUARE. Thank you !</p>
                        </div>
                        
                         <p>
                            <p>
                             <b>Salem Hayf Salem Al Saadi Cont. Est.</b><br/>

                              Al jubail 35518, Kingdom of Saudi Arabia.<br/> 
                            </p>
                           Mobile: +966 541 123 492, +966 541 123 494<br/>
                           
                            Email: <a class="scheme" href="mailto:msquareksa.com">admin@msquareksa.com</a>
                        </p>

                        <div class="flat-divider d20px"></div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-8">
                        <p>Please fill out the following form and a representative will contact you.</p>
                        <div class="flat-divider d10px"></div>
                        <form id="contactform" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><input id="name" name="name" type="text" value="" placeholder="Name" required="required"/></p>

                                    <p><input id="email" name="email" type="email" value="" placeholder="Email" required="required"/></p>

                                    

                                    <p><input id="mobile" name="phone" type="text" value="" placeholder="Phone Number" required="required"/></p>                                
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <p><textarea id="comments" name="message" placeholder="Comment" required="required"></textarea></p>
                                    <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Send Mail"/>
                                    </span>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->
          <div class="flat-row pad-top0px pad-bottom30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28446.319052021016!2d49.62965127715152!3d26.97355251671027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e35a10f4f338149%3A0xa82af612d5fd923e!2sKing%20Fahd%20Industrial%20Port%2C%20Al%20Jubail%2035518%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1624893470414!5m2!1sen!2sin"
                        
                        style="width:100%; height:400px;" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                   </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->
      <!-- Footer -->
      <?php include 'footer.php' ?>
	 <script>
$(document).ready(function(){
	
	 $(".contact-form").submit(function (e) {
                                     e.preventDefault();
                                     var flag = true;
									 
									 
                                     var name = $("#name").val();

                                     var mobile = $("#mobile").val();

                                     var email = $("#email").val();
									
									 
									 
									

                                     var comments = $("#comments").val();
                                     
                                     

                                    
                                   

                                   


                                     if (flag) {
                                         var postBody = "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------" + "<br>";
										 
									
                                         postBody += "Name   :" + name+ "<br/>";
									
                                         postBody += "Mobile :" + mobile + "<br/>"; 
										
                                         postBody += "Comment:" + comments + "<br/>";
                                         postBody += "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------" + "<br>";



                                         var dataString = 'ebody=' + postBody + '&email=' + email;

                                         //  $(".loading").show(); // show loading div
                                         $.ajax({
                                             type: "POST",
                                             url: "process.php",
                                             data: dataString,
                                             success: function (data) {
												   $(".contact-form")[0].reset();
                                                 alert(data);
                                                // $(':input').not(':button,:submit').val('');
                                             }

                                         });


                                     }
                                 }
                   );

	
	
	
	

});
</script>