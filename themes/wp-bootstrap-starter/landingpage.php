<?php
/**
* Template Name: Landing Page
 */


?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/css/style-starter.css"/>



    <header id="site-header" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
         
            <a class="navbar-brand" href="https://www.qualityze.com"> <img src="https://www.qualityze.com/wp-content/themes/bootstrap-basic/img/qualityze-header-logo.png" alt="EQMS Software"></noscript>
            </a>
            <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="about.html">About</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="services.html">Services</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="contact.html">Contact</a> </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"> <a href="#demo" class="btn btn-primary btn-style">View Demo</a> </li>
                </ul>
            </div>
        </nav>
    </header>
Read More 
    <section id="home" class="banner">
        <div id="banner-bg-effect" class="banner-effect"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12 order-lg-first mt-lg-0 mt-4">
                    <!-- <h1 class="mb-4 title"><strong>Doing </strong>the right thing, <br>at the <strong>right time.</strong> </h1> -->
                    <h1 class="mb-4 title">Easy, Transparent Document Management</h1>
                    <p>Qualityze Document Management enables businesses of all sizes to create, review, approve and release any controlled document such as SOPs, instruction manuals, process narratives, and quality / regulatory records.</p>
                    <div class="mt-5"> <a class="btn btn-primary btn-style mr-2" href="about.html">1Read More </a> <a class="btn btn-outline btn-outline-style" href="services.html">Our Services </a> </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 order-first text-lg-left text-center">
                    <div>
                        <!-- <img src="assets/images/banner-round.png" alt="" class="rounded-circle img-fluid"> -->
                        <form class="p-4" style="background: white;color: black;">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
                                <!-- <small id="name" class="form-text text-muted">We'll never share your personal details with anyone else.</small> --></div>
                            <div class="form-group">
                                <label for="name">Business Phone *</label>
                                <input type="number" class="form-control" id="name" aria-describedby="name" placeholder="Enter Business Phone Number">
                                <!-- <small id="name" class="form-text text-muted">We'll never share your personal details with anyone else.</small> --></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Work Email *</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
                            <div class="form-group">
                                <label for="name">Company *</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Company Name">
                                <!--<small id="name" class="form-text text-muted">We'll never share your personal details with anyone else.</small> --></div>
                            <!-- <div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Check me out</label> </div> -->
                            <button type="submit" class="btn btn-primary">GET FREE DEMO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- home page about -->
    <section class="w3l-about d-none">
        <div class="container">
            <div class="row about-content">
                <div class="col-lg-6 info mb-lg-0 mb-sm-5 mb-4 align-center">
                    <h3 class="title">About Us</h3>
                    <h6>Business planning, Strategy and Execution. A problem-solving philosophy that leads to products people actually want to use.</h6>
                    <p class="mt-md-4 mt-3 mb-0"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi recusandae, ducimus vel rerum accusamus odit provident nobis ratione quisquam obcaecati atque fuga maiores! Tenetur aspernatur alias unde facilis eveniet? Eius! Lorem ipsum dolor sit amet, Fugit ipsam nostrum minus alias, expedita.</p>
                </div>
                <div class="col-lg-6"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/about.png"/>" class="img-fluid img-shadow" alt="about"> </div>
            </div>
        </div>
    </section>
    <!-- //home page about -->
    <!-- home page service grids -->
    <!-- <section id="services" class="bg-light"> <div class="container"> <div class="row align-items-center"> <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12"> <h4 class="section-title">Meet Our Solution For You</h4> <p class="text-center">Lorem ipsum dolor, sit amet consectet et adipis icing elit. Ab commodi iure minus laboriosam placeat quia, dolorem animi. Eveniet repudiandae, iure et.</p> </div> </div> <div class="row mt-lg-5"> <div class="col-lg-4 col-md-6 col-sm-12"> <div class="box-wrap"> <div class="icon"> <span class="fa fa-briefcase"></span> </div> <h4><a href="#url">Business Services</a></h4> <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. doloret quas saepe autem, dolor set.</p> </div> </div> <div class="col-lg-4 col-md-6 col-sm-12"> <div class="box-wrap"> <div class="icon"> <span class="fa fa-shield"></span> </div> <h4><a href="#url">Product Consulting</a></h4> <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. doloret quas saepe autem, dolor set.</p> </div> </div> <div class="col-lg-4 col-md-6 col-sm-12"> <div class="box-wrap"> <div class="icon"> <span class="fa fa-dollar"></span> </div> <h4><a href="#url">Financial Consulting</a></h4> <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. doloret quas saepe autem, dolor set.</p> </div> </div> <div class="col-lg-4 col-md-6 col-sm-12"> <div class="box-wrap"> <div class="icon"> <span class="fa fa-industry"></span> </div> <h4><a href="#url">Investment Planning</a></h4> <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. doloret quas saepe autem, dolor set.</p> </div> </div> <div class="col-lg-4 col-md-6 col-sm-12"> <div class="box-wrap"> <div class="icon"> <span class="fa fa-lightbulb-o"></span> </div> <h4><a href="#url">Business Growth</a></h4> <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. doloret quas saepe autem, dolor set.</p> </div> </div> <div class="col-lg-4 col-md-6 col-sm-12"> <div class="box-wrap"> <div class="icon"> <span class="fa fa-picture-o"></span> </div> <h4><a href="#url">Projects Worldwide</a></h4> <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. doloret quas saepe autem, dolor set.</p> </div> </div> </div> </div> </section> -->
    <section id="services" class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12"> </div>
            </div>
            <div class="row mt-lg-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="icon"> <span class="fa fa-briefcase"></span> </div>
                        <h4><a href="#url">Automated Efficiency </a></h4>
                        <p>Qualityze reduces manual processes and puts you in control of your business to you focus on getting more done. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="icon"> <span class="fa fa-shield"></span> </div>
                        <h4><a href="#url">Powerful Analytics </a></h4>
                        <p>Our product includes graphical dashboards that help you track each document from origin to obsolescence, giving managers complete visibility. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="icon"> <span class="fa fa-dollar"></span> </div>
                        <h4><a href="#url">User-Friendly Interface </a></h4>
                        <p>Create, collaborate, review, and approve document data with ease. Qualityze is a fully responsive web-based solution.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="icon"> <span class="fa fa-industry"></span> </div>
                        <h4><a href="#url">Cloud-Driven </a></h4>
                        <p>Centralized and scalable document storage to archive as much historical data as you want, without any hassle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page service grids -->
    <section id="services2" class="">
        <div class="mobile-info">
            <!-- /mobile-info-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                        <h4 class="section-title">Enhance Document Lifecycle Visibility</h4>
                        <p class="text-center">Learn more about what makes Qualityze Document Management Solution a worthy investment to keep your business goals aligned with quality. </p>
                    </div>
                </div>
                <div class="row mobile-info-inn mx-lg-0 mt-5">
                    <div class="col-lg-6 mobile-right">
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon"> <span class="fa fa-html5"></span> </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6 class="mb-3"><a href="#url">Dynamic Collaboration Review</a></h6>
                                <p>Allow document owners to control access to those who are eligible for review. The process can be controlled by setting time limits for each approver to complete. </p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon"> <span class="fa fa-gamepad"></span> </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6 class="mb-3"><a href="#url">Standardized Document Sharing</a></h6>
                                <p>Make use of templates that standardize document sharing and access with your trusted team members in the collaboration review and approval process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mobile-right">
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon"> <span class="fa fa-css3"></span> </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6 class="mb-3"><a href="#url">Obsolete and Archive Options</a></h6>
                                <p>Define validity span for the document to ensure new revisions on the roll while obsoleting the old revisions or archiving them for possible future use or regulatory compliance. </p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon"> <span class="fa fa-keyboard-o"></span> </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6 class="mb-3"><a href="#url">Document Version Control</a></h6>
                                <p>Enables you to conduct the document effectiveness review and keep a track of document changes well in advance, ensuring the release of the final version of the document within a stipulated time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //mobile-info-->
        </div>
    </section>
    <!-- testimonials section -->
    <section id="slider" class="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <h4 class="section-title">What they said about us</h4>
                    <p class="text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                </div>
            </div>
            <div class="large-12 columns mt-5">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="w3l-customers-7">
                            <div class="customers_sur">
                                <div class="customers-left_sur">
                                    <div class="customers_grid">
                                        <div class="custo-img-res"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/testi1.jpg" alt=" " class=""> </div>
                                        <div class="ratings my-4 my-4"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                        <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                        <div class="customers-bottom_sur">
                                            <div class="custo_grid">
                                                <h5>Tanguy De</h5> <span>Designation</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="w3l-customers-7">
                            <div class="customers_sur">
                                <div class="customers-left_sur">
                                    <div class="customers_grid">
                                        <div class="custo-img-res"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/testi2.jpg" alt=" " class="img-fluid"> </div>
                                        <div class="ratings my-4"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                        <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                        <div class="customers-bottom_sur">
                                            <div class="custo_grid">
                                                <h5>Christopher</h5> <span>Designation</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="w3l-customers-7">
                            <div class="customers_sur">
                                <div class="customers-left_sur">
                                    <div class="customers_grid">
                                        <div class="custo-img-res"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/testi3.jpg" alt=" " class="img-fluid"> </div>
                                        <div class="ratings my-4"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                        <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                        <div class="customers-bottom_sur">
                                            <div class="custo_grid">
                                                <h5>Edward</h5> <span>Designation</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="w3l-customers-7">
                            <div class="customers_sur">
                                <div class="customers-left_sur">
                                    <div class="customers_grid">
                                        <div class="custo-img-res"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/testi4.jpg" alt=" " class="img-fluid"> </div>
                                        <div class="ratings my-4"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                        <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                        <div class="customers-bottom_sur">
                                            <div class="custo_grid">
                                                <h5>Abigail</h5> <span>Designation</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="w3l-customers-7">
                            <div class="customers_sur">
                                <div class="customers-left_sur">
                                    <div class="customers_grid">
                                        <div class="custo-img-res"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images//testi5.jpg" alt=" " class="img-fluid"> </div>
                                        <div class="ratings my-4"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                        <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                        <div class="customers-bottom_sur">
                                            <div class="custo_grid">
                                                <h5>Abigail</h5> <span>Designation</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials section -->
    <!-- stats section -->
    <section id="stats" class="stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 margin-md-60">
                    <h2 class="left-title">Some of Our Company Real Facts.</h2>
                    <p class="white">Lorem ipsum dolor, sit amet consectet et adipis icing elit. Ab commodi iure minus laboriosam placeat quia, dolorem animi. Eveniet repudiandae, iure et.</p>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-5">
                    <div class="d-sm-flex justify-content-lg-around justify-content-between counter-main">
                        <div class="counter">
                            <div class="icon"> <span class="fa fa-folder-open-o"></span> </div>
                            <p class="value">385</p>
                            <p class="title white">Projects</p>
                        </div>
                        <div class="counter">
                            <div class="icon"> <span class="fa fa-headphones"></span> </div>
                            <p class="value">260</p>
                            <p class="title white">Consultant</p>
                        </div>
                        <div class="counter">
                            <div class="icon"> <span class="fa fa-trophy"></span> </div>
                            <p class="value">150</p>
                            <p class="title white">Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats section -->
    <!-- homepage blog grids -->
    <section id="blog">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <h4 class="section-title">Company News</h4>
                    <p class="text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                </div>
            </div>
            <div class="blog-grids row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-12 blog-grid" id="zoomIn">
                    <a href="#blog-single.html">
                        <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/blog.jpg" class="img-fluid" alt=""></figure>
                    </a>
                    <div class="blog-info">
                        <h3><a href="#blog-single.html">4 Steps To Consider Before You Start</a> </h3>
                        <ul>
                            <li><a href="#author"><span class="fa fa-user-o mr-2"></span>Johnson smith</a></li>
                            <li><span class="fa fa-calendar mr-2"></span>Jan 16, 2020</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4 blog-grid" id="zoomIn">
                    <a href="#blog-single.html">
                        <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/blog1.jpg" class="img-fluid" alt=""></figure>
                    </a>
                    <div class="blog-info">
                        <h3><a href="#blog-single.html">Strategic Plan Execution Management</a> </h3>
                        <ul>
                            <li><a href="#author"><span class="fa fa-user-o mr-2"></span>Alexander</a></li>
                            <li><span class="fa fa-calendar mr-2"></span>Jan 19, 2020</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4 blog-grid" id="zoomIn">
                    <a href="#blog-single.html">
                        <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/images/blog2.jpg" class="img-fluid" alt=""></figure>
                    </a>
                    <div class="blog-info">
                        <h3><a href="#blog-single.html">Business planning, strategy and execution</a> </h3>
                        <ul>
                            <li><a href="#author"><span class="fa fa-user-o mr-2"></span>Elizabeth ker</a></li>
                            <li><span class="fa fa-calendar mr-2"></span>Jan 21, 2020</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //homepage blog grids -->
    <!-- site footer -->
    <footer id="site-footer">
        <div class="top-footer">
            <div class="container my-md-5 my-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-logo mb-3">
                            <a href="./"> <span class="fa fa-shield"></span> Captivate </a>
                        </div>
                        <div>
                            <p class="">Lorem ipsum dolor, sit amet consectet et adipis icing elit. Ab commodi iure minus laboriosam placeat quia, dolorem animi. Eveniet repudiandae, perferendis nesciunt deserunt iure et, consequatur optio!</p>
                        </div>
                    </div>
                     Quick Links 
                    <div class="col-lg-3 col-md-4 mt-lg-0 mt-5">
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="about.html"> About company</a></li>
                            <li><a href="services.html"> Explore services</a></li>
                            <li><a href="#work"> How does we Work?</a></li>
                            <li><a href="#projects"> View projects</a></li>
                        </ul>
                    </div>
                     Newsletter 
                    <div class="col-lg-5 col-md-8 mt-lg-0 mt-5">
                        <h4 class="footer-title">Newsletter</h4>
                        <p class="mb-4">By subscribing to our mailing list you will always be updated with the latest news from us. </p>
                        <form class="newsletter-form">
                            <input class="input-rounded" type="text" required="" placeholder="Enter Email Address">
                            <button type="submit" title="Subscribe" class="btn btn-primary btn-style" name="submit" value="Submit"> Subscribe </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-lg-left text-center mb-lg-0 mb-3">
                        <p class="copyright">© 2020 Captivate. All Rights Reserved. Design by <a href="https://w3layouts.com/">W3Layouts</a></p>
                    </div>
                    <div class="col-lg-4 align-center text-lg-right text-center"> <a href="#facebook" class="social-item"><span class="fa fa-facebook-f"></span></a> <a href="#twitter" class="social-item"><span class="fa fa-twitter"></span></a> <a href="#linkedin" class="social-item"><span class="fa fa-linkedin"></span></a> </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //site footer -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top"> <span class="fa fa-angle-up"></span> </button>
    
    <script>
        // When the user scrolls down 20px from the top of the document, show the button window.onscroll = function () { scrollFunction() }; function scrollFunction() { if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) { document.getElementById("movetop").style.display = "block"; } else { document.getElementById("movetop").style.display = "none"; } } // When the user clicks on the button, scroll to the top of the document function topFunction() { document.body.scrollTop = 0; document.documentElement.scrollTop = 0; }
    </script>
    <!-- //move top -->
    <!-- javascript -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/js/jquery-3.3.1.min.js"></script>
    <!-- libhtbox -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/js/lightbox-plus-jquery.min.js"></script>
    <!-- particles -->
    <script src='<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/js/particles.min.js'></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/js/script.js"></script>
    <!-- //particles -->
    <!-- owl carousel -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->
    <!-- bootstrap -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/landingpage/assets/js/bootstrap.min.js"></script>



</aside><!-- #secondary -->
