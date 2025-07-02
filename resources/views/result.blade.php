@extends('layout.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    
                    <!-- Prediction Card -->
                    <div class="card shadow-lg p-4 mb-4 text-center" style="border-radius: 1rem; background: #f4f9ff;">
                        <div style="font-size: 3rem; margin-bottom: 10px;">
                            {!! $isApproved ? '<span style="color:#28a745;">&#10004;</span>' : '<span style="color:#dc3545;">&#10006;</span>' !!}
                        </div>
                        <h4 class="mb-2" style="color:{{ $isApproved ? '#28a745' : '#dc3545' }};">
                            Prediction: {{ $prediction }}
                        </h4>
                        <p class="text-info mb-0" style="font-size: 1.4rem;">
                            Approval Probability: {{ number_format($approvalProbability * 100, 2) }}%
                        </p>
                    </div>

                            <h1>
                                <span class="text-dark" style="font-size: 2.5rem; font-weight: 600; color:black">Consultancy Services</span>
                            </h1>
                    <!-- Consultancy Cards -->
                    <div class="row justify-content-center mb-5">
                        
                        @foreach($consultancies as $c)
                            
                            <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch mb-4">
                                <div class="consultancy-card w-100">
                                    <img src="{{ $c['img'] }}" alt="{{ $c['name'] }}" class="consultancy-img mb-3">
                                    <div class="fw-bold mb-2" style="font-size: 1.7rem; padding-top:1.2rem; color: #333;">{{ $c['name'] }}</div>
                                    <a class="consultancy-link" href="{{ $c['link'] }}" target="_blank">Visit Consultancy</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- FAQs Section -->
                    <div class="card p-5 mt-5 shadow-lg rounded">
                        <h5 class="text-center mb-4">Frequently Asked Questions</h5>
                        <div class="accordion" id="faqAccordion">
                            <div class="card mb-3">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                            How accurate is this prediction?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq1" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Our prediction is based on the data you provided and historical trends. For a detailed assessment, consult with our experts.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            How can I improve my chances?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq2" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Improving your documentation, financials, and language scores can help. Our consultancies can guide you further.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Can I get a personalized consultation?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faq3" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Yes! Click on any consultancy above to book a session with an expert.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* General Card Styles */
    .card {
        background-color: #fff;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 1rem;
    }

    /* Prediction Card Styles */
    .card-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: #1a365d;
    }

    .card-text {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.5;
    }

    /* Consultancy Cards */
    .consultancy-card {
        /* background: linear-gradient(135deg, #f0f7ff, #d8e7fe);
        border-radius: 1rem;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        margin: 10px;
        width: 100%;
        overflow: hidden; */

        background: linear-gradient(135deg, #f0f7ff, #d8e7fe);
        border-radius: 1.25rem;
        padding-bottom:1.5rem;
        
        text-align: center;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        width: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        
    }

    .consultancy-card:hover {
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.14);
        transform: translateY(-5px);
    }

    .consultancy-card .card-body {
        padding: 1.5rem 1.25rem 1.75rem;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .consultancy-img {
        /* border-radius: 50%; */
        width: 100%;
        height: 250px;
        object-fit: cover;
        /* margin-bottom: 15px; */
        transition: transform 0.3s ease;
    }

    .consultancy-card:hover .consultancy-img {
        transform: scale(1.1);
    }

    .consultancy-card .card-body {
    padding: 1.5rem 1.25rem 1.75rem;
    display: flex;
    flex-direction: column;
    flex: 1;
}

    .consultancy-link {
        /* color: #007bff;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease; */
        color: #007bff;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.4rem;
        transition: color 0.3s ease;
        margin-top: auto;
    }

    .consultancy-link:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Accordion Styles */
    .accordion .card-header {
        background-color: #f0f8ff;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 600;
        border: none;
    }

    .accordion .card-header .btn {
        font-size: 1.1rem;
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
        border: none;
        width: 100%;
        text-align: left;
    }

    .accordion .collapse.show .card-header {
        background-color: #e0f7ff;
    }

    .card-body {
        font-size: 1rem;
        color: #666;
        padding: 15px 20px;
    }

    .card-header .btn:hover {
        color: #0056b3;
    }

    .accordion-item {
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-header .btn:focus {
        box-shadow: none;
    }
</style>
@endpush

@push('scripts')
<!-- Bootstrap 4 JS and jQuery 3.3.1 -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script> -->
@endpush