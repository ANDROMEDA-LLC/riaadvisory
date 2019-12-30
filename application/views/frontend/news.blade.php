@extends('frontend/template')
@section('title','News')
@section('icerik')
<p style="display:none;" class="menuactive">Company</p>
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>News</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>News</li>
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
                    @foreach ($news as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="entry-thumbnail">
                                <a href="{{base_url('newsdetail/').$item->slug}}"><img src="{{base_url('uploads/news/').$item->resim_yol}}" alt="image"></a>
                            </div>

                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a>Admin</a></li>
                                        <li>  @php echo date('m-d-Y', strtotime(str_replace('-', '/', $item->create_date))) @endphp </li>
                                    </ul>
                                </div>

                                <h3><a href="{{base_url('newsdetail/').$item->slug}}">{{$item->baslik}}</a></h3>
                                <p>@php echo htmlspecialchars_decode(substr($item->icerik,0,150)) @endphp</p>
                                <a href="{{base_url('newsdetail/').$item->slug}}" class="learn-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    <!-- <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

@endsection