<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/animate.min.css">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/fontawesome.min.css">
        <!-- Box Icons Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/flaticon.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/owl.carousel.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/magnific-popup.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/nice-select.css">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/meanmenu.css">
        <!-- Progress Circle Min CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/progresscircle.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/responsive.css">
        <link rel="stylesheet" href="{{base_url('assets/frontend')}}/css/alertify.min.css">
        @yield('css')

        <title>RIA Advisory - Welcome to RIA Advisory</title>

        <link rel="icon" type="image/png" href="{{base_url('assets/frontend')}}/img/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="header-area">

            <!-- Start Top Header -->
            <div class="top-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p><span>Address:</span> <i class="flaticon-placeholder"></i> 2000 Ponce De Leon Blvd., Suite # 600 Coral Gables, FL 33134.</p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li><span>Contact Phone:</span> <i class="flaticon-phone-call"></i> <a href="tel:+44587154756">305.421.6303</a></li>
                                <li><span>Contact Email:</span> <i class="flaticon-message-closed-envelope"></i> <a href="mailto:info@riaadvisory.com">info@riaadvisory.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header -->

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="evolta-responsive-nav">
                    <div class="container">
                        <div class="evolta-responsive-menu">
                            <div class="logo">
                                <a href="{{base_url('/')}}">
                                    <img src="{{base_url('assets/frontend')}}/img/logo.jpg" alt="logo" width="143px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="evolta-nav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{base_url('/')}}">
                                <img src="{{base_url('assets/frontend')}}/img/logo.jpg" alt="logo" width="143px">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{base_url('/')}}" class="nav-link ">Home </a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Company <i class="fas fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{base_url('aboutus')}}" class="nav-link">About Us </a></li>

                                            <li class="nav-item"><a href="{{base_url('ourteam')}}" class="nav-link">Our Team</a></li> 
                                            <li class="nav-item"><a href="{{base_url('news')}}" class="nav-link">News</a></li> 
                                            <li class="nav-item"><a href="{{base_url('partners')}}" class="nav-link">Partners</a></li> 
                                        </ul>
                                    </li>
									<li class="nav-item"><a href="{{base_url('whyus')}}" class="nav-link">Why Us</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{base_url('utilities')}}" class="nav-link">Utilities</a></li>

                                            <li class="nav-item"><a href="{{base_url('services')}}" class="nav-link">Financial Services</a></li> 
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="{{base_url('workRia')}}" class="nav-link">Work@Ria</a></li>
                                    <li class="nav-item"><a href="{{base_url('blog')}}" class="nav-link">Blog</a></li>
                                     
                                </ul>
                                <div class="others-options">
                                    <a href="{{base_url('contact')}}" class="btn btn-primary">Contact</a>
                                </div>
                                
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->

        </header>
        @yield('icerik')
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <a href="#"><img src="{{base_url('assets/frontend')}}/img/white-logo.png" alt="image"></a>
                                <p>We Help Businesses Innovate and Grow</p>
                            </div>

                            <ul class="social">
                                <li><a href="https://www.facebook.com/ria.advisory/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/riaadvisory" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <!-- <li><a href="https://www.glassdoor.co.in/Overview/Working-at-RIA-Advisory-EI_IE2981445.11,23.htm" target="_blank"><i class="flaticon-glassdoor-logo"></i></a></li>
                                <li><a href="#" target="_blank"><i class="flaticon-youtube"></i></a></li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Company</h3>

                            <ul class="footer-services-list">
                                <li><a href="{{base_url('aboutus')}}">About Us</a></li>
                                <li><a href="{{base_url('ourteam')}}">Our Team</a></li>
                                <li><a href="{{base_url('news')}}">News</a></li> 
                                <li><a href="{{base_url('partners')}}">Partners</a></li> 
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Links</h3>

                            <ul class="quick-links-list">
                                
                                <li><a href="{{base_url('blog')}}">Blog</a></li>
                                <li><a href="{{base_url('contact')}}">Contact</a></li>
                                <li><a href="{{base_url('whyus')}}">Why Us</a></li>
                                <li><a href="{{base_url('Utilities')}}">Utilities</a></li>
                                <li><a href="{{base_url('services')}}">Financial Services</a></li>
                                <li><a href="{{base_url('workRia')}}">Work@Ria</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contacts</h3>

                            <ul class="footer-contact-list">
                                <li><span>Address:</span> 2000 Ponce De Leon Blvd., Suite # 600 Coral Gables, FL 33134</li>
                                <li><span>Email:</span> <a href="mailto:info@riaadvisory.com">info@riaadvisory.com</a></li>
                                <li><span>Phone:</span> <a href="#">305.421.6303</a></li> 
                                <li><p style="color:#4ac728;">“A ISO 27001” AND “SOC2” CERTIFIED COMPANY</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p>Copyright {{date('Y')}} <a href="#">RIA Advisory</a>. All Rights Reserved.</p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="circle-map"><img src="{{base_url('assets/frontend')}}/img/circle-map.png" alt="image"></div>
        </footer>
        <!-- End Footer Area -->
        
        <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>
        
        <!-- jQuery Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/owl.carousel.min.js"></script>
        <!-- Parallax Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/parallax.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/jquery.nice-select.min.js"></script>
        <!-- Mean Menu JS -->
        <script src="{{base_url('assets/frontend')}}/js/jquery.meanmenu.js"></script>
        <!-- Progress Circle Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/progresscircle.min.js"></script>
        <!-- WOW Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/wow.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="{{base_url('assets/frontend')}}/js/contact-form-script.js"></script>
        <!-- Main JS -->
        <script src="{{base_url('assets/frontend')}}/js/main.js"></script>
        <script src="{{base_url('assets/frontend')}}/js/alertify.min.js"></script>
        @yield('js')
        <script>
        $(document).ready(function(){
            $(".nav-link").removeClass("active");
            $(".nav-link").each(function(){

                var classN=$(this).text().trim();
                var menuactive=$(".menuactive").text().trim();
                console.log(classN +" "+ menuactive);
                if(classN===menuactive){
                    console.log(classN +" "+ menuactive);
                    $(this).addClass("active");
                }

            });
        });
        </script>
    </body>
</html>