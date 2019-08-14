<!DOCTYPE html>
<html lang="en">
<?php
	include 'head.php';
?>
<body>
    <?php
		include 'header.php'
    ?>
	
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/3.jpg" alt="Los Angeles" width="100" height="500">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/4.jpg" alt="Chicago" width="100" height="500">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpg" alt="New York" width="100" height="500">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
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
                                <div class="row">
                                        <div class="col-md-1"></div>
                                        <label for="formGroupExampleInput" class="bmd-label-floating col-md-9">Select us :
                                        </label>
                                        </div>
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
   
    <!-- Priject USP Start -->

    <div class="container_main">
        <nav class="d-none d-md-block navbar navbar-expand-sm bg-dark">
            <ul class="navbar-nav" style="padding-left: 250px;">
                <li class="nav-item">
                    <a class="nav-link" href="#projectUsp">Project USP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#constructUpd">Contruction Updates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#amenities">Amenities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">Location</a>
                </li>
            </ul>
        </nav>
    </div>
    <a id="projectUsp"></a>
    <section class="section-color top-padding-45 bottom-padding-45 section-bottom-shadow uspro">
        <div class="container projectUsp">
            <div class="row count-container count-second-color" style="color:#424242; margin-top:5%;">
                <div class="col-xs-12 col-md-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">32 Pinewood Drive</h5>
                    <h1 class="">Project USP<span class="special-color">.</span></h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container margin-top-30" style="margin-bottom:8%;">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <p class="usp" align="center" style="font-size:30px;color:#3E3D3D;line-height:40px;">
                        Take a step back, Take your time, Take it easy.

                        Go slow

                        Live today, Live your way, Live better

                        Go slow
                    </p>
                </div>

                <div class="clearfix"></div>
                <div class="row row-usp">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <img src="images/1.jpg" style="border:#E5E2E2 1px solid; width:75%;height:260px;"
                            class="img-responsive img-usp lazy" />
                    </div>
                    <div class="col-xs-12 col-sm-6 ">
                        <h3 class="text-center">32 Pinewood Drive<span class="special-color">.</span></h3>
                        <div class="title-separator-primary2" style="height: 2px"></div>
                        <div class="description-usp"></div>
                        <p class="negative-margin ecocity">Located near P3 Hinjewadi, at
                            Bhoirwadi, 32
                            Pinewood
                            Drive is
                            a home that will take you away from the hustle bustle and put you back in the center of
                            a
                            beautiful life! Amazing access, next door to offices, schools, conveniences,
                            entertainment
                            and to nature&rsquo;s getaways. 32 Pinewood Drive, a home that lets you go slow.
                        </p>
                        <br />

                    </div>
                </div>
            </div>
    </section>

    <!-- gallery -->
    <div class="clearfix"></div>
    <a id="gallery"></a>
    <section class="section-light top-padding-45 section-both-shadow bottom-padding-45"
        style="z-index:90; background-color:#fff;">
        <div class="container floorPlan" style="margin-top:50px;">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">32 Pinewood Drive</h5>
                    <h1 class="">Gallery<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2" style="margin-left: 520px;top: -46px;height: 2px;"></div>
                </div>
            </div>
        </div>
        <div class="container">


            <div class="row text-center text-lg-left">

                <div class="col-lg-3 col-md-4 col-6">
                    <a href="images/1.jpg" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="images/2.jpg" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/2.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="images/3.jpg" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/3.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="images/4.jpg" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/4.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="images/5.jpg" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/5.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="images/6.jpg" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/6.jpg" alt="">
                    </a>
                </div>


            </div>

        </div>

    </section>

    <!-- Amenities section start -->
    <a id="amenities"></a>
    <section class="neighbourhood top-padding-45 section-both-shadow bottom-padding-45">
        <div class="amenities" style="margin-bottom:25px;">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-offset-3 col-sm-6 text-center">
                    <h5 class="subtitle-margin">&nbsp;</h5>
                    <h1 class=""><span class="special-color">Amenities</span></h1>
                </div>
                <div class="col-xs-8 col-md-12 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2" style="margin-left: 590px;top: -46px;height: 2px;"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center text-lg-left">
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/club1.png" class="lazy" />
                        <p>Club House</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/yoga.png" />
                        <p>Yoga</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/lawn.png" />
                        <p>Lawn</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/swimming.png" />
                        <p>Swimming Pool</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/play.png" />
                        <p>Kids Play Area</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/deck.png" />
                        <p>Deck Area</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/bask.png" />
                        <p>Basketball Court</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <div class="mrtop">
                        <img class="img-fluid" src="images/bar.png" />
                        <p>Barbeque</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- construction updates -->

    <div class="clearfix"></div>
    </div>
    <a id="construction"></a>
    <section class="section-light top-padding-45 section-both-shadow bottom-padding-45"
        style="z-index:90; background-color:#fff;">
        <div class="container floorPlan" style="margin-top:50px;">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">32 Pinewood Drive</h5>
                    <h1 class="">Construction Updates<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2" style="margin-left: 520px;top: -46px;height: 2px;"></div>
                </div>
            </div>
            <div class="container margin-top-60">
                <div class="row">
                    <div class="col-sm-6" style="width: 100%;">
                        <!--<style>img{ height:50% !important;}</style>-->
                        <article class="masonry-grid-item masonry-grid-item-big zoom-cont">
                            <figure>
                                <a href="#" title="zoom"><img src='images/construct2.jpg' width="360"
                                        height="270"
                                        data-src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-360x270.jpg"
                                        class="lazy wp-post-image" alt="32 Pinewood Drive"
                                        data-srcset="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-360x270.jpg 360w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-300x225.jpg 300w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-768x576.jpg 768w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-1024x768.jpg 1024w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1.jpg 1440w"
                                        sizes="(max-width: 360px) 100vw, 360px" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="#" class="blog-grid1-title" title="blog">
                                    <h4>32 Pinewood Drive Construction Updates May 2019</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>&nbsp; &nbsp;</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"> <a href="#"><i class="fa fa-user"></i>
                                            Admin</a> </div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>Tuesday
                                        28th
                                        May, 2019</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>

                    </div>
                    <!--<style>img{ height:50% !important;}</style>-->
                    <div class="col-sm-6" style="width: 100%;">
                        <article class="masonry-grid-item masonry-grid-item-big zoom-cont">
                            <figure>
                                <a href="#" title="zoom"><img src='images/construct1.jpg' width="360"
                                        height="270" data-src="" class="lazy wp-post-image" alt=""
                                        data-srcset="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-360x270.jpg 360w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-300x225.jpg 300w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-768x576.jpg 768w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-1024x768.jpg 1024w"
                                        sizes="(max-width: 360px) 100vw, 360px" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="#" class="blog-grid1-title" title="blog">
                                    <h4>32 Pinewood Drive Construction Updates February 2019</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>&nbsp; &nbsp;</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"> <a href="#"><i class="fa fa-user"></i>
                                            Admin</a> </div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>Friday
                                        8th
                                        February, 2019</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <div id="location" class="map">
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
		//include 'script.php'
		include 'footer.php'
    ?>



</body

</html>