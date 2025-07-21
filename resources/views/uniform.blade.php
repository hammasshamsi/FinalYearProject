@extends('layout.app')

@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="page-title-area-fillform">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h3">Fill Out This Form</h1>
                    <p>Use this stepper form to provide your details in an organized manner.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Stepper Form Start ==-->
<section id="stepper-form-area" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Stepper Progress -->
                <ol class="stepper-form">
                    <li class="step active">
                        <span class="step-number">1</span>
                        <span class="step-title">Details</span>
                    </li>
                    <li class="step">
                        <span class="step-number">2</span>
                        <span class="step-title">Preferences</span>
                    </li>
                    <li class="step">
                        <span class="step-number">3</span>
                        <span class="step-title">Submit</span>
                    </li>
                </ol>

                <!-- Form -->
                <form id="stepper-form" method="POST" action="{{ route('api.university.submit') }}">
                    @csrf
                    <!-- Step 1 -->
                    <div class="step-content active-step">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Your Details</h3>
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Full Name<span style="color:red"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="eg; John Smith" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900">Nationality<span style="color:red"> *</span></label>
                            <input type="text" id="nationality" name="nationality" class="form-control" value="Pakistan" required disabled>
                        </div>
                        <div class="mb-4">
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender<span style="color:red"> *</span></label>
                            <select id="gender" name="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="2.0">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address<span style="color:red"> *</span></label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="eg; Phase 7 ext, Defence housing authority" required>
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City<span style="color:red"> *</span></label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="eg; Karachi" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email<span style="color:red"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@company.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="cell_number" class="block mb-2 text-sm font-medium text-gray-900">Number<span style="color:red"> *</span></label>
                            <input type="text" id="cell_number" name="cell_number" class="form-control" placeholder="eg; 03xx-xxxxxxx" required>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn btn-primary next-step">Next Step: Preferences</button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-content">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Preferences</h3>

                        <div class="alert alert-success mt-4 preference_alert" style="border-left: 5px solid #00897b ; padding: 15px; background-color: #e1ffe6ff;">
                            <h4 class="text-success fs-4 fs-md-3 fs-lg-2" style="font-weight: bold; color: #2e7d32;">
                                Your Preferences Matter!
                            </h4>
                            <p style="margin: 0; font-size: 14px;color: #555; font-style:italic;">
                                Please note! This section is all about YOU! The details you provide here will help our prediction model understand your unique preferences. Based on this information, we’ll suggest universities that are the best match for your needs.
                            </p>
                        </div>

                        <div class="mb-4">
                            <label for="field" class="block mb-2 text-sm font-medium text-gray-900">Field OR Specialization<span style="color:red"> *</span></label>
                            <input type="text" id="field" name="field" class="form-control" placeholder="Enter Field eg; Artificial Intelligence" required>
                        </div>
                        <div class="mb-4">
                            <label for="degree_level" class="block mb-2 text-sm font-medium text-gray-900">Degree Level<span style="color:red"> *</span> </label>
                             <select id="degree_level" name="degree_level" class="form-control" required>
                                <option value="">Select Highest Education</option>
                                <option value="Bachelor">Bachelor's</option>
                                <option value="Master">Master's</option>
                                <option value="PHD">PHD</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="avg_gpa_requirement" class="block mb-2 text-sm font-medium text-gray-900">Average GPA Requirement<span style="color:red"> *</span></label>
                            <input type="text" step="2.1" id="avg_gpa_requirement" name="avg_gpa_requirement" class="form-control" placeholder="Enter GPA" required>
                        </div>
                        <div class="mb-4">
                            <label for="ielts_score_req" class="block mb-2 text-sm font-medium text-gray-900">IELTS Score Requirement<span style="color:red"> *</span></label>
                            <select id="ielts_score_req" name="ielts_score_req" class="form-control" required>
                                <option value="">Select IELTS Score</option>
                                <option value="5.5">5.5</option>
                                <option value="6.0">6.0</option>
                                <option value="6.5">6.5</option>
                                <option value="7.0">7.0</option>
                                <option value="7.5">7.5</option>
                                <option value="8.0">8.0</option>
                                <option value="8.5">8.5</option>
                                <option value="9.0">9.0</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tuitionfee" class="block mb-2 text-sm font-medium text-gray-900">Tuition Fee USD <span style="color:red;">*</span></label>
                            <input type="number" id="tuitionfee" name="tuitionfee" class="form-control" placeholder="Enter Desired Tuition Fees in USD" Required>
                        </div>
                        <div class="mb-4">
                            <label for="livingcost" class="block mb-2 text-sm font-medium text-gray-900">Living Cost Per Year USD<span style="color:red"> *</span></label>
                            <input type="number" id="livingcost" name="livingcost" class="form-control" placeholder="Enter desired Living Cost Per Year in USD " required>
                        </div>
                        <div class="mb-4">
                            <label for="scholarship_avail" class="block mb-2 text-sm font-medium text-gray-900">Scholarship Available<span style="color:red"> *</span></label>
                            <select id="scholarship_avail" name="scholarship_avail" class="form-control" required>
                                <option value="">Select Scholarship Preference</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="region" class="block mb-2 text-sm font-medium text-gray-900">Desired Region<span style="color:red"> *</span></label>
                            <select id="region" name="region" class="form-control" required>
                                <option value="">Select Region Preference</option>
                                <option value="EU">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="North America">North America</option>
                                <option value="Oceania">Oceania</option>
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary prev-step">Previous</button>
                            <button type="button" class="btn btn-primary next-step">Next Step: Submit</button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-content agree-checkboxes">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Agree and Submit Information<span style="color:red"> *</span></h3>
                        <p><input type="checkbox" id="terms" name="terms" required><span></span> I have read and agree to the <a href="#">Terms and Condition</a></p>
                        <p><input type="checkbox"  id="privacy" name="privacy" required><span></span> I agree to the collection, storage, and processing of my personal data as described in the <a href="#">Privacy Policy</a></p>
                        <p><input type="checkbox" id="third_party" name="third_party" required><span></span> I consent to my data being shared with trusted third-party partners if needed</p>
                        <p><input type="checkbox" id="visa_analysis" name="visa_analysis" required><span></span> I consent to my data being used for visa prediction analysis and recommendations.</p>

                        <!-- Disclaimer Section -->
                        <div class="alert alert-warning mt-4" style="border-left: 5px solid #ffc107 ; padding: 15px; background-color: #fff8e1;">
                            <h4 class="text-warning" style="font-weight: bold;">Disclaimer</h4>
                            <p style="margin: 0; font-size: 14px;">
                                Please note that our predictions are based on AI-powered analysis and are not 100% accurate. 
                                We do not guarantee visa approval or certainty, as the final decision lies with the respective immigration authorities.
                            </p>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn btn-secondary prev-step">Previous</button>
                            <button type="submit" class="btn btn-success">Agree and Submit</button>
                        </div>
                    </div>
                    <!-- Spinner -->
                    <!-- Overlay Spinner -->
                    <div id="form-overlay-spinner" style="display:none;">
                        <div class="overlay-bg"></div>
                        <div class="overlay-spinner">
                            <div class="spinner-border text-primary" role="status" style="width:4rem;height:4rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div style="margin-top:1rem;font-weight:600;">Processing...</div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!--== Stepper Form End ==-->

