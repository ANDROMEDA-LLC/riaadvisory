@extends('frontend/template')
@section('title','FAQ')
@section('icerik')
<p style="display:none;" class="menuactive">Company</p>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>FAQ</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li>FAQ</li>
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

<!-- Start FAQ Area -->
<section class="faq-area ptb-110">
    <div class="container">
        <div class="row">


            <div class="col-lg-6 col-md-12">
                <div class="faq-accordion">
                    <ul class="accordion">
                        @php $i=0 @endphp
                        @foreach ($faq as $item)
                        <li class="accordion-item">
                            <a class="accordion-title  @php echo $i==0 ? 'active' : null @endphp" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Is Smart Lock required for instant apps?
                            </a>

                            <p class="accordion-content" style="@php echo $i==0 ? 'display: block;' : null @endphp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </li>
                        @php $i++@endphp
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="faq-content">
                    <div class="section-title">
                        <span>Ask Question</span>
                        <h2>Frequently Asked Questions</h2>
                        <p>Veniam quis nostrud exercitation ullamco laboris nist aute irure dolor in reprehenderit in voluptate velit esse nulla pariatur excepteur sint occaecat aboris nisi ut aliquip.</p>
                    </div>
                    <div class="faq-image">
                        <img src="{{base_url('assets/frontend')}}/img/faq.png" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="faq-contact">
            <div class="section-title">
                <h2>Do You Have Any Questions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="faq-contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->


@endsection