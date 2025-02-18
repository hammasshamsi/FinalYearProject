@extends('layout.app')

@section('content')

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="page-title-area-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">All Event Archive</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                            need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="event-page-content-wrap section-padding">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="event-filter-area">
                            <form action="index.html" class="form-inline">
                                <select name="year" id="year">
                                    <option selected>Year</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                </select>

                                <select name="place" id="place">
                                    <option selected>Place</option>
                                    <option>Karachi</option>
                                    <option>Islamabad</option>
                                    <option>Online</option>
                                    <option>Rawalpindi</option>
                                    <option>Lahore</option>
                                </select>

                                <select name="type" id="type">
                                    <option selected>Type</option>
                                    <option>Meetup</option>
                                    <option>Picnic</option>
                                    <option>Get Together</option>
                                </select>

                                <button class="btn btn-brand">Filter</button>
                            </form>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="all-event-list">
                            <!-- Single Event Start -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="{{ asset('assets/img/upcoming-events/event-1.jpg') }}" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It&#x2019;s 01 March 2025</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2025/3/01"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Event End -->

                            <!-- Single Event Start -->
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
                                                    <h3><a href="single-event.html">We are going to arrange a Team Dinner!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Event End -->

                            <!-- Single Event Start -->
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
                                                    <h3><a href="single-event.html">We are going to arrange a Mountain Camping!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Event End -->

                            <!-- Single Event Start -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="{{ asset('assets/img/upcoming-events/event-4.jpg') }}" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It&#x2019;s 02 May 2025</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2025/5/02"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">We are going to arrange a Meetup with our CEO!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Event End -->
                        </div>
                    </div>
                </div>

                <!-- Pagination Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-wrap text-center">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination End -->
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->

@endsection()
