@extends('layout.app')

@section('content')

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="page-title-area-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Registration or Login</h1>
                        <p>This will enable you to submit your data and get the predications in just a few clicks.</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-inner">
                            <!-- @if ($errors->any())
                                <div class="alert alert-danger custom-error">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="text-align:center;">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">
                                        <!-- Signin Area Content Start -->
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <!-- @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif -->
                                                            <form id="login-form" method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                                <input type="hidden" name="_form" value="login">
                                                                <input type="email" name="email" placeholder="Enter your Email">
                                                                <input type="password" name="password" placeholder="Password">
                                                                <label><a href="#">Forgot Password?</a></label>
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-7 col-md-6 ml-auto">
                                            <div class="register-form-wrap">
                                                <h3>registration Form</h3>
                                                <div class="register-form">
                                                    <form id="register-form" method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        <input type="hidden" name="_form" value="register">
                                                        <!-- @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif -->

                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">Email</label>
                                                                    <input type="email" class="form-control" id="register_email" name="email">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_password">Password</label>
                                                                    <input type="password" class="form-control" id="register_password" name="password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_password_confirmation">Confirm Password</label>
                                                                    <input type="password" class="form-control" id="register_password_confirmation" name="password_confirmation" required>
                                                                </div>
                                                                

                                                                <div class="form-group">
                                                                    <label for="register_dob">Date of birth</label>
                                                                    <input type="date" class="form-control" id="register_dob" name="dob">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <!-- <div class="form-group">
                                                                    <label for="register_name">Name</label>
                                                                    <input type="text" class="form-control" id="register_name" name="name">
                                                                </div> -->
                                                                <div class="form-group">
                                                                    <label for="register_name">Name</label>
                                                                    <input type="text" class="form-control" id="register_name" name="name">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="gender form-group">
                                                            <label class="g-name d-block">Gender</label>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="register_gender_male" name="gender" value="male" class="custom-control-input">
                                                                <label class="custom-control-label" for="register_gender_male">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="register_gender_female" name="gender" value="female" class="custom-control-input">
                                                                <label class="custom-control-label" for="register_gender_female">Female</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox float-lg-right">
                                                                <!-- <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">GVOP</a> Terms of Service</label> -->
                                                            </div>
                                                            <input type="submit" class="btn btn-reg" value="Register">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->

<style>
    .swal2-popup .nice-select {
        all: unset;
        /* Or */
        display: none !important;
    }
    .swal2-confirm{
        width: 80px;
        font-size:1.2em;
    }
</style>

@push('scripts')
<script>
    document.getElementById('login-form').addEventListener('submit', function () {
        console.log('Login form submitted');
    });

    document.getElementById('register-form').addEventListener('submit', function () {
        console.log('Register form submitted');
    });

    @if ($errors->any())
        let formName = '';
        @if (old('_form') === 'login')
            formName = 'Login';
        @elseif (old('_form') === 'register')
            formName = 'Register';
        @endif

        // let errorMsg = `<ul style="text-align:left;">{!! implode('', $errors->all('<li>:message</li>')) !!}</ul>`;
        let errorMsg = `<ul style="text-align:center;">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>`;

        console.log('Form Name:', formName);
        console.log('Error Message:', errorMsg);

       Swal.fire({
            icon: 'error',
            title: `<span style="color:#d33">${formName} Error</span>`,
            html: `<div style="text-align:center;">${errorMsg}</div>`,
            width: 420,
            padding: '2em',
            background: '#fff',
            customClass: {
                popup: 'swal2-border-radius'
            },
            confirmButtonColor: '#d33',
            confirmButtonText: 'OK',
            allowOutsideClick: false,
        });
    
    @endif
</script>
@endpush
@endsection()
