@extends('frontend/template')
@section('title','Why Us')
@section('icerik')
 
	 <!-- Start Page Title Area -->
     <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Why Us</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Why Us</li>
                    </ul>
                </div>
            </div>

            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="shape3"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
        <section class="about-area ptb-110">
            <div class="container">
                <div class="row align-items-center">
                
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{base_url('assets/frontend')}}/img/3.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                        @php echo htmlspecialchars_decode($whyus->content) @endphp
                            </div>
                    </div>
                </div>

              
            </div>
        </section>
        <!-- End About Area -->
 
 
       <!-- Start Why Choose Us Area -->
        <section class="why-choose-us-area ptb-110">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Why Choose RiaAdvisory?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-choose-us-box">
                            <div class="title">
                                <div class="icon">
                                    <i class='bx bx-git-merge'></i>
                                </div>
                                <h3>Experienced Professionals</h3>
                            </div>

                            <div class="content">
                                <h3>Experienced Professionals</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-choose-us-box">
                            <div class="title">
                                <div class="icon">
                                    <i class='bx bx-down-arrow'></i>
                                </div>
                                <h3>Providing value</h3>
                            </div>

                            <div class="content">
                                <h3>Providing value</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-choose-us-box">
                            <div class="title">
                                <div class="icon">
                                    <i class='bx bx-expand'></i>
                                </div>
                                <h3>Understanding your business</h3>
                            </div>

                            <div class="content">
                                <h3>Understanding your business</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-choose-us-box">
                            <div class="title">
                                <div class="icon">
                                    <i class='bx bx-timer'></i>
                                </div>
                                <h3>Market Disrupter</h3>
                            </div>

                            <div class="content">
                                <h3>Real-Time Alerts</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-choose-us-box">
                            <div class="title">
                                <div class="icon">
                                    <i class='bx bx-trending-up'></i>
                                </div>
                                <h3>Client First Policy</h3>
                            </div>

                            <div class="content">
                                <h3>Client First Policy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>

                 
                </div>
            </div>

            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- End Why Choose Us Area -->


@endsection