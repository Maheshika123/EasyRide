<!DOCTYPE html>
<html lang="en">

<head>

    <!-- required meta tags -->
    <meta charset="utf-8">

    <meta name="description" content="Building modern responsive website with html5, css3, jQuery & bootstrap framework">
    <meta name="keywords" content="HTML5, CSS3, jQuery, Bootstrap, Web Design, Web Development, Responsive website, Modern website">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>EasyDrive</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/fontawesome.min.css">
    

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate/animate.css">

<!--
     magnific-popup CSS 
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">
-->
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--
    <header>
        <nav class="navbar navbar-dark navbar-fixed-top  easy-top-nav" role="navigation"  >
            <div class="container-fluid fixed">
                <div class="easy-nav-wrapper">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle  " data-toggle="collapse" data-target="#easy-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a class="navbar-brand" href="#home">
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div id="easy-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#register">Register</a></li>
                            <li><a href="#how-works">How It Works</a></li>
                            <li><a href="#Testinominals">Testinominals</a></li>
                            <li><a href="#Our Team">Our Team</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>  
                    </div>
                    
                </div>
            </div>
        </nav>
        
    </header>
-->
    <header>
        <nav class="navbar fixed-top navbar-expand-sm easy-top-nav" role="navigation">
            <div class="container-fluid">
                <div class="easy-nav-wrapper">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggler  navbar-toggle-left collapsed" data-toggle="collapse" data-target="#easy-menu" aria-expanded="false" aria-label="Toggle Navigation" >
                            <span class="navbar-toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          
                        </button>
                        
                    </div>
                    <div class="collapse navbar-collapse" id="easy-menu">
                        <ul class="nav navbar-nav ">
                            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                          
                            <li class="nav-item"><a class="nav-link" href="#how-works">How It Works</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            
                            
                        </ul>     
                    </div>
                </div>
                
            </div>
        
        </nav>
    
    </header>
    


    
    <!--    Home-->
    <section id="home">
        <div id="home-cover" class="bg-parallax animated fadeIn">
            <div id="home-content-box">
                <div id="home-content-box-inner" class="text-center">
                    <div id="home-heading" class="animated zoomIn">
                        <h3>EasyDrive<br>Bus Tracking System</h3>
                    </div>
                    <div id="home-btn">
                        <a class="btn btn-lg btn-general btn-white animated zoomIn" href="#services" role="button" title="View Our Work">View Our Work</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--    services-->
    <section id="services">
        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>Services</h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container offset-lg-2">
                <div class="row wow animated fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-lg-4 ">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <ion-icon name="pin"></ion-icon>
                            </div>

                            <div class="service-item-title">
                                <h3>Real Time Tracking</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>Easily identify and follow your bus on the map. Leave for the bus when it's actually close. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <ion-icon name="timer"></ion-icon>
                            </div>

                            <div class="service-item-title">
                                <h3>Schedule Adherence</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>Instantly see whether the bus is running behind schedule allowing you to plan a better journey. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <ion-icon name="sync"></ion-icon>
                            </div>

                            <div class="service-item-title">
                                <h3>Services Updates</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>Live updates for when a service has to change suddenly due to unexpected circumstances. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <ion-icon name="bus"></ion-icon>
                            </div>

                            <div class="service-item-title">
                                <h3>Route Maps</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>A clean, road mapped route showing where the bus is scheduled to travel. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <ion-icon name="bus"></ion-icon>
                            </div>

                            <div class="service-item-title">
                                <h3>Route Maps</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>A clean, road mapped route showing where the bus is scheduled to travel. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <ion-icon name="bus"></ion-icon>
                            </div>

                            <div class="service-item-title">
                                <h3>Route Maps</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>A clean, road mapped route showing where the bus is scheduled to travel. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--    About-->
    <section id="about">
        <div id="about-bg-image" class="bg-parallax">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="about-content-box">
                        <div id="about-content-box-outer">
                            <div id="about-content-box-inner">
                                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h3>What is it</h3>
                                    <div class="content-title-underline"></div>
                                </div>

                                <div id="about-desc" class=" wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h4>Track buses in real-time!</h4>
                                    <P>We work with bus companies across the UK to give passengers more confidence when catching the bus. Follow the bus on the map and see it's on the way! </P>
                                </div>
                                <div id="about-btn" class=" wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a class="btn btn-lg btn-general btn-blue" href="#register" role="button" >Join With Us</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Register-->
    <section id="register">
        <div class="container">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3 class="mt-5 text-center">Register With us</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div id="register-content-box">
                        <div id="register-content-box-outer">
                            <div id="register-content-box-inner">
                                <div id="register-desc" class=" wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h4>As Owners</h4>
                                    <div class="register-title-underline"></div>
                                    <P>Mornings are hectic and sometimes stressful as you get ready for work and prepare your kids for school. Add to that a late bus, or a bus that’s so early you don’t even realize it’s come and gone. Are you tired of wondering when the school bus is going to arrive? Here Comes the Bus® is a school bus tracking app that is revolutionizing morning routines for parents and students by giving them real-time bus location and alerts to get them to the bus stop on time. No more standing in the freezing cold or pouring rain, wondering where the bus is and when it will arrive. And no more being late for or missing the bus all-together. </P>
                                </div>
                                <div id="register-btn" class=" wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a class="btn btn-lg btn-general btn-blue" href="#register" role="button">Sign up here</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-4">
                    <div id="register-content-box ">
                        <div id="register-content-box-outer text-center">
                            <div id="register-content-box-inner ">
                                <div id="register-desc" class=" wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h4>As Drivers</h4>
                                    <div class="register-title-underline"></div>
                                    <P>Mornings are hectic and sometimes stressful as you get ready for work and prepare your kids for school. Add to that a late bus, or a bus that’s so early you don’t even realize it’s come and gone. Are you tired of wondering when the school bus is going to arrive? Here Comes the Bus® is a school bus tracking app that is revolutionizing morning routines for parents and students by giving them real-time bus location and alerts to get them to the bus stop on time. No more standing in the freezing cold or pouring rain, wondering where the bus is and when it will arrive. And no more being late for or missing the bus all-together. </P>
                                </div>
                                <div id="register-btn" class=" wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a class="btn btn-lg btn-general btn-blue" href="#register" role="button">Sign up here</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    How it works-->
    <section id="how-works">
        <div class="container">
            <div class="content-title wow animated fadeInDown mt-5" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>How it works ?</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="row wow animated fadeInDown mt-5" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="col-lg-6 step-box">
                    <div class="app-screen wow animated fadeIn" data-wow-duration="1s" data-wow-delay=".8s">
                        <img src="img/how.gif" alt="App on Phone">
                    </div> 
                </div>
                <div class="col-lg-6 step-box">
                    <div class="works-step">
                        <div class=number>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    
                     <div class="works-step">
                        <div class=number>2</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    
                     <div class="works-step">
                        <div class=number>3</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    
                    <a href="#" class="btn btn-droid"><img src="img/download-app-android.png" alt="Play Store Button"></a>
                </div>
                
            </div>
            

