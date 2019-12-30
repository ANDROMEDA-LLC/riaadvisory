@extends('frontend/template')
@section('title','About Us')
@section('icerik')
 <!-- Start Page Title Area -->
 <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>About Us</li>
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
                            <span>About Us</span>
                            <h2>We've Been Thriving in 4 Years The Tech Area</h2>
                            <p>RIA Advisory is a young technology company formed in 2016 by a dynamic entrepreneur whose previous work experience included creating and developing new business in Oracle Corporation and BearingPoint Inc. Under his guidance the team flourished by delivering complex business transformation projects, especially in capital-intensive industries such as Utilities, Banking, Payment Services, Insurance, and Healthcare.</p>
                            <br>
							<h2>Achievement</h2>
							<p>Founder of RIA was instrumental in the evolution of a premier Revenue Management and Billing Solution for Banking, Financial Services and Healthcare Insurance. The Oracle Customer Care and Billing utilities solution formed the baseline for the solution.</p>
                            <p>The RIA team has been an integral part of complex CIS implementations, at firms such as KCPL, Nicor, Hydro Ottawa, Miami-dade and Toronto Hydro; our consultants at RIA Advisory have extensive experience in the Regulated and De-regulated Energy Market.</p>
							<p>Our team has also worked in Financial Services and healthcare industries serving clients like Citibank, Visa, United Health Group, Deutsche Bank, Delta Dental and many others.</p>
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