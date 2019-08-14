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

    <!-- body site update start -->

    <section class="contact-bg-header">
        <div class="bg-image">
            <div class="second-header">
                <h1 class="entry-title" style="font-size:40px;color: black">Construction Updates</h1>
                <p class="colored-line"></p>
            </div>
        </div>



        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-md-12 content-area">
                        <main id="main" class="site-main" role="main">
                            <article id="post-2" class="post-content post-2 page type-page status-publish hentry"
                                style="display: block;background-color: #f5f5f5;">
                                <header class="entry-header"
                                    style="text-align: center;font-weight: bold;line-height: 2em;padding-top: 2%">
                                    <span class="screen-reader-text">CURRENT SITES</span>
                                    <!-- <h1 class="entry-title">Construction Updates</h1> -->
                                    <div class="entry-meta"></div><!-- .entry-meta -->
                                </header>
                                <div class="entry-content">
                                    <div class="row">

                                        <div class="cat-logo col-md-3"><a style="color: #434343;"
                                                href="../view/site1.php"><br>
                                                <img class="alignnone size-full wp-image-151"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/logo-color-11.png"
                                                    title="32 Pinewood Drive" alt="32 Pinewood Drive" width="150"
                                                    height="65"></a></div>

                                    </div>
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                        </main>
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

</html>