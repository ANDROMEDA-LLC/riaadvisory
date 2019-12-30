@extends('frontend/template')
@section('title','Anasayfa')
@section('icerik')
<p style="display:none;"  class="menuactive">Home</p>
<!-- Start Main Banner Area -->
<div class="main-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <div class="main-banner-content">
          <h1>Big Data and analytics</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

          <div class="btn-box">
            <a href="{{base_url('utilities')}}" class="btn btn-primary">Utilities</a>
            <a href="{{base_url('services')}}" class="btn btn-light">Financial Services</a>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12">
        <div class="main-banner-image">
          <img src="{{base_url('assets/frontend')}}/img/banner-img1.png" alt="image">
        </div>
      </div>
    </div>
  </div>

  <div class="banner-shape"><img src="{{base_url('assets/frontend')}}/img/banner-shape.png" alt="image"></div>
  <div class="banner-white-shape"><img src="{{base_url('assets/frontend')}}/img/white-shape.png" alt="image"></div>
  <div class="shape3"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
  <div class="shape2"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>

  <div class="lines">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
</div>
<section class="featured-services-area ptb-110">
  <div class="container">
  <div class="section-title" style="max-width: 850px;">
            <h2>Providing consulting services to large enterprises to effectively manage their revenue lifecycle</h2>
            <p style="max-width: 850px;">RIA Advisory LLC is a business and technology advisory consultancy that specializes in the field of Utilities, Technology & Financial Services. As the name “RIA – Recognize, Innovate & Accelerate” suggests, we believe in doing a thorough research of the client’s pain-points and needs, find innovative solutions and then, work with diligence to accelerate the plan on the path to success.</p>

            <p style="max-width: 850px;">With a team of highly qualified and experienced individuals, we are the trusted advisors for our clients across several technology platforms. Our team of professionals, with an extensive experience in revenue lifecycle management, is helping clients achieve their business transformation goals with speed, ease, and financial viability.<p>
        </div>
    <div class="row">
      <div class="featured-services-slides owl-carousel owl-theme">
        <div class="col-lg-12 col-md-12">
          <div class="single-services-box">
            <div class="icon bg-dfffd7">
              <i class="flaticon-tick"></i>

            </div>

            <h3><a href="#">Recognize</a></h3>
            <p>The impact of Cloud Technology on process and people and people that drive them</p>
            <!-- <a href="#" class="learn-more-btn">Learn More <i class="flaticon-add-1"></i></a> -->
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="single-services-box">
            <div class="icon bg-cefffe">
              <i class="flaticon-code"></i>
            </div>

            <h3><a href="#">Innovate</a></h3>
            <p>New systems that make the processes scalable and efficient</p>
            <!-- <a href="#" class="learn-more-btn">Learn More <i class="flaticon-add-1"></i></a> -->
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="single-services-box">
            <div class="icon bg-ffb8c8">
              <i class="flaticon-big-data-1"></i>
            </div>

            <h3><a href="#">Accelerate</a></h3>
            <p>The path to revenue realization and effectiveness</p>
            <!-- <a href="#" class="learn-more-btn">Learn More <i class="flaticon-add-1"></i></a> -->
          </div>
        </div>

        <!-- <div class="col-lg-12 col-md-12"> -->
        <!-- <div class="single-services-box"> -->
        <!-- <div class="icon"> -->
        <!-- <i class="flaticon-big-data"></i> -->
        <!-- </div> -->

        <!-- <h3><a href="#">Content Management</a></h3> -->
        <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> -->
        <!-- <a href="#" class="learn-more-btn">Learn More <i class="flaticon-add-1"></i></a> -->
        <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
  </div>

  <div class="shape4"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
  <div class="shape5"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
</section>
<!-- End Featured Services Area -->

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

<!-- Start How It Works Area -->
<section class="how-it-works-area ptb-110">
  <div class="container">
    <div class="section-title">
      <h2>How It Works</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-how-it-work-box">
          <div class="icon">
            <i class="flaticon-cloud"></i>
          </div>
          <h3>Integrate</h3>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised.</p>

          <div class="number-text">1</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-how-it-work-box">
          <div class="icon">
            <i class="flaticon-system"></i>
          </div>
          <h3>Manage</h3>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised.</p>

          <div class="number-text">2</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
        <div class="single-how-it-work-box">
          <div class="icon">
            <i class="flaticon-analysis"></i>
          </div>
          <h3>Analyze</h3>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised.</p>

          <div class="number-text">3</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End How It Works Area -->

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



<!-- Start Partner Area -->
<section class="partner-area ptb-110 bg-f1f3f6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-12">
        <div class="question-form">
          <h3>Have a question?</h3>
          <p>Submit your details our experts will reply you with a quote very soon.</p>

          <form>
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="text" name="company" id="company" class="form-control" placeholder="Company">
            </div>

            <div class="form-group">
              <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Message</button>
          </form>
        </div>
      </div>

      <div class="col-lg-8 col-md-12">
        <div class="partner-inner-content">
          <h2>Our Clients</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <div class="our-clients-list">
            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/1.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/2.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/3.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/4.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/5.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/6.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/7.png" alt="image">
              </a>
            </div>

            <div class="single-clients">
              <a href="#">
                <img src="{{base_url('assets/frontend')}}/img/partner/8.png" alt="image">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Partner Area -->

<!-- Start Feedback Area -->
<section class="feedback-area ptb-110">
  <div class="container">
    <div class="section-title">
      <h2>Clients Feedback</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>

  <div class="feedback-slides owl-carousel owl-theme">
    <div class="single-feedback-item">
      <div class="feedback-desc">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>

      <div class="client-info">
        <h3>Filip Luis</h3>
        <span>Founder & CEO</span>
      </div>
    </div>

    <div class="single-feedback-item">
      <div class="feedback-desc">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>

      <div class="client-info">
        <h3>David Luiz</h3>
        <span>Desginer</span>
      </div>
    </div>

    <div class="single-feedback-item">
      <div class="feedback-desc">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>

      <div class="client-info">
        <h3>Sarah Taylor</h3>
        <span>Manager</span>
      </div>
    </div>

    <div class="single-feedback-item">
      <div class="feedback-desc">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>

      <div class="client-info">

        <h3>James Anderson</h3>
        <span>Developer</span>
      </div>
    </div>
  </div>
</section>
<!-- End Feedback Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-110 bg-f1f3f6">
  <div class="container">
    <div class="section-title">
      <h2>Our Recent Story</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <div class="row">
      
      @foreach ($blog as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{base_url('uploads/blog/').$item->resim_yol}}" alt="image"></a>
                            </div>

                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>{{$item->create_date}}</li>
                                    </ul>
                                </div>

                                <h3><a href="#">{{$item->baslik}}</a></h3>
                                <p>@php echo htmlspecialchars_decode($item->icerik) @endphp</p>
                                <a href="#" class="learn-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>
      @endforeach
     

      
    </div>
  </div>
</section>
<!-- End Blog Area -->

@endsection