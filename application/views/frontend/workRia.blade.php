@extends('frontend/template')
@section('title','Work With RIA')
@section('icerik')

<p style="display:none;" class="menuactive">Work@Ria</p>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Work@RIA</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li>Work@RIA</li>
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

<!-- Start Blog Area -->
<section class="blog-area ptb-110">
    <div class="container">
        <div class="section-title">
            <h2>Work with RIA</h2>
            <p>We at RIA believe in setting the benchmark high with getting on board the best of the workforce.</p>

            <p>If you think you have the zeal, enthusiasm and energy to work for a young company of experienced professionals then this is the place for you. Each day here is a learning experience with the best of the best.<p>
        </div>
        <div class="row">
            @foreach ($workwithria as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="entry-post-content">
                        <h3><a href="{{base_url('workriadetail/').$item->slug}}">{{$item->baslik}}</a></h3>
                        <a href="{{base_url('workriadetail/').$item->slug}}" class="learn-more-btn">Apply Now <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Blog Area -->


@endsection