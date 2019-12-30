@extends('frontend/template')
@section('title','Services')
@section('icerik')
<p style="display:none;" class="menuactive">Services</p>
 <!-- Start Page Title Area -->
 <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Services</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Services</li>
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
                            <img src="{{base_url('assets/frontend')}}/img/4.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <!-- @php echo htmlspecialchars_decode($aboutus->content) @endphp -->
                            <span>Services</span> 
                            <p>Our expertise lies in all the critical business areas that are associated with the “meter to cash” and “order to cash” processes, in multiple verticals. Our sound business knowledge, coupled with our skilled services delivery, makes for a unique offering to our clients.</p>  
							<p>RIA’s USP is the ability to enhance, extend, and implement Pricing, Billing and Revenue Management systems in a manner that increases efficiencies while continuously working to improve processes to cross-sell and up-sell. We help our clients succeed with clever innovative techniques in this era of disruptive change.</p>
                            <p>With a strong team, we bring our years of experience with Revenue Management solutions, along with practical industry experience, to make every engagement we take on a resounding success!</p>
                        </div>
                    </div>
                </div>

           
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Features Area -->
        <section class="features-area ptb-110 bg-f1f3f6">
            <div class="container">
                <div class="section-title">
                    <h2>Big Data Value & Benefits</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="overview-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/1.png" alt="image">
                    </div>

                    <div class="content">
                        <h3>Sales Increase</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="features-list">
                            <li><span><i class='bx bx-check-double'></i> Recommender systems</span></li>
                            <li><span><i class='bx bx-check-double'></i> Demand prediction</span></li>
                            <li><span><i class='bx bx-check-double'></i> Omnichannel analytics</span></li>
                            <li><span><i class='bx bx-check-double'></i> Lead generation</span></li>
                            <li><span><i class='bx bx-check-double'></i> Sales prediction</span></li>
                            <li><span><i class='bx bx-check-double'></i> Product line optimization</span></li>
                        </ul>
                    </div>
                </div>

                <div class="overview-box">
                    <div class="content">
                        <h3>Risk Management</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="features-list">
                            <li><span><i class='bx bx-check-double'></i> Customer churn prediction</span></li>
                            <li><span><i class='bx bx-check-double'></i> Psychological scoring</span></li>
                            <li><span><i class='bx bx-check-double'></i> Fraud detection</span></li>
                            <li><span><i class='bx bx-check-double'></i> Preventive maintenance</span></li>
                            <li><span><i class='bx bx-check-double'></i> HR analytics</span></li>
                            <li><span><i class='bx bx-check-double'></i> Social media monitoring</span></li>
                        </ul>
                    </div>

                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/2.png" alt="image">
                    </div>
                </div>

                <div class="overview-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/3.png" alt="image">
                    </div>

                    <div class="content">
                        <h3>Operations Management</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="features-list">
                            <li><span><i class='bx bx-check-double'></i> Image recognition</span></li>
                            <li><span><i class='bx bx-check-double'></i> Warehouse optimization</span></li>
                            <li><span><i class='bx bx-check-double'></i> Logistics optimization</span></li>
                            <li><span><i class='bx bx-check-double'></i> Supply chain optimization</span></li>
                            <li><span><i class='bx bx-check-double'></i> Work shifts optimization</span></li>
                            <li><span><i class='bx bx-check-double'></i> Chat bots and call robots</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="rectangle-shape1"><img src="{{base_url('assets/frontend')}}/img/rectangle-shape1.png" alt="image"></div>
            <div class="rectangle-shape2"><img src="{{base_url('assets/frontend')}}/img/rectangle-shape2.png" alt="image"></div>
            <div class="shape1"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
            <div class="shape2"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
            <div class="shape3"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
        </section>
        <!-- End Features Area -->

       

      

	  

@endsection