@endsection

@push('styles')
<style>
    .form-control {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 0.5rem;
        padding: 0.75rem;
        width: 100%;
    }

    .stepper-form {
        display: flex;
        justify-content: space-between;
        padding: 0;
        list-style: none;
        gap: 20px;
    }
    
    @media (max-width: 1024px) {
        .stepper-form {
            gap: 15px;
            
        }

        .step {
            width: 220px;
        }
}

@media (max-width: 768px) {
    .stepper-form {
        flex-direction: row;
        align-items: center;
        gap: 25px;
    }

    .step {
        width: 100%;
        max-width: 350px; 
        padding: 25px;
    }

    .step-icon {
        font-size: 45px;  
    }

    .step-content h3 {
        font-size: 18px;
    }

    .step-content p {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .stepper-form {
        flex-direction: column;
        gap: 20px;
    }

    .step {
        width: 100%;
        max-width: 320px; 
    }
    
    .step-icon {
        font-size: 40px;
    }
}

    .step {
        flex: 1;
        text-align: center;
    }

    .step.active .step-number {
        background-color: #007bff;
        color: white;
    }

    .step-number {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        background-color: #f3f3f3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .step-content {
        display: none;
    }

    .active-step {
        display: block;
    }

    .btn {
        padding: 0.5rem 1.5rem;
        font-size: 1.2rem;
        margin-top:20px;
    }

    #form-overlay-spinner {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}
#form-overlay-spinner .overlay-bg {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(255,255,255,0.85);
    z-index: 1;
}
#form-overlay-spinner .overlay-spinner {
    position: relative;
    z-index: 2;
    text-align: center;
}

    #result-container h4 {
        font-size: 1.5rem;
        font-weight: bold;
    }

    #result-container p {
        font-size: 1.2rem;
    }
    .nice-select.open .list {
        max-height: 300px;  
        overflow-y: auto;   
    }
    .nice-select .current {
        color:black;
    }
    .nice-select{
        padding-top:0px !important;
        height:36px;
        margin-bottom:6px;
        font-size:13px;
    }
    .swal2-confirm{
        width: 80px !important;
    }
    #swal2-title{
        height: 65px !important;
    }
    .mb-4 input{
        height:36px;
        font-size:13px;
    }
