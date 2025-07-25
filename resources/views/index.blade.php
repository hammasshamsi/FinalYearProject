@extends('layout.app')

@section('content')

    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <div class="slider-active-wrap owl-carousel text-center text-md-left">
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span>DHA SUFFA UNIVERSITY</span></h3>
                                <p>Guiding futures through intelligent decision-making,Crafted with <b>Data, Purpose, and Passion.</b></p>
                                <div class="slider-btn">
                                    <a href="#about-area" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="about.html" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Not Proud</h2>
                                <h3>Students of <span>DHA SUFFA UNIVERSITY</span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-brand">our mission</a>
                                    <a href="#" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>Why Proud for u</h2>
                                <h3>Students of <span>DHA SUFFA UNIVERSITY</span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-brand">our mission</a>
                                    <a href="#" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
        </div>

        <!-- Social Icons Area Start -->
        <div class="social-networks-icon">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> <span>3.2m Followers</span></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
            </ul>
        </div>
        <!-- Social Icons Area End -->
    </section>
    <!--== Slider Area End ==-->

    <!--== Upcoming Event Area Start ==-->
    <section id="upcoming-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upcoming-event-wrap">
                        <div class="up-event-titile">
                            <h3>Upcoming event</h3>
                        </div>
                        <div class="upcoming-event-content owl-carousel">
                            <!-- No 1 Event -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="{{ asset('assets/img/upcoming-events/event-1.jpg') }}" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It&#x2019;s 22 July 2025</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2025/7/22 09:00"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">FYP Open House – Project Demonstration</a></h3>
                                                    <p>Hello everyone! We are excited to announce that our Final Year Project will be evaluated at <span class='location'>DHA Suffa University</span>. This event marks the culmination of our academic journey, where we will be showcasing our project to faculty, evaluators, and fellows. We look forward to sharing our work and the efforts behind it.</p>
                                                    <!-- <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- partial -->


                            <!-- No 2 Event -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="{{ asset('assets/img/upcoming-events/event-3.jpg') }}" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It&#x2019;s 18 March 2025</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2025/3/18"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <!-- <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- partial -->


                            <!-- No 3 Event -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="{{ asset('assets/img/upcoming-events/event-2.jpg') }}" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It&#x2019;s 27 April 2025</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2025/4/27"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <!-- <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- partial -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Upcoming Event Area End ==-->

    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="about-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto">
                        <div class="about-content-wrap">
                            <div class="section-title text-center text-lg-left">
                                <h2>Our Misssion</h2>
                            </div>

                            <div class="about-thumb">
                                <img src="" alt="" class="img-fluid">
                            </div>

                            <p>
                                Our mission is to provide a user-friendly platform that helps individuals make informed decisions about studying abroad.
                                We offer two key features: personalized university selection and visa approval chance prediction for specific countries.
                            </p>
                            <p>
                                Using separate data-driven models, we deliver accurate recommendations tailored to each user’s preferences and profile.
                            </p>
                            <p>
                                Our <b>Mission</b> is to reduce uncertainty and increase confidence in the study abroad process.
                                By combining advanced analytics and machine learning, we ensure reliable and up-to-date insights.
                                We strive to make international education accessible and achievable for everyone.
                                Ultimately, we empower students to plan their global education journey with clarity and ease.
                            </p>
                            <a href="/about" class="btn btn-brand about-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== About Area End ==-->

    <!--== Our Responsibility Area Start ==-->
    <section id="responsibility-area" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our Features</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->

            <!--== Responsibility Content Wrapper ==-->
            <div class="row text-center text-sm-left">
                <!--== Single Responsibility Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-responsibility">
                        <img src="assets/img/responsibility/01.png" alt="Responsibility">
                        <h4>Personalized University Selection</h4>
                        <p>We help students find the <b>best universities</b> abroad tailored to their preferences and academic profile.</p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->

                <!--== Single Responsibility Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-responsibility">
                        <img src="assets/img/responsibility/02.png" alt="Responsibility">
                        <h4>Visa Approval Prediction</h4>
                        <p>Our predictive model estimates your visa approval chances to <b>help</b> you plan your study abroad journey confidently.</p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->

                <!--== Single Responsibility Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-responsibility">
                        <img src="assets/img/responsibility/03.png" alt="Responsibility">
                        <h4>Data-Driven Insights</h4>
                        <p>Leverage intelligent analytics to make <b>informed and accurate decisions</b> about international education</p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->

                <!--== Single Responsibility Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-responsibility">
                        <img src="assets/img/responsibility/04.png" alt="Responsibility">
                        <h4>User-Friendly Platform</h4>
                        <p><b>Access a simple, Free ,easy-to-navigate interface</b> designed for students to explore all resources seamlessly.</p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->
            </div>
            <!--== Responsibility Content Wrapper ==-->
        </div>
    </section>
    <!--== Our Responsibility Area End ==-->

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

    <!--== Job Opportunity Area Start ==-->

    <!--== Job Opportunity Area End == -->

    <!--== Gallery Area Start ==-->
    <section id="gallery-area" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our gallery</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->

            <!--== Gallery Container Warpper ==-->
            <div class="gallery-content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Gallery Menu Start -->
                        <div class="gallery-menu text-center">
                            <span class="active" data-filter="*">All</span>
                            <span data-filter=".old">Old Memories</span>
                            <span data-filter=".event">Event</span>
                            <!-- <span data-filter=".pic">Our Picnic</span> -->
                            <span class="d-none d-sm-inline-block" data-filter=".recent">Recent</span>
                        </div>
                        <!-- Gallery Menu End -->

                        <!-- Gallery Item content Start -->
                        <div class="row gallery-gird">
                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 recent event">
                                <div class="single-gallery-item gallery-bg-1">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>University Faculty Event</h4>
                                            <p class="gallery-event-date">29 Dec, 2024</p>
                                        </div>
                                        <a href="{{ asset('assets/img/gallery/g1.jpg') }}" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 old event pic">
                                <div class="single-gallery-item video gallery-bg-2">
                                    <a href="https://youtu.be/2ky2KORjxc0?si=jOjvMgxAEp180QZ6" class="btn btn-video-play video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 recent pic">
                                <div class="single-gallery-item gallery-bg-3">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>Auditorium Session</h4>
                                            <p class="gallery-event-date">21 Oct, 2024</p>
                                        </div>
                                        <a href="{{ asset('assets/img/gallery/g2.jpg') }}" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 old">
                                <div class="single-gallery-item gallery-bg-4">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>Member's Training</h4>
                                            <p class="gallery-event-date">19 June, 2024</p>
                                        </div>
                                        <a href="{{ asset('assets/img/gallery/g3.jpg') }}" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 pic event">
                                <div class="single-gallery-item gallery-bg-5">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>Cabinet Meeting</h4>
                                            <p class="gallery-event-date">28 Sep, 2024</p>
                                        </div>
                                        <a href="{{ asset('assets/img/gallery/g4.jpg') }}" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 old recent">
                                <div class="single-gallery-item gallery-bg-6">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>World's Job fair</h4>
                                            <p class="gallery-event-date">30 Dec, 2024</p>
                                        </div>
                                        <a href="{{ asset('assets/img/gallery/g5.jpg') }}" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 pic">
                                <div class="single-gallery-item video gallery-bg-7">
                                    <a href="https://player.vimeo.com/video/181545195?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1" class="btn btn-video-play video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <!-- Single Gallery End -->

                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 pic recent old">
                                <div class="single-gallery-item gallery-bg-8">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>Managing Director Workshop</h4>
                                            <p class="gallery-event-date">2 Aug, 2024</p>
                                        </div>
                                        <a href="{{ asset('assets/img/gallery/g6.jpg') }}" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->
                        </div>
                        <!-- Gallery Item content End -->
                    </div>
                </div>
            </div>
            <!--== Gallery Container Warpper==-->
        </div>
    </section>
    <!--== Gallery Area Start ==-->


    <!--== Blog Area Start ==-->
    <section id="how-it-works" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>How It Works</h2>
                    <p>Follow these steps to get started</p>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Stepper Content Wrapper ==-->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="stepper">
                    <!-- Step 1 -->
                    <div class="step col-md-3 col-12">
                        <div class="step-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 1: Sign Up</h3>
                            <p>To begin, create your account by providing basic information.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="step col-md-3 col-12">
                        <div class="step-icon">
                            <i class="fa fa-clipboard"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 2: Fill Out Form</h3>
                            <p>Once signed in, Fill your data to get started.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="step col-md-3 col-12">
                        <div class="step-icon">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 3: Submit</h3>
                            <p>Fill out form and submit correct data.</p>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="step col-md-3 col-12">
                        <div class="step-icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 4: Get Results</h3>
                            <p>Get Recommendation OR Prediction from Trained Model.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Stepper Content Wrapper End ==-->
    </div>
</section>
<!--== Stepper Section End ==-->

    <!--== Scholership Promo Area Start ==-->
    <section id="scholership-promo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="scholership-promo-text">
                        <h2>Join Our Global University <span>Representative</span> Program!</h2>
                        <p>We are building a network of university representatives to guide students on visas, careers, and relocation. Be a part of our community and make a difference!</p>
                        <a href="#" class="btn btn-brand">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Scholership Promo Area End ==-->

    



@endsection()
