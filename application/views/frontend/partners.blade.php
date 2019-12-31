@extends('frontend/template')
@section('title','Partners')
@section('icerik')
<p style="display:none;" class="menuactive">Company</p>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Partners</h2>
            <ul>
                <li><a href="#">Company</a></li>
                <li>Partners</li>
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
<!-- Start Team Area -->
<!-- <section class="team-area ptb-110">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
            <p>We at RIA believe in setting the benchmark high with getting on board the best of the workforce.</p>

        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box" >
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/1.png" alt="team">

                    </div>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/2.png" alt="team">

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/3.png" alt="team">

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/4.png" alt="team">


                    </div>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/5.png" alt="team">


                    </div>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/6.png" alt="team">

                    </div>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/7.png" alt="team">


                    </div>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{base_url('assets/frontend')}}/img/partner/8.png" alt="team">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Team Area -->
<section class="partner-area ptb-110 bg-f1f3f6">
  <div class="container">
    <div class="row align-items-center">
      

      <div class="col-lg-8 col-md-12">
        <div class="partner-inner-content">
          <h2>Our Partners</h2>
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
      <div class="col-lg-4 col-md-12">
        <div class="question-form">
          <h3>Have a question?</h3>
          <p>Submit your details our experts will reply you with a quote very soon.</p>

          <form action="{{base_url('contactform')}}" method="POST"  name="sentcontact">
            <input type="hidden" value="home" name="page">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" value="{{set_value('name')}}" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" value="{{set_value('email')}}" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{set_value('phone_number')}}" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
              <input type="text" name="company" id="company" class="form-control" value="{{set_value('company')}}" placeholder="Company">
            </div>
            <div class="form-group">
              <textarea name="message" id="message" cols="30" rows="4" class="form-control"  placeholder="Message" required>{{set_value('name')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="submit" name="submit" >Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
    .single-team-box{
        padding: 20px;
    }
    </style>
@endsection