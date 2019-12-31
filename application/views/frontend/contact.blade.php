@extends('frontend/template')
@section('title','Contact')
@section('icerik')
<p style="display:none;" class="menuactive">Contact</p>	
		 <!-- Start Page Title Area -->
         <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Contact Us</li>
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
        <section class="contact-area ptb-110">
            <div class="container">
                <div class="section-title">
                    <span>Message Us</span>
                    <h2>Drop us Message for any Query</h2>
                    <p>You can fill up this form to get in touch with us.</p>
                </div>
                <div class="contact-form">
                    <form action="{{base_url('contactform')}}" method="POST"  name="sentcontact" >
                    <input type="hidden" value="contact" name="page">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" value="{{set_value('name')}}"   placeholder="Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" value="{{set_value('email')}}"  placeholder="Email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" value="{{set_value('phone_number')}}"  class="form-control" placeholder="Phone" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="company" id="msg_subject" value="{{set_value('company')}}"  class="form-control"  placeholder="Company">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5"  placeholder="Your Message" required>{{set_value('message')}}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary" value="submit" name="submit" >Send Message</button>
                            <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h3>Contact us by Phone Number or Email Address</h3>
                        <h2>
                            <a href="tel:305.421.6303">305.421.6303</a>
                            <span>OR</span>
                            <a href="mailto: info@riaadvisory.com"> info@riaadvisory.com</a>
                        </h2>
                        <ul class="social">
                            <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li> -->
                            <li><a href="https://www.facebook.com/ria.advisory/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/riaadvisory" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <!-- <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('js')
<script type="text/javascript">
<?php $ci = get_instance();
    if($ci->session->flashdata('success')){ ?>
    alertify.alert('SUCCESS',"<?php echo $ci->session->flashdata('success'); ?>");
<?php }else if($ci->session->flashdata('error')){  ?>
    alertify.alert('ERROR',"<?php echo $ci->session->flashdata('error'); ?>");
  <?php } ?>
</script>
@endsection