<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../public/js/pine.js"></script>
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
 
 <!--Enquiry Model ends here -->

 <section class="about-image no-padding about"
        style="background: #152560 url('https://www.namratagroup.com/img/about-image.jpg') no-repeat center;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 short-image-title">
                    <h1 class="second-color wow fadeInDown" style="color:black;font:bold;">About Us</h1>
                    <div class="short-title-separator"></div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">a</div>
                    <div class="col-md-12">

                        <div class="about-desc">
                            <p class="wow fadeInLeft">32 Pinewood Drive Group has been into
                                the
                                real estate business since
                                the
                                past 30 years and created a niche for itself in Talegaon, Kamshet and Pune.
                                &nbsp;32 Pinewood Drive Group caters to every segment of the society and makes the
                                dream
                                of
                                every
                                home buyer their very &nbsp;own and work in the same direction.
                                &nbsp; Their focus has been into developing premium residential townships,
                                commercial
                                complexes, lifestyle gated communities and affordable abodes. It firmly believes in
                                the
                                philosophy of ‘Think. Feel. Do’ for its customers, employees and its stakeholders.
                                The brand today has risen to become a brand known for innovation in design, assured
                                quality and cutting-edge engineering. Add to that a committed powerhouse of human
                                resource that's always eager to rise to the next level.
                                &nbsp;
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- vision section start -->
    <section class="section-light top-padding-45 section-both-shadow bottom-padding-45"
        style="z-index:90; background-color:#fff;">

        <div class="container vision wow fadeInRight" style="margin-top:50px;">
            <div class="row">
                <div class="col-xs-4 col-lg-4 grid-content margin-top-45">
                    <h3 class="text-center">Vision<span class="special-color">.</span></h3>
                    <div class="title-separator-primary2" style="height: 2px;"></div>
                    <div class="col-lg-12 visionx bottom-padding-45" style="margin-top: 30px;">
                        <p>With our innovative designs and use of modern engineering, we aim to be India's most
                            preferred real
                            estate firm that adds meaningful value to our clients dream home. Our team of expert
                            professionals
                            are constantly determined to give remarkable results. We aim to achieve customer
                            satisfaction by
                            providing well-occupied homes along with top-line designs and modern amenities, within
                            the
                            given
                            time frame.
                        </p>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-4 grid-content margin-top-45">
                    <h3 class="text-center">Mission<span class="special-color">.</span></h3>
                    <div class="title-separator-primary2" style="height: 2px;"></div>
                    <div class="col-lg-12 visionx bottom-padding-45" style="margin-top: 30px;">
                        <p>Our mission is to provide our clients with the highest standard of customer service, by
                            adding a team
                            of qualified real estate professional to maintaining complete transparency and accuracy
                            at
                            work.
                        </p>

                    </div>

                </div>
                <div class="col-xs-4 col-lg-4 grid-content margin-top-45">
                    <h3 class="text-center">Values<span class="special-color">.</span></h3>
                    <div class="title-separator-primary2" style="height: 2px;"></div>
                    <div class="col-lg-12 visionx bottom-padding-45" style="margin-top: 30px;">

                        <p>We believe our unaltered commitment to our values of quality, innovations, customer
                            satisfaction and
                            transparency has made us what we are. Commitment to excellent, ethical dealing and
                            transparency at
                            work are the values that are enshrined in our work culture. We believe our customers are
                            our
                            best
                            endorsers. We endeavor to exceed our customer's expectations by helping them live their
                            dream.
                        </p>

                    </div>


                </div>
            </div>
        </div>

    </section>

    <!-- footer start -->
   <?php
    include 'footer.php'
    ?>
</body>