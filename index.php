<!--FACBOOK INIT-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php include_once("header.php"); ?>

<!-- START CAROUSEL -->
<div id="carousel">
    <!--  IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition".
            Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js
             or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for
              "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"  -->

<div id="carousel-example-generic" class="carousel slide gsdk-transition" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item">
            <img src="assets/img/snake-wide.jpg">
        </div>
        <div class="item active">
            <img src="assets/img/snake-wide.jpg">
        </div>
        <div class="item">
            <img src="assets/img/snake-wide.jpg">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
    </a>
</div> <!-- END CAROUSEL -->

<!-- THIS IS LARGE BLURRED IMAGE UNDER NAV BAR
     <div class="blurred-container">
            <div class="img-src" style="background-image: url('assets/img/wallpaper1.jpg')"></div>
    </div>  -->

<!--PARALLAX-->
<div class="main">
    <section id="intro" data-speed="6" data-type="background">
        <div class="col-sm-12">
            <div class="row text-center">

                <div class="col-sm-1"></div>

                <div class="col-sm-3">
                    <div class="well">
                        <img src="assets/img/phoenix.jpg" alt="Tattoo's" class="img-circle" width="200" height="200">
                        <h3>Tattoo's</h3>
                        <p>Some words here...Anything you want to add.</p>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="well">
                        <img src="assets/img/parrot.jpg" alt="Drawings" class="img-circle" width="200" height="200">
                        <h3>Drawings</h3>
                        <p>Some words here...Anything you want to add about Drawings</p>

                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="well">
                        <img src="assets/img/amanda.jpg" alt="About" class="img-circle" width="200" height="200">
                        <h3>About</h3>
                        <p>Some words here...Anything you want to add.</p>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </section>
    <!---------- PARALlAX EFFECT HERE ------->
    <a name="blog-jump"></a>
    <section id="blog-title" data-speed="4" data-type="background">
        <div class="container">
            <p class="title-font">BLOGS</p>
        </div>
    </section>
    <!---------- END PARA EFFECT HERE -------->
    <section id="blog-content" data-speed="2" data-type="background">

        <!-----------TEST BLOG 1---------->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3"><img src="assets/img/blogimgtest.jpg" class="img-responsive" alt="Convention"
                                       width="284" height="186">
            </div>
            <div class="col-lg-7">
                <H2>Philadelphia Convention
                    <br>
                    <small>8.1.2015 8:30AM by Amanda</small></H2><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum
                dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.Lorem ipsum dolor sit amet,
                <a href="www.google.com">Google</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
            </div>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard"
                 data-action="like" data-show-faces="true" data-share="true"></div>
            <div class="col-lg-1"></div>
        </div>
        <hr>
        <!-----------TEST BLOG 2---------->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <img src="assets/img/3dogs.jpg" class="img-responsive" alt="Convention" width="284" height="186">
            </div>
            <div class="col-lg-7">
                <H2>Portraits for sale!
                    <br>
                    <small>8.4.2015 12:30AM by Amanda</small></H2><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum
                dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard"
                     data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <hr>
        <!-----------TEST BLOG 3---------->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3"><img src="assets/img/girldogcolor.jpg" class="img-responsive" width="284" height="186">
            </div>
            <div class="col-lg-7">
                <H2>Digital Art
                    <br>
                    <small>8.4.2015 2:30PM by Amanda</small></H2><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum
                dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard"
                     data-action="like" data-show-faces="true" data-share="true">
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

    </section>

    <a name="about-jump"></a>
    <section id="about-title" data-speed="4" data-type="background">
        <div class="container">
            <p class="title-font">ABOUT</p>
        </div>
    </section>

    <section id="about-content" data-speed="2">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-7"><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor
                sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore.</p></div>
            <div class="col-lg-3"><img src="assets/img/amanda3.jpg" class="img-responsive" width=50% height=50%></div>
            <div class="col-lg-1"></div>
        </div>
    </section>

    <section id="contact-title" data-speed="4" data-type="background">
        <div class="container">
            <p class="title-font">CONTACT</p>
        </div>
    </section>

    <a name="contact-jump"></a>
    <section id="contact-content" data-speed="2" data-type="background">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Find Me</div>
                            <div class="panel-body">
                                <br>
                                <p><strong>Amanda Orcutt</strong>
                                    <br>
                                    <br>
                                    Stinky Monkey Tattoo's
                                    <br>
                                    70 Summer St # C
                                    <br>
                                    Kingston, MA 02364
                                    <br>
                                    (781) 585-9393 ext. 112</p>
                                <a href="mailto:a.doherty606@yahoo.com" target="_blank">a.doherty606@yahoo.com</a>
                            </div>
                            <br>
                            <br>
                            <button class="btn btn-primary center-block" type="button" data-toggle="modal" data-target="#modalForm">
                                Contact Form
                            </button>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Map</div>
                            <div class="panel-body">
                                <iframe
                                        width="100%"
                                        height="296"
                                        frameborder="0" style="border:0"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAvxT9pb0yYPMPrP4UcrQYSX1C4zRNPJjk
                                        &q=Stinky+Monkey,Kingston+MA" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Contact Amanda</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <form>

                                <label>Your Email</label>
                                <input type="email" class="form-control" id="userEmail" placeholder="Email">

                                <label>Your Name</label>
                                <input type="password" class="form-control" id="userName" placeholder="Name">

                                <label>Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label>Message</label>
                                <textarea class="form-control" rows="3" placeholder="Your message here..."></textarea>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Send</button>
                            <button type="reset" class="btn btn-danger">Reset Form</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end container -->
</div>
<!-- end main -->

<?php include_once("footer.php"); ?>