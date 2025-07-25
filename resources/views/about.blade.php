@extends('layout.app')

@section('content')

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="page-title-area-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">About Us</h1>
                        <p>Get to know the people and passion behind our brand.</p>
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
                            <span class="year shade">About Us</span>
                            <h2 class="h3">Global Visa Prediction System and Insights</h2>
                            <p>At <b>GVOP,</b> we simplify the visa application process by providing AI-powered insights and predictions. 
                                Our platform analyzes your personal, educational, and travel preferences to estimate your visa approval chances OR recommend Top 5 universities.
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
                                <p>Team Members</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="assets/img/fun-fact/active_members.svg" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5 class="funfact-count">725</h5>
                                <p>Active Users</p>
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
                                <img src="assets/img/fun-fact/predictions.svg" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5><span class="funfact-count">110</span>K+</h5>
                                <p>Predictions</p>
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
                                <p><b>GVOP</b> made it so easy to understand my chances of getting a visa. I felt way more confident applying this time!</p>
                                <h4>Areeb<span class="people-deg">Lahore, Pakistan</span></h4>
                            </div>
                            <!-- Single People Testimonial -->

                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" alt="" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>I had no idea which universities would fit me best. The recommendations saved me hours of research.</p>
                                <h4>Hassaan Farooqui <span class="people-deg">Karachi, Pakistan</span></h4>
                            </div>
                            <!-- Single People Testimonial -->

                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" alt="" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>It’s like having an education consultant in your pocket. Accurate, fast, and super helpful! </p>
                                <h4>Hammad<span class="people-deg">Rawalpindi, Pakistan</span></h4>
                            </div>
                            <!-- Single People Testimonial -->

                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="{{ asset('assets/img/team-member/image.png') }}" alt="" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>I love how <b>GVOP</b> uses real data instead of just assumptions. This gave me a clear roadmap for studying abroad.</p>
                                <h4>Fatima<span class="people-deg">Karachi, Pakistan </span></h4>
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
