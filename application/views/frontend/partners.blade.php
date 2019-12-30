@extends('frontend/template')
@section('title','Partners')
@section('icerik')
<p style="display:none;" class="menuactive">Company</p>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Company</h2>
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
<section class="team-area ptb-110">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
            <p>We at RIA believe in setting the benchmark high with getting on board the best of the workforce.</p>

        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
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
</section>
<!-- End Team Area -->

<style>
    .single-team-box{
        padding: 20px;
    }
    </style>
@endsection