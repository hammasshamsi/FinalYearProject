@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading-hover mb-5">Recommended Universities</h2>
                @if(count($recommendations))
                    <div class="row">
                        @foreach($recommendations as $uni)

                             @php
                                $fieldImages = [
                                    'Engineering' => 'engineering.jpg',
                                    'Medicine' => 'medicine.jpg',
                                    'Artificial Intelligence' => 'ai.jpg',
                                    'Business Analytics' => 'ba.jpg',
                                    'Data Science' => 'ds.jpg',
                                    'Physics' => 'physics.jpg',
                                    'Computer Science' => 'cs.jpg',
                                    
                                ];
                                $image = $fieldImages[$uni['Field_Specialization']] ?? 'g5.jpg';
                            @endphp


                            <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
                                <div class="service-card position-relative shadow-lg">
                                    <!-- Image or Icon in Card -->
                                    <img src="{{ asset('assets/img/field/' . $image) }}" 
                                         alt="{{ $uni['University'] ?? 'University' }}" 
                                         class="card-img-top rounded-top" style="height: 200px; margin-top:10px; object-fit: cover;">

                                    <div class="card-body">
                                        <h3 class="mt-4 mb-2">{{ $uni['University'] ?? 'University' }}</h3>
                                        @if($uni['Similarity'] >= 0.50)
                                            <span class="badge badge-pill badge-primary service-badge">High Similarity</span>
                                        @endif
                                         <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Country:</strong> {{ $uni['Country'] ?? 'N/A' }}</p>
                                                <p><strong>Degree Level:</strong> {{ $uni['Degree_Level'] ?? 'N/A' }}</p>
                                                <p><strong>Field:</strong> {{ $uni['Field_Specialization'] ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Tuition Fee:</strong> ${{ number_format($uni['Tuition_Fee_USD'] ?? 0) }}</p>
                                                <p><strong>Living Cost/Year:</strong> ${{ number_format($uni['Living_Cost_Per_Year_USD'] ?? 0) }}</p>
                                                <p><strong>Similarity:</strong> {{ number_format($uni['Similarity'] * 100, 1) }}%</p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info">No recommendations found.</div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>

.section-heading-hover {
    font-size: 3rem;            
    font-weight: 700;           
    color: #007bff;            
    text-align: center; 
    position: relative;
    transition: transform 0.3s ease;
    transform: translateY(-5px);
    
}

.section-heading-hover::after {
    content: '';
    display: block;
    width: 50%;
    height: 4px;
    background: #007bff;
    margin: 10px auto 0;
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