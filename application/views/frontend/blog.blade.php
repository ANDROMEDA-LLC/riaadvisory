@extends('frontend/template')
@section('title','Blog')
@section('icerik')
<p style="display:none;" class="menuactive">Blog</p>
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
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
                    

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

@endsection