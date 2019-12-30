@extends('frontend/template')
@section('title','Our Team')
@section('icerik')
<p style="display:none;" class="menuactive">Company</p>
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>OUR TEAM</h2>
                    <ul>
                        <li><a href="#">Company</a></li>
						<li>Our Team</li>
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
                <div class="resources-details-overview">
				<div class="resources-details-image wow fadeInUp" style="max-width:40%;">
                        <img src="{{base_url('assets/frontend')}}/img/team/1.jpg" alt="image" style="width:100%;">
                    </div>
                    <div class="resources-details-desc" style="flex:none;max-width:60%;">
                        <h3>Saket Pabby - Founder</h3>
                        <p>Saket Pabby, the founding member of RIA Advisory LLC, gave up a high profile job as Vice President Oracle Revenue Management and Billing (ORMB) application at Oracle, to follow up on his entrepreneurial dream. His accomplishments at his previous stint included successfully launching ORMB in four new verticals i.e. Banking, Capital Markets, Payment Services and Healthcare, product positioning, business development, market planning, and delivery. This was the net new high-margin business for Oracle.</p>
                        <p>Prior to joining Oracle, Saket spent over nine years at BearingPoint Inc. where he headed a large global team of consultants & sales professionals, with the prime focus on Oracle CC & B.</p>
                    </div>

                    
                </div>
				<hr>
                  <div class="resources-details-overview">
                    <div class="resources-details-desc" style="flex:none;max-width:60%;" >
                        <h3>Supriya Mukhapadhyay - Head Of Product Strategy & Innovation</h3>
                        <p>Supriya was the Vice President of Product Management and Engineering for Oracle Revenue Management and Billing (ORMB) Application at Oracle. He successfully developed and launched ORMB in four new verticals i.e. Banking, Capital Markets, Payment Services and Healthcare, took ORMB to cloud doing a technology refresh for application modernization. Supriya was managing 150 Product Strategy, Product Management and Product Engineering professionals. Supriya also ran Product Development for Edifecs, a health care IT company where he was responsible for running a large Product organization (200+ engineers) with 15 products (both cloud and on premise) and teams in four different geographies.</p>
                        <p>Prior to getting acquired by Oracle, Supriya spent 10 years at SPL Worldgoup as VP of Product Development where he worked on three generations of CIS Products: CISPlus, PeopleSoft CIS and Oracle CC&B. In addition to providing leadership to architects responsible for different CIS modules, Supriya was responsible for architecting the Rating and Billing modules of PeopleSoft CIS and CC&B.</p>
						<p>Supriya Believes – “Cloud and Microservices Architecture are fundamentally changing how we build and operate applications. This creates a great opportunity for Utilities to innovate and modernize their application portfolio”</p>
					</div>

                    <div class="resources-details-image wow fadeInUp" style="max-width:40%;" >
                        <img src="{{base_url('assets/frontend')}}/img/team/2.jpg" alt="image" style="width:100%;">
                    </div>
                </div> 
				<hr>
                  <div class="resources-details-overview">
				   <div class="resources-details-image wow fadeInUp" style="max-width:40%;">
                        <img src="{{base_url('assets/frontend')}}/img/team/3.jpg" alt="image" style="width:100%;">
                    </div>
                    <div class="resources-details-desc" style="flex:none;max-width:60%;" >
                        <h3>Sameer Khetarpal – Managing Partner</h3>
                        <p>Sameer Khetarpal, a Managing Partner of RIA Advisory, brings with him over 20 years of IT experience. Having worked on ORMB and CC&B platforms, since the year 1998, he has an in-depth knowledge of the domain and application.</p>
                        <p>Sameer has managed a portfolio of large complex ORMB implementations. His work profile as a solution architect included the responsibility of mentoring quite a few architects in this same space. With over 25 revenue management implementations in the leading financial services and utility companies, Sameer has worked in principally all capacities.</p>
						<p>Prior to becoming a part of RIA Advisory, he was the Senior Director of Consulting for ORMB at Oracle. Apart from Oracle, his work experience includes working on CC&B and ORMB implementations in SPL Worldgroup and Bearing Point.</p>
					</div>

                   
                </div> 
				<hr>
                  <div class="resources-details-overview">
                    <div class="resources-details-desc" style="flex:none;max-width:60%;">
                        <h3>Emin Eker – Managing Partner</h3>
                        <p>Emin Eker, a Managing Partner of RIA Advisory, has been working with ORMB and CC&B since 2004. With over 20 years of experience in the field of IT – a majority of it in large complex ORMB project implementations, Emin specializes in solving complex technical issues related to integration, data migration, batch and real time performance issues for a substantial user/data volumes for sizeable, complex customers.</p>
                        <p>Having worked in leading financial services, health care and utilities companies in essentially all capacities, he has handled over 20 revenue management implementations.</p>
						<p>Emin was the Senior Director of Consulting for ORMB at Oracle, prior to becoming a part of RIA Advisory. His rich work experience also includes working at Bearing Point on CC&B and Siebel implementations.</p>
					</div>

                    <div class="resources-details-image wow fadeInUp" style="max-width:40%;" >
                        <img src="{{base_url('assets/frontend')}}/img/team/4.jpg" alt="image" style="width:100%;"> 
                    </div>
                </div> 
            </div>
        </section>
        <!-- End Resources Details Area -->

@endsection