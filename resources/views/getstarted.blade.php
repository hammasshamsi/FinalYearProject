@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="entry-heading mb-5">
    <span class="entry-icon">
        <i class="fas fa-rocket"></i>
    </span>
    <span>Choose Our Service</span>
</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <a href="/uni-recommend-form" class="service-btn">
                            <div class="service-card position-relative">
                                <span class="icon-circle">
                                    <i class="fas fa-university"></i>
                                </span>
                                <h3 class="mt-4 mb-2">University Recommendation</h3>
                                <p>Get personalized university suggestions based on your profile.</p>
                                <span class="badge badge-pill badge-primary service-badge">New</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4">
                        <a href="/form" class="service-btn">
                            <div class="service-card position-relative">
                                <span class="icon-circle icon-green">
                                    <i class="fas fa-passport"></i>
                                </span>
                                <h3 class="mt-4 mb-2">Visa Prediction</h3>
                                <p>Check your chances for visa approval using our AI model.</p>
                                <span class="badge badge-pill badge-success service-badge">Popular</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>

.entry-heading {
    font-size: 2.8rem;
    font-weight: 800;
    letter-spacing: 1px;
    /* background: linear-gradient(90deg, #007bff 0%, #28a745 100%); */
    
    /* -webkit-text-fill-color: transparent; */
    text-shadow: 0 6px 24px rgba(40,123,255,0.10);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 18px;
}
.entry-icon {
    background: linear-gradient(135deg, #e0e7ff 60%, #f0f7ff 100%);
    border-radius: 50%;
    padding: 0.7em;
    box-shadow: 0 4px 16px rgba(0,123,255,0.10);
    font-size: 2.2rem;
    color: #007bff;
    margin-right: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}    
.service-btn {
    text-decoration: none;
}
.service-card {
    background: linear-gradient(135deg, #e0e7ff 0%, #f0f7ff 100%);
    border-radius: 2rem;
    box-shadow: 0 8px 32px rgba(0,0,0,0.10);
    padding: 3.5rem 2rem 2.5rem 2rem;
    transition: box-shadow 0.2s, transform 0.2s;
    text-align: center;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.service-card:hover {
    box-shadow: 0 16px 48px rgba(0,0,0,0.16);
    transform: translateY(-6px) scale(1.03);
    background: linear-gradient(135deg, #d1eaff 0%, #e9f7fe 100%);
}
.icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #007bff 60%, #6bc1ff 100%);
    color: #fff;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    font-size: 2.5rem;
    margin: 0 auto 18px auto;
    box-shadow: 0 4px 16px rgba(0,0,0,0.10);
    transition: background 0.2s;
}
.icon-circle.icon-green {
    background: linear-gradient(135deg, #28a745 60%, #7be495 100%);
}
.service-card h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #222;
}
.service-card p {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 0;
}
.service-badge {
    position: absolute;
    top: 18px;
    right: 18px;
    font-size: 1rem;
    padding: 0.5em 1em;
    border-radius: 1em;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.service-card p {
    font-size: 1.3rem;
    color: #555;
    margin-top: 0.3rem;
    margin-bottom: 0.3rem;
}
</style>
@endpush