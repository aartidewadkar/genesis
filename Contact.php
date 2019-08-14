<!DOCTYPE html>
<html lang="en">
<?php
	include 'head.php';
?>
<body>
	<?php
		include 'header.php'
    ?>
    <!-- Enquiry Modal start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form name="enquiry" action="register.php" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                            <div class="row">
                                <div class="col-md-1"></div>
                                <label for="formGroupExampleInput" class="bmd-label-floating col-md-9"> Name :
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <input type="text" placeholder="Amit shinde" class="form-control col-md-9"
                                    id="formGroupExampleInput" name="name" required *>
                            </div>

                        </div>
                        <div class="form-group bmd-form-group">
                            <!-- manually specified -->
                            <div class="row">
                                <div class="col-md-1"></div>
                                <label for="formGroupExampleInput2" class="bmd-label-floating col-md-9">Email :
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <input type="email" placeholder=" abc@gmail.com" required *
                                    class="form-control col-md-9" id="formGroupExampleInput2" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                            <div class="row">
                                <div class="col-md-1"></div>
                                <label for="formGroupExampleInput" class="bmd-label-floating col-md-9">Phone :
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <input type="tel" placeholder="+91  " required * class="form-control col-md-9"
                                    id="formGroupExampleInput" pattern="[0-9]{10}" name="phone">
                            </div>

                        </div>
                        <div class="form-group">
                            <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                            <div class="row">
                                <div class="col-md-1"></div>

                                <select class="browser-default custom-select" name="intrested">
                                    <option selected>Intressed in</option>
                                    <option>1 BHK</option>
                                    <option>2 BHK</option>
                                    <option>3 BHK</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>

    <!--Enquiry Model ends here-->

    <!-- contact page start -->
    
        <div class="bg-image">
            <img class="img-fluid" src="images/c2.jpg" alt="">
        </div>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                    <h3>corporate office</h3>
                      <address class="contact-info">
                    <span><i class="fa fa-map-marker"></i> <span style="position:relative;display:inline;">
                            Office No. 107, 1st Floor,</span> <br>
                        <span style="position:relative; margin-left:30px; display:inline;">Wisteria
                            Fortune, </span><br>
                        <span style="position:relative; margin-left:30px; display:inline;">
                            Murunji Road, Bhumkar Chowk, Wakad,Pune –411057.</span><br>
                        <span><i class="fa fa-envelope"></i><a href="#">imaginehomeland@gmail.com</a></span><br>
                        <span><i class="fa fa-phone"></i>9923081144</span></span><br>
                    <span><i class="fa fa-globe"></i><a
                            href="https://pinewooddrive.com">https://pinewooddrive.com</a></span>
                    <span class="contact-social">
                        <div class="agent-social-bar margin-top-30">
                            <div align="left">
                                <div class="pull-left">
                                    <a class="icon-margin"
                                        href="https://www.facebook.com/Pinewood-Hinjewadi-100195567993569/"
                                        target="_blank">
                                        <i class="fa fa-facebook-square fa-2x"></i>
                                    </a>
                                </div>
                                <div class="pull-left">
                                    <a class="icon-margin" href="#" target="_blank">
                                        <i class="fa fa-linkedin-square fa-2x"></i>
                                    </a>
                                </div>
                                <div class="pull-left">
                                    <a class="icon-margin" href="https://twitter.com/MobiRag" target="_blank"
                                        style="color: #1da1f2;">
                                        <i class="fa fa-twitter-square fa-2x" style="color: #1da1f2;"></i>
                                    </a>
                                </div>
                                <div class="pull-left">
                                    <a class="icon-margin" href="#" target="_blank">
                                        <i class="fa fa-google-plus-square fa-2x"></i>
                                    </a>
                                </div>
                                <div class="pull-left">
                                    <a class=" icon-margin" href="#" target="_blank" style="color: #cd201f;">
                                        <i class="fa fa-youtube-square fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            </d>
                    </span>
                </address>
            </div>
            <div class="col-md-6">
                   <form name="enquiry" action="register.php" method="post" onsubmit="return validateForm()">
                    <div class="contact100-form validate-form form-group">
                         <span class="contact100-form-title">Contact Us</span> 

                        <label class="label-input100" for="first-name"></label>
                        <div class="wrap-input100 rs1 validate-input">
                            <input id="formGroupExampleInput" class="input100" type="text" name="name"
                                placeholder="First name"  required * >
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs1 validate-input">
                            <input id="formGroupExampleInput" class="input100" type="text" name="name"
                                placeholder="Last name" required *>
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="email"></label>
                        <div class="wrap-input100 validate-input">
                            <input id="formGroupExampleInput2" class="input100" type="text" name="email"
                                placeholder="Your email" name="email" required *>
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="phone"></label>
                        <div class="wrap-input100">
                            <input id="formGroupExampleInput" pattern="[0-9]{10}" class="input100" type="text"
                                name="phone" placeholder="Your phone" name="phone" required *>
                            <span class="focus-input100"></span>
                        </div>

                        <select class="browser-default custom-select input100 size" name="intrested">
                            <option selected>I am intressed in</option>
                            <option>1 BHK</option>
                            <option>2 BHK</option>
                            <option>3 BHK</option>
                        </select>


                        <label class="label-input100" for="message"></label>
                        
                        <div class="container-contact100-form-btn">
                            <button type="submit" value="Submit" class="btn btn-primary"
                                style="margin-top: 10%;">Submit</button>
                            <span class='error-message' id='submit-error'></span>

                </form>
            </div>
        </div>
    </section>
   

    <!-- Location -->
    <div class="map">
        <div class="map_container">
            <h2 class="text-center" style="padding-bottom:30px">Location</h2>
            <div class="title-separator-primary2" style="top: -35px; height: 2px;"></div>
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60507.77889533231!2d73.68317!3d18.585929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48d804381fd1bcc4!2s32+Pinewood+Drive!5e0!3m2!1sen!2sus!4v1564802608628!5m2!1sen!2sus"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- end Location -->


    <!-- footer start -->
   <?php
    include 'footer.php'
    ?>
</body>

</html>