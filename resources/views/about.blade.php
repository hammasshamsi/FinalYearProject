@extends('layout.app')

@section('content')

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="page-title-area-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">About Us</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                            need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Committee Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="about-page-content-wrap section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 m-auto">
                        <!-- Single about text start -->
                        <div class="single-about-text">
                            <span class="year">About Us</span>
                            <h2 class="h3">Global Visa Prediction System and Insights</h2>
                            <p>At <b>GVOP,</b> we simplify the visa application process by providing AI-powered insights and predictions. 
                                Our platform analyzes your personal, educational, and travel preferences to estimate your visa approval chances and recommend suitable countries if needed.
                            </p>
                            <p>We understand how complex and uncertain visa applications can be, 
                                and our goal is to empower you with data-driven insights to make informed decisions. 
                                With accuracy, transparency, and user privacy as our top priorities, 
                                we ensure that your information is handled securely while delivering valuable recommendations.</p>
                                <p>Join thousands of users who trust <b>GVOP</b> to navigate their visa journey with confidence!</p>
                        </div>
                        <!-- Single about text End -->
                    </div>
                </div>
            </div>
        </div>

        <!--== FunFact Area Start ==-->
        <section id="funfact-area">
            <div class="container-fluid">
                <div class="row text-center">
                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="assets/img/fun-fact/user.svg" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5 class="funfact-count">25</h5>
                                <p>Members</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="assets/img/fun-fact/picture.svg" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5 class="funfact-count">725</h5>
                                <p>Photos</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="assets/img/fun-fact/event.svg" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5><span class="funfact-count">100</span>+</h5>
                                <p>Events</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="assets/img/fun-fact/medal.svg" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5><span class="funfact-count">12</span>+</h5>
                                <p>Awards</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->
                </div>
            </div>
        </section>
        <!--== FunFact Area End ==-->

        <div class="our-honorable-commitee section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="about-page-area-title">
                            <h2>Our Honorable Committe</h2>
                        </div>
                    </div>
                </div>

                <div class="honorable-committee-list">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" class="img-fluid" alt="Committee">
                                </div>
                                <h3>Ayoub Kamal<span class="committee-deg">Project Supervisor</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" class="img-fluid" alt="Committee">
                                </div>
                                <h3>Dr. Ahmad Bilal<span class="committee-deg">Co-Supervisor</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" class="img-fluid" alt="Committee">
                                </div>
                                <h3>Conrad d'Silva<span class="committee-deg">Co-Supervisor</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" class="img-fluid" alt="Committee">
                                </div>
                                <h3>Ahmad Yazdani<span class="committee-deg">Team Lead</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" class="img-fluid" alt="Committee">
                                </div>
                                <h3>Hammas Shamsi<span class="committee-deg">Team Member</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" class="img-fluid" alt="Committee">
                                </div>
                                <h3>Saif Ali Khan<span class="committee-deg">Team Member</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="people-to-say section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="about-page-area-title">
                            <h2>Some Speech About Us</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="people-to-say-wrapper owl-carousel">
                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" alt="Alumni" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                    inciidunt ut
                                    labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                                <h4>Robert Albert <span class="people-deg">Founder at Boxr</span></h4>
                            </div>
                            <!-- Single People Testimonial -->

                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" alt="" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                    inciidunt ut
                                    labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                                <h4>Akamla Albert <span class="people-deg">Founder at Kamlakana</span></h4>
                            </div>
                            <!-- Single People Testimonial -->

                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" alt="" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                    inciidunt ut
                                    labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                                <h4>Taklo Nahid <span class="people-deg">Minister at Nara</span></h4>
                            </div>
                            <!-- Single People Testimonial -->

                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="http://placehold.it/500x500" alt="" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                    inciidunt ut
                                    labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                                <h4>Mal Muhit<span class="people-deg">Founder at Kamlagiri</span></h4>
                            </div>
                            <!-- Single People Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Committee Page Content End ==-->

@endsection()
