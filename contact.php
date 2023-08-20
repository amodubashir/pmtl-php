
<?php include 'header.php';?>
<?php
$message_sent=false;
if (isset($_POST['email']) && $_POST['email'] !='') {
    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
       
       $userName=$_POST['name'];
       $userPhone=$_POST['phone'];
       $userEmail=$_POST['email'];
       $message=$_POST['message'];

    $to = "support@prontotech.ng";
    $body="";
        $body .= "from: " .$userName. "\r\n";
        $body .= "email: " .$userEmail. "\r\n";
        $body .= "message: " .$message. "\r\n";
        mail($to,$userPhone,$body);

        $message_sent = true;
    }
    else{ 
        $invalid_class_name = "form-invalid";
    }
    
}


?>

<body>
    <?php
        if ($message_sent):
    ?>
    <h3>Thanks, we' ll be in touch</h3>

    <?php
        else:
    ?>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">
                    <p><span class="icon-music"></span>Make Enquiries</p>
                    <ul>
                        <li>+234-1-454-5650, +234-1-454-5651</li>
                        <li>info@prontotech.ng</li>
                        <li>Mon - Fri: 9am to 4pm</li>
                    </ul>
                </div>
                <div class="top-style2-right">
                    <ul class="top-right-menu">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Brochure</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <ul class="topbar-social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Top Bar style2 -->

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index-2.html">
                        <img src="images/resources/pronto.jpg" alt="Awesome Logo">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a>
                                   
                                </li>
                                <li><a href="about.php">About Us</a>
                                    
                                </li>
                                 <li><a href="product.php">Products</a>
                                                    
                                 </li>
                                <li><a href="gallery.php">Gallery</a>

                                                
                                 <li class="current"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        
                        
                        <div class="button">
                            <a class="btn-one" href="contact.php">Contact us<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/banner.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Contact Us</span>
                                <h2 style="color: white;">Get in touch with us</h2>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Contact Address Area-->
        <section class="contact-address-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-global"></span>
                            <h3>Visit Our Office</h3>
                            <br>
                            <p>Signals Barracks, Mile 2, Lagos Nigeria</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-support1"></span>
                            <h3>Call Us</h3>
                            <p>+234-1-454-5650 & +234-1-454-5651 <br><span>Mon - Friday:</span> 9am to 4pm</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-shipping-and-delivery"></span>
                            <h3>Mail Us</h3>
                            <p>info@prontotech.ng<br>enquiries@prontotech.ng</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bottom-text text-center">
                            <p>Get answers to <a href="about.php">FAQs</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Address Area-->

        <!--Start contact form area-->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <div class="sec-title with-text">
                                <p>Do you have enquiries</p>
                                <div class="title">Send us a Message</div>
                                
                            </div>
                            <div class="inner-box">
                                <form id=""  class="default-form" action="contact.php" method="post">
                               
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <input type="text" id="name" name="name" value="" placeholder="Full Name" required="">
                                                <div class="icon">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <input type="text" id= "phone" name="phone" value="" placeholder="Phone">
                                                <div class="icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <input <?= $invalid_class_name ?? "" ?> type="email" id= "email" name="email" value="" placeholder="Email Address" required="">
                                                <div class="icon">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <textarea id= "message" name="message" placeholder="Your Message..." required=""></textarea>
                                                <div class="icon envelop">
                                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn-one" type="submit" id="btnContactUs"data-loading-text="Please wait...">Submit<span class="flaticon-next"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>                      
                                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>

                                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 clearfix">
                        <div class="contact-form-image-box">
                            <img src="images/resources/contact.png" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End contact form area-->

        
<?php
    endif;
?>

      <?php include 'footer.php';?>
