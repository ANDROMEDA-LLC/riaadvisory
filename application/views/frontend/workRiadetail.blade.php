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
                        <li><a href="{{base_url('workRia')}}"> Work@RIA</a></li>
                        <li>{{$workriadetail->baslik}}</li>
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

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details">
                         

                            <div class="article-content">
                              
                                <h3>{{$workriadetail->baslik}}</h3>

                                <div class="elementor-widget-container" style="word-wrap: break-word">
                                @php echo htmlspecialchars_decode($workriadetail->icerik) @endphp
			

		</div>
                            </div>

                         
                        </div>

                     
                    </div>

                    <div class="col-lg-4 col-md-12">
                          <div class="question-form">
                            <h3>Would you like to apply?</h3>
                            <p>Fill the form and submit your resume.</p>

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
								<div class="form-group">
                                   <input type="file" name="file" style="color: #fff;"/>
                                </div>

                                <button type="submit" class="btn btn-primary">Apply Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->



@endsection