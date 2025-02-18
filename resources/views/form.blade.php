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
                <form id="stepper-form" method="POST" action="#">
                    @csrf
                    <!-- Step 1 -->
                    <div class="step-content active-step">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Your Details</h3>
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="eg; John Smith" required>
                        </div>
                        <div class="mb-4">
                            <label for="father_name" class="block mb-2 text-sm font-medium text-gray-900">Father Name</label>
                            <input type="text" id="father_name" name="father_name" class="form-control" placeholder="eg; Father Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="eg; Pakistan" required>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="eg; Phase 7 ext, Defence housing authority" required>
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="eg; Karachi" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@company.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="cell_number" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="text" id="cell_number" name="cell_number" class="form-control" placeholder="eg; 03xx-xxxxxxx" required>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary next-step">Next Step: Educational Info</button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-content">
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Educational</h3>
                        <div class="mb-4">
                            <label for="university" class="block mb-2 text-sm font-medium text-gray-900">University/College Name</label>
                            <input type="text" id="university" name="university" class="form-control" placeholder="Your University/College Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="degree" class="block mb-2 text-sm font-medium text-gray-900">Degree Program</label>
                            <input type="text" id="degree" name="degree" class="form-control" placeholder="Bachelor of Science in Computer Science" required>
                        </div>
                        <div class="mb-4">
                            <label for="year-of-passing" class="block mb-2 text-sm font-medium text-gray-900">Year of Passing</label>
                            <input type="number" id="year-of-passing" name="year-of-passing" class="form-control" placeholder="YYYY" required>
                        </div>
                        <div class="mb-4">
                            <label for="cgpa" class="block mb-2 text-sm font-medium text-gray-900">CGPA/Percentage</label>
                            <input type="text" id="cgpa" name="cgpa" class="form-control" placeholder="Your CGPA or Percentage" required>
                        </div>
                        <div class="mb-4">
                            <label for="university-id" class="block mb-2 text-sm font-medium text-gray-900">University ID (Optional)</label>
                            <input type="text" id="university-id" name="university-id" class="form-control" placeholder="University ID" optional>
                        </div>
                        <div class="mb-4">
                            <label for="document" class="block mb-2 text-sm font-medium text-gray-900">Upload Documents</label>
                            <input type="file" id="document" name="document" class="form-control" required>
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
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Preferred Country</label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="Country name" required>
                        </div>
                        <div class="mb-4">
                            <label for="visa-type" class="block mb-2 text-sm font-medium text-gray-900">Visa Type</label>
                            <select id="visa-type" name="visa-type" class="form-control" required>
                                <option value="">Select Visa Type</option>
                                <option value="study">Study Visa</option>
                                <option value="work">Work Visa</option>
                                <option value="immigration">Permanent Immigration</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="preferences" class="block mb-2 text-sm font-medium text-gray-900">Additional Preferences</label>
                            <textarea id="preferences" name="preferences" class="form-control" rows="4" placeholder="Any other preferences related to country or study/immigration" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="reasons" class="block mb-2 text-sm font-medium text-gray-900">Reasons for Choosing Country</label>
                            <textarea id="reasons" name="reasons" class="form-control" rows="4" placeholder="Why you chose this country for study/immigration?" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="budget" class="block mb-2 text-sm font-medium text-gray-900">Budget (Annual)</label>
                            <input type="number" id="budget" name="budget" class="form-control" placeholder="Enter your budget in USD" required>
                        </div>
                        <div class="mb-4">
                            <label for="language-preference" class="block mb-2 text-sm font-medium text-gray-900">Preferred Language of Instruction</label>
                            <select id="language-preference" name="language-preference" class="form-control" required>
                                <option value="">Select Language</option>
                                <option value="english">English</option>
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
                        <h3 class="mb-4 text-lg font-medium text-gray-900">Agree and Submit Information*</h3>
                        <p><input type="checkbox"><span></span> I have read and agree to the <a href="#">Terms and Condition</a></p>
                        <p><input type="checkbox"><span></span> I agree to the collection, storage, and processing of my personal data as described in the <a href="#">Privacy Policy</a></p>
                        <p><input type="checkbox"><span></span> I consent to my data being shared with trusted third-party partners if needed</p>
                        <p><input type="checkbox"><span></span> I consent to my data being used for visa prediction analysis and recommendations.</p>
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary prev-step">Previous</button>
                            <button type="submit" class="btn btn-success">Agree and Submit</button>
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
    
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.step-content');
        const nextBtns = document.querySelectorAll('.next-step');
        const prevBtns = document.querySelectorAll('.prev-step');

        function showStep(stepIndex) {
            steps.forEach((step, index) => {
                step.classList.toggle('active-step', index + 1 === stepIndex);
            });

            document.querySelectorAll('.step').forEach((step, index) => {
                step.classList.toggle('active', index + 1 === stepIndex);
            });
        }

        nextBtns.forEach(btn => btn.addEventListener('click', () => {
            const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
            showStep(currentStep + 1);
        }));

        prevBtns.forEach(btn => btn.addEventListener('click', () => {
            const currentStep = [...steps].findIndex(step => step.classList.contains('active-step')) + 1;
            showStep(currentStep - 1);
        }));

        showStep(1); // Show the first step initially
    });
</script>
@endpush
