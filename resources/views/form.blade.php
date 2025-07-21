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
                        <span class="step-title">Educational</span>
                    </li>
                    <li class="step">
                        <span class="step-number">3</span>
                        <span class="step-title">Preferences</span>
                    </li>
                    <li class="step">
                        <span class="step-number">4</span>
                        <span class="step-title">Submit</span>
                    </li>
                </ol>

                <!-- Form -->
                <form id="stepper-form" method="POST" action="{{ route('api.submit.form') }}">
                    @csrf
                    <!-- Step 1 -->
                    <div class="step-content active-step">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Your Details</h3>
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name<span style="color:red"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="eg; John Smith" required>
                        </div>
                        <div class="mb-4">
                            <label for="father_name" class="block mb-2 text-sm font-medium text-gray-900">Father Name<span style="color:red"> *</span></label>
                            <input type="text" id="father_name" name="father_name" class="form-control" placeholder="eg; Father Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900">Nationality<span style="color:red"> *</span></label>
                            <input type="text" id="nationality" name="nationality" class="form-control" value="Pakistan" required disabled>
                             <!-- <div id="nationality" class="nice-select form-control" tabindex="0" data-required="true">
                                    <span class="current">Loading countries...</span>
                                    <ul class="list"></ul>
                            </div> -->
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
                        <div class="mb-4">
                            <label for="current_country" class="block mb-2 text-sm font-medium text-gray-900">Current Country<span style="color:red"> *</span></label>
                            <input type="text" id="current_country" name="current_country" class="form-control" value="Pakistan" required disabled>
                            <!-- <div id="current_country" class="nice-select form-control" tabindex="0" data-required="true">
                                    <span class="current">Loading countries...</span>
                                    <ul class="list"></ul>
                            </div> -->
                        </div>
                        <div class="mb-4">
                            <label for="highest_education" class="block mb-2 text-sm font-medium text-gray-900">Highest Education<span style="color:red"> *</span> </label>
                            <!-- <input type="text" id="highest_education" name="highest_education" class="form-control" placeholder="eg; Bachelor's" required> -->
                             <select id="highest_education" name="highest_education" class="form-control" required>
                                <option value="">Select Highest Education</option>
                                <option value="Bachelors">Bachelor's</option>
                                <option value="Masters">Master's</option>
                                <option value="PHD">PHD</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Your Age<span style="color:red"> *</span></label>
                            <input type="number" id="age" name="age" class="form-control" placeholder="YYYY" required>
                        </div>
                        


                        <div class="text-right">
                            <button type="button" class="btn btn-primary next-step">Next Step: Educational Info</button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-content">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Educational</h3>
                        <div class="mb-4">
                            <label for="university" class="block mb-2 text-sm font-medium text-gray-900">University/College Name<span style="color:red"> *</span></label>
                            <input type="text" id="university" name="university" class="form-control" placeholder="Your University/College Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="degree" class="block mb-2 text-sm font-medium text-gray-900">Degree Program<span style="color:red"> *</span></label>
                            <input type="text" id="degree" name="degree" class="form-control" placeholder="Bachelor of Science in Computer Science" required>
                        </div>
                        <div class="mb-4">
                            <label for="year-of-passing" class="block mb-2 text-sm font-medium text-gray-900">Year of Passing<span style="color:red"> *</span></label>
                            <input type="number" id="year-of-passing" name="year-of-passing" class="form-control" placeholder="YYYY" required>
                        </div>
                        <div class="mb-4">
                            <label for="cgpa" class="block mb-2 text-sm font-medium text-gray-900">CGPA/Percentage<span style="color:red"> *</span></label>
                            <input type="text" step="2.1" id="cgpa" name="cgpa" class="form-control" placeholder="Your CGPA or Percentage" required>
                        </div>
                        <div class="mb-4">
                            <label for="university-id" class="block mb-2 text-sm font-medium text-gray-900">University ID <span style="color:green;font-size:12px;">(optional)</span></label>
                            <input type="text" id="university-id" name="university-id" class="form-control" placeholder="University ID" optional>
                        </div>
                        <div class="mb-4">
                            <label for="field_study" class="block mb-2 text-sm font-medium text-gray-900">Field Of Study<span style="color:red"> *</span></label>
                            <input type="text" id="field_study" name="field_study" class="form-control" placeholder="eg; Computer Science" required>
                        </div>
                        <div class="mb-4">
                            <label for="ielts_score" class="block mb-2 text-sm font-medium text-gray-900">IELTS Score<span style="color:red"> *</span></label>
                            <!-- <input type="text" id="ielts_score" name="ielts_score" class="form-control" placeholder="eg; 6.5" required> -->
                            <select id="ielts_score" name="ielts_score" class="form-control" required>
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
                            <label for="document" class="block mb-2 text-sm font-medium text-gray-900">Upload Documents <span style="color:green;font-size:12px;">(optional)</span></label>
                            <input type="file" id="document" name="document" class="form-control">
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary prev-step">Previous</button>
                            <button type="button" class="btn btn-primary next-step">Next Step: Preferences</button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-content">
                    <h3 class="mb-4 text-lg font-medium text-gray-900">Preferences</h3>
                        <div class="mb-4">
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Preferred/Applied Country<span style="color:red"> *</span></label>
                            <!-- <input type="text" id="country" name="country" class="form-control" placeholder="Country name" required> -->
                             <!-- <div id="country" class="nice-select form-control" tabindex="0" data-required="true">
                                    <span class="current">Loading countries...</span>
                                    <ul class="list"></ul>
                            </div> -->
                            <select id="country" name="country" class="form-control" required>
                                <option value="">Select Country</option>
                                <option value="Canada">Canada</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="Australia">Australia</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="China">China</option>
                                <option value="Italy">Italy</option>
                                <option value="France">France</option>
                                <option value="Switzerland">Switzerland</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="visa-type" class="block mb-2 text-sm font-medium text-gray-900">Visa Type<span style="color:red"> *</span></label>
                            <select id="visa-type" name="visa-type" class="form-control" required>
                                <option value="">Select Visa Type</option>
                                <option value="Student">Student Visa</option>
                                <option value="Work">Work Visa</option>
                                <option value="Immigration">Permanent Immigration</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="preferences" class="block mb-2 text-sm font-medium text-gray-900">Additional <span style="color:green;font-size:12px;">(optional)</span></label>
                            <textarea id="preferences" name="preferences" class="form-control" rows="4" placeholder="Any other preferences related to country or study/immigration"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="previous_travel_history" class="block mb-2 text-sm font-medium text-gray-900">Previous Travel History<span style="color:red"> *</span></label>
                            <select id="previous_travel_history" name="previous_travel_history" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!-- <div class="mb-4">
                            <label for="reasons" class="block mb-2 text-sm font-medium text-gray-900">Reasons for Choosing Country</label>
                            <textarea id="reasons" name="reasons" class="form-control" rows="4" placeholder="Why you chose this country for study/immigration?" required></textarea>
                        </div> -->
                        <div class="mb-4">
                            <label for="budget" class="block mb-2 text-sm font-medium text-gray-900">Budget (Annual)<span style="color:red"> *</span></label>
                            <input type="number" id="budget" name="budget" class="form-control" placeholder="Enter your budget in USD" required>
                        </div>
                        <div class="mb-4">
                            <label for="bank_statment_amount" class="block mb-2 text-sm font-medium text-gray-900">Bank Statment Amount<span style="color:red"> *</span></label>
                            <input type="number" id="bank_statment_amount" name="bank_statment_amount" class="form-control" placeholder="Enter your Bank Statment in USD" required>
                        </div>
                        <div class="mb-4">
                            <label for="sponsership_type" class="block mb-2 text-sm font-medium text-gray-900">Sponsorship Type<span style="color:red"> *</span></label>
                            <!-- <input type="text" id="sponsership_type" name="sponsership_type" class="form-control" placeholder="Enter your Sponsership Type" required> -->
                             <select id="sponsership_type" name="sponsership_type" class="form-control" required>
                                <option value="">Select Sponsership Type</option>
                                <option value="Self">Self</option>
                                <option value="Sponsored">Sponsored</option>
                                <!-- <option value="PHD">PHD</option> -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="language-preference" class="block mb-2 text-sm font-medium text-gray-900">Preferred Language of Instruction <span style="color:green;font-size:12px;">(optional)</span></label>
                            <select id="language-preference" name="language-preference" class="form-control">
                                <option value="">Select Language</option>
                                <option value="english">English</option>
                                <option value="chinese">Chinese</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="text-right">
                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                        <button type="button" class="btn btn-primary next-step">Next Step: Agree</button>
                        </div>
                    </div>

                    <!-- Step 4 -->
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

                    <!-- Result Container -->
                    <!-- <div id="result-container" style="display: none; margin-top: 20px; text-align: center;">
                        <div id="prediction-card" class="card shadow p-4 mb-4" style="max-width: 500px; margin: 0 auto; border-radius: 1rem;">
                            <div id="prediction-icon" style="font-size: 3rem; margin-bottom: 10px;"></div>
                            <h4 id="prediction-result" class="text-success mb-2"></h4>
                            <p id="approval-probability" class="text-info mb-0"></p>
                        </div>
                        <div class="row justify-content-center" id="consultancy-links" style="gap: 20px;">
                          
                        </div>
                    </div> -->

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
        max-width: 350px; /* Adjust card size for smaller screens */
        padding: 25px;
    }

    .step-icon {
        font-size: 45px;  /* Adjust icon size on smaller screens */
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
        max-width: 320px; /* Adjust to smaller screens */
    }
    
    .step-icon {
        font-size: 40px;  /* Smaller icons on very small screens */
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
        max-height: 300px;  /* Set a max height for the dropdown */
        overflow-y: auto;   /* Enable vertical scrolling */
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

    /* .card {
    background: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 1rem;
    box-shadow: 0 4px 16px rgba(0,0,0,0.07);
    padding: 2rem;
    margin-bottom: 1.5rem;
}
.consultancy-card {
    background: #f8f9fa;
    border-radius: 0.75rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    padding: 1.5rem 1rem;
    text-align: center;
    width: 220px;
    transition: box-shadow 0.2s;
    display: inline-block;
}
.consultancy-card:hover {
    box-shadow: 0 6px 24px rgba(0,0,0,0.10);
    background: #e9f7fe;
}
.consultancy-link {
    color: #007bff;
    text-decoration: none;
    font-weight: 600;
}
.consultancy-link:hover {
    text-decoration: underline;
} */
</style>
@endpush

@push('scripts')
<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     const steps = document.querySelectorAll('.step-content');
    //     const nextBtns = document.querySelectorAll('.next-step');
    //     const prevBtns = document.querySelectorAll('.prev-step');

    //     function showStep(stepIndex) {
    //         steps.forEach((step, index) => {
    //             step.classList.toggle('active-step', index + 1 === stepIndex);
    //         });

    //         document.querySelectorAll('.step').forEach((step, index) => {
    //             step.classList.toggle('active', index + 1 === stepIndex);
    //         });
    //     }

    //     nextBtns.forEach(btn => btn.addEventListener('click', () => {
    //         const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
    //         showStep(currentStep + 1);
    //     }));

    //     prevBtns.forEach(btn => btn.addEventListener('click', () => {
    //         const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
    //         showStep(currentStep - 1);
    //     }));

    //     showStep(1); // Show the first step initially
    // });

    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.step-content');
        const nextBtns = document.querySelectorAll('.next-step');
        const prevBtns = document.querySelectorAll('.prev-step');
        const form = document.getElementById('stepper-form');

        // function showStep(stepIndex) {
        //     steps.forEach((step, index) => {
        //         step.classList.toggle('active-step', index + 1 === stepIndex);
        //     });

        //     document.querySelectorAll('.step').forEach((step, index) => {
        //         step.classList.toggle('active', index + 1 === stepIndex);
        //     });
        // }

        // nextBtns.forEach(btn => btn.addEventListener('click', () => {
        //     const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
        //     showStep(currentStep + 1);
        // }));

        // prevBtns.forEach(btn => btn.addEventListener('click', () => {
        //     const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
        //     showStep(currentStep - 1);
        // }));

        // showStep(1); // Show the first step initially

        function showStep(stepIndex) {
        steps.forEach((step, index) => {
            const isActive = index + 1 === stepIndex;
            step.classList.toggle('active-step', isActive);

            // Add or remove 'required' attribute for inputs in the current step
            // const inputs = step.querySelectorAll('input, select, textarea');
            // inputs.forEach(input => {
            //     if (isActive) {
            //         input.setAttribute('required', 'required');
            //     } else {
            //         input.removeAttribute('required');
            //     }
            // });
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
                input.classList.add('is-invalid'); // Optional: add a class for styling invalid fields
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (allValid) {
            showStep(currentStepIndex + 2); // Move to next step
        } else {
            swal.fire({
                title: 'Validation Error',
                text: 'Please fill out all required fields correctly.',
                icon: 'error',
                confirmButtonText: 'OK',
                allowOutsideClick: false,
                
            });
            // Optionally, scroll to the first invalid input
            const firstInvalid = currentStep.querySelector('.is-invalid');
            if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }


        // const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
        // showStep(currentStep + 1);
    }));

    prevBtns.forEach(btn => btn.addEventListener('click', () => {
        const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
        showStep(currentStep - 1);
    }));

    showStep(1); // Show the first step initially

    // Fetch countries for nationality dropdown
    // const niceSelectContainer = document.getElementById('nationality');
    // const countryList = niceSelectContainer.querySelector('ul');

    // // Fetch the country data
    // fetch('https://restcountries.com/v3.1/all?fields=name')
    //     .then(response => response.json())
    //     .then(data => {
    //         // Clear the loading message
    //         niceSelectContainer.querySelector('.current').textContent = 'Select your nationality';
    //         countryList.innerHTML = '';  // Clear any existing list items

    //         // Extract and sort country names
    //         const countryNames = data
    //             .map(country => country.name?.common)
    //             .filter(Boolean) // Remove null or undefined values
    //             .sort((a, b) => a.localeCompare(b));

    //         // Add country options as list items
    //         countryNames.forEach(country => {
    //             const li = document.createElement('li');
    //             li.classList.add('option');
    //             li.setAttribute('data-value', country);
    //             li.textContent = country;
    //             countryList.appendChild(li);
    //         });

    //         // Reinitialize nice-select to update the UI
    //         $(niceSelectContainer).niceSelect('update');
    //     })
    //     .catch(error => {
    //         console.error('Error fetching countries:', error);
    //         niceSelectContainer.querySelector('.current').textContent = 'Failed to load countries';
    //     });

// const nationalityContainer = document.getElementById('nationality');
// const countryContainer = document.getElementById('country');
// const currentCountryContainer = document.getElementById('current_country');

// // Fetch country data and populate the dropdowns
// const fetchCountriesAndPopulate = (container) => {
//     const countryList = container.querySelector('ul.list');

//     // Fetch the country data
//     fetch('https://restcountries.com/v3.1/all?fields=name')
//         .then(response => response.json())
//         .then(data => {
//             // Clear the loading message
//             container.querySelector('.current').textContent = 'Select your country';
//             countryList.innerHTML = '';  // Clear any existing list items

//             // Extract and sort country names
//             const countryNames = data
//                 .map(country => country.name?.common)
//                 .filter(Boolean) // Remove null or undefined values
//                 .sort((a, b) => a.localeCompare(b)); // Sort alphabetically

//             // Add country options as list items
//             countryNames.forEach(country => {
//                 const li = document.createElement('li');
//                 li.classList.add('option');
//                 li.setAttribute('data-value', country);
//                 li.textContent = country;
//                 countryList.appendChild(li);
//             });

//             // Reinitialize nice-select to update the UI
//             $(container).niceSelect('update');
//         })
//         .catch(error => {
//             console.error('Error fetching countries:', error);
//             container.querySelector('.current').textContent = 'Failed to load countries';
//         });
// };

// // Fetch and populate countries for both Preferred/Applied Country and Current Country
// fetchCountriesAndPopulate(countryContainer);
// fetchCountriesAndPopulate(currentCountryContainer);
// fetchCountriesAndPopulate(nationalityContainer);

// const validateStep = () => {
//     const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
//     let isValid = true;

//     // Get the current step container
//     const currentStepContainer = steps[currentStep - 1];

//     // Check if the current step has the nationality dropdown and if it's selected
//     if (currentStepContainer.querySelector('#nationality')) {
//         const nationalityContainer = document.getElementById('nationality');
//         const selectedNationality = nationalityContainer.querySelector('.current').textContent;

//         // If no country is selected, mark it as invalid
//         if (selectedNationality === 'Loading countries...' || selectedNationality === 'Select your nationality') {
//             isValid = false;
//             nationalityContainer.classList.add('error');  // Optional: add error class for styling
//             alert('Please select your nationality.');
//         } else {
//             nationalityContainer.classList.remove('error');  // Remove error class if valid
//         }
//     }

//     // You can add more validation for other fields in the current step here...

//     return isValid;
// };


    // const resultContainer = document.getElementById('result-container');
    // const predictionResult = document.getElementById('prediction-result');
    // const approvalProbability = document.getElementById('approval-probability');
    // const predictionIcon = document.getElementById('prediction-icon');
    // const consultancyLinks = document.getElementById('consultancy-links');

    // function renderConsultancyCards() {
    //     // Example consultancies (replace with your real data/links)
    //     const consultancies = [
    //         { 
    //         name: "VisaPro Experts", 
    //         link: "https://example.com/consultancy1",
    //         img: "https://randomuser.me/api/portraits/men/32.jpg"
    //         },
    //         { 
    //             name: "Global Study Hub", 
    //             link: "https://example.com/consultancy2",
    //             img: "https://randomuser.me/api/portraits/women/44.jpg"
    //         },
    //         { 
    //             name: "EduWorld Consultants", 
    //             link: "https://example.com/consultancy3",
    //             img: "https://randomuser.me/api/portraits/men/65.jpg"
    //         },
    //         { 
    //             name: "ImmigrateNow", 
    //             link: "https://example.com/consultancy4",
    //             img: "https://randomuser.me/api/portraits/women/68.jpg"
    //         }
    //     ];
    //     consultancyLinks.innerHTML = consultancies.map(c => `
    //         <div class="consultancy-card">
    //         <img src="${c.img}" alt="${c.name}" style="width:70px;height:70px;border-radius:50%;object-fit:cover;margin-bottom:10px;box-shadow:0 2px 8px rgba(0,0,0,0.08);">
    //         <div style="font-weight:600; margin-bottom:6px;">${c.name}</div>
    //         <a class="consultancy-link" href="${c.link}" target="_blank">Visit Consultancy</a>
    //     </div>
    //     `).join('');
    // }
    const overlaySpinner = document.getElementById('form-overlay-spinner');
        // Handle form submission
        form.addEventListener('submit', async function (event) {
            event.preventDefault(); // Prevent default form submission
            overlaySpinner.style.display = 'flex';

            const formData = new FormData(form);
            const rawData = Object.fromEntries(formData.entries());

            // Get values from nice-select dropdowns
            // const nationality = document.querySelector('#nationality .current')?.textContent?.trim();
            // const current_country = document.querySelector('#current_country .current')?.textContent?.trim();
            // const applied_country = document.querySelector('#country .current')?.textContent?.trim();

            const data = {
            name: rawData.name || "name",
            email: rawData.email || "admin@email.com",
            age: parseInt(rawData.age) || 27, // Default to 27 if missing
            gender: rawData.gender,
            nationality: rawData.nationality || "Pakistan", //(nationality && nationality !== 'Loading countries...' && nationality !== 'Select your nationality') ? nationality : "Pakistan"
            current_country:  rawData.current_country || "Pakistan", //(current_country && current_country !== 'Loading countries...' && current_country !== 'Select your country') ? current_country : "UAE",
            highest_education: rawData.highest_education || "Bachelors",
            field_of_study: rawData.field_study || "Computer Science",
            gpa: parseFloat(rawData.cgpa) || 3.5,
            ielts_score: parseFloat(rawData.ielts_score) || 7.0,
            visa_type: rawData['visa-type'] || "Student",
            applied_country:  rawData.country || "Canada", //(applied_country && applied_country !== 'Loading countries...' && applied_country !== 'Select your country') ? applied_country : "Canada",
            previous_travel_history: rawData.previous_travel_history || "No",
            bank_statement_amount: parseFloat(rawData.bank_statment_amount) || 15000,
            sponsorship_type: rawData.sponsership_type || "Self",
        };

        // Show the spinner
        
        // const resultContainer = document.getElementById('result-container');
        // const predictionResult = document.getElementById('prediction-result');
        // const approvalProbability = document.getElementById('approval-probability');

        
        // resultContainer.style.display = 'none';
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token
                    },
                    body: JSON.stringify(data),
                });

                console.log("Data Passed To API: ",data);

                const result = await response.json();

                if (response.ok) {
                    overlaySpinner.style.display = 'none';
                    // Display the prediction result
                    // predictionResult.textContent = `Prediction: ${result.prediction}`;
                    // approvalProbability.textContent = `Approval Probability: ${(result.approval_probability * 100).toFixed(2)}%`;
                    // resultContainer.style.display = 'block';
                     window.location.href = `/result?prediction=${encodeURIComponent(result.prediction)}&prob=${encodeURIComponent(result.approval_probability)}`;
                    // const isApproved = result.prediction && result.prediction.toLowerCase().includes('approve');
                    // predictionIcon.innerHTML = isApproved
                    //     ? '<span style="color:#28a745;">&#10004;</span>' // Green check
                    //     : '<span style="color:#dc3545;">&#10006;</span>'; // Red cross
                    // predictionResult.textContent = `Prediction: ${result.prediction}`;
                    // approvalProbability.textContent = `Approval Probability: ${(result.approval_probability * 100).toFixed(2)}%`;
                    // renderConsultancyCards();
                    // resultContainer.style.display = 'block';
                    
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