</style>
@endpush

@push('scripts')
<script>

    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.step-content');
        const nextBtns = document.querySelectorAll('.next-step');
        const prevBtns = document.querySelectorAll('.prev-step');
        const form = document.getElementById('stepper-form');

        function showStep(stepIndex) {
        steps.forEach((step, index) => {
            const isActive = index + 1 === stepIndex;
            step.classList.toggle('active-step', isActive);

        });

        document.querySelectorAll('.step').forEach((step, index) => {
            step.classList.toggle('active', index + 1 === stepIndex);
        });
    }

    nextBtns.forEach(btn => btn.addEventListener('click', () => {
        const currentStepIndex = [...steps].findIndex(step => step.classList.contains('active-step'));
        const currentStep = steps[currentStepIndex];
        const requiredInputs = currentStep.querySelectorAll('input[required], select[required], textarea[required]');
        let allValid = true;

        requiredInputs.forEach(input => {
            if (
                (input.type === 'checkbox' && !input.checked) ||
                (input.type !== 'checkbox' && !input.value.trim())
            ) {
                allValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (allValid) {
            showStep(currentStepIndex + 2); // next step move
        } else {
            swal.fire({
                title: 'Validation Error',
                text: 'Please fill out all required fields correctly.',
                icon: 'error',
                confirmButtonText: 'OK',
                allowOutsideClick: false,
                
            });
            const firstInvalid = currentStep.querySelector('.is-invalid');
            if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }));

    prevBtns.forEach(btn => btn.addEventListener('click', () => {
        const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
        showStep(currentStep - 1);
    }));

    showStep(1); // show first step initially
    
    const overlaySpinner = document.getElementById('form-overlay-spinner');
        // Handle form submission
        form.addEventListener('submit', async function (event) {
            event.preventDefault(); // Prevent default form submission
            overlaySpinner.style.display = 'flex';

            const formData = new FormData(form);
            const rawData = Object.fromEntries(formData.entries());

            const data = {
                field: rawData.field,
                degree_level: rawData.degree_level,
                avg_gpa_requirement: parseFloat(rawData.avg_gpa_requirement),
                ielts_score_req: parseFloat(rawData.ielts_score_req),
                tuitionfee: parseFloat(rawData.tuitionfee),
                livingcost: parseFloat(rawData.livingcost),
                scholarship_avail: rawData.scholarship_avail,
                region: rawData.region
            };

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify(data),
                });

                console.log("Data Passed To API: ",data);

                const result = await response.json();

                if (response.ok) {
                    overlaySpinner.style.display = 'none';
                    window.location.href = `/university-result?recommendations=${encodeURIComponent(JSON.stringify(result.recommendations))}`;
                    
                } else {
                    overlaySpinner.style.display = 'none';
                    alert('Failed to submit the form.');
                    console.error(result); // Handle error response
                }
            } catch (error) {
                overlaySpinner.style.display = 'none';
                console.error('Error:', error);
                alert('An error occurred while submitting the form.');
            }
        });
    });
</script>
@endpush