<!--
             <div class="col span-1-of-2 steps-box">
                    <img src="img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step clearfix">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="works-step clearfix">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>
                <div class="works-step clearfix">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>

                <a href="#" class="btn-app"><img src="img/download-app.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="img/download-app-android.png" alt="Play Store Button"></a>
            </div>
            
-->
            
        </div>

    </section>

    <footer>
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="contact-left">
                            
                            <h3>EasyDrive</h3>
                            <p>We believe in <strong>Simple</strong>, <strong>Clean</strong> & <strong>Modern</strong> Design Standards with Responsive Approach. Browse the amazing work of our company.</p>
                            <div id="contact-info"> 
                                <address>
                                    <strong>Headquarters:</strong>
                                    <p>221 Jockey Hollow, Suite 600 <br>Smithtown,NY 11787</p>
                                </address>
                                
                                <div id="phone-email">                                   
                                    <p>
                                        <strong>Phone:</strong><span> (91) 8974 56984 </span><br>
                                        <strong>Fax:</strong><span> (91) 66 8754 8978 </span><br>
                                        <strong>Email:</strong><span>  info@vesco.com </span><br>
                                    </p>
                                </div>
                            </div>
                            
                             <ul class="social-list">
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div id="contact-right">
                            <h3>Contact us</h3>
                            <form action="action.php" method="POST">
                                <input type="text" name="full-name" placeholder="Full Name" class="form-control">
                                <input type="text" name="email" placeholder="Email" class="form-control" required>
                                <textarea rows="6" name="message" placeholder="Message..."class="form-control"></textarea>
                                
                                <div id="submit">
                                    <a class="btn btn-lg btn-general btn-white" href="#" role="button">Send</a>
                                </div>
                                                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow/wow.min.js"></script>

    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <!-- custom JS -->
    <script src="js/custom.js"></script>


</body>

</html>