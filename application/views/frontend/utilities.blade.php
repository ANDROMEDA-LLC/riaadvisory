@extends('frontend/template')
@section('title','Anasayfa')
@section('icerik')
<p style="display:none;" class="menuactive">Services</p>
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>UTILITIES</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
						<li>Services</li>
                        <li>Utilities</li>
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

        <!-- Start Resources Details Area -->
        <section class="resources-details-area ptb-110">
            <div class="container">
            @php $i=0 @endphp
            @foreach ($utilities as $item)
            @php echo $i!=0 ? '<hr>' : null @endphp
            <div class="resources-details-overview">
                    <div class="resources-details-desc" style="flex:none;max-width:60%;">
                        <h3>{{$item->baslik}}</h3>
                        @php echo htmlspecialchars_decode($item->icerik) @endphp
                        </div>

                    <div class="resources-details-image wow fadeInUp" style="max-width:40%;">
                        <img src="{{base_url('uploads/utilities/').$item->resim_yol}}" alt="image" style="width:100%;">
                    </div>
                </div>
                @php $i++ @endphp
            @endforeach
                
               
            </div>
        </section>
        <!-- End Resources Details Area -->


@endsection
