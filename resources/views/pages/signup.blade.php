@extends('layout.layout4')

@php
$headTitle = 'SignUp';
$header = 'header2';        
@endphp

@section('content')

<!-- Start Sign up Area  -->
<div class="signup-area rainbow-section-gapTop-big" data-black-overlay="2">
    <div class="sign-up-wrapper rainbow-section-gap">
        <div class="sign-up-box bg-flashlight">
            <div class="signup-box-top top-flashlight light-xl">
                <img src="{{ asset('assets/images/logo/boxed-logo.png') }}" alt="sign-up logo">
            </div>
            <div class="separator-animated animated-true"></div>
            <div class="signup-box-bottom">
                <div class="signup-box-content">
                    <h4 class="title">Welcome Back!</h4>
                    <div class="social-btn-grp">
                        <a class="btn-default btn-border" href="#">
                            <span class="icon-left"><img src="{{ asset('assets/images/sign-up/google.png') }}" alt="Google Icon"></span>Login with Google
                        </a>
                        <a class="btn-default btn-border" href="#">
                            <span class="icon-left"><img src="{{ asset('assets/images/sign-up/facebook.png') }}" alt="Google Icon"></span>Login with Facebook
                        </a>
                    </div>
                    <div class="text-social-area">
                        <hr>
                        <span>Or continue with</span>
                        <hr>
                    </div>
                    <form>
                        <div class="input-section mail-section">
                            <div class="icon"><i class="feather-user"></i></div>
                            <input type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="input-section mail-section">
                            <div class="icon"><i class="feather-mail"></i></div>
                            <input type="email" placeholder="Enter email address">
                        </div>
                        <div class="input-section password-section">
                            <div class="icon"><i class="feather-lock"></i></div>
                            <input type="password" placeholder="Create Password">
                        </div>
                        <div class="input-section password-section">
                            <div class="icon"><i class="feather-lock"></i></div>
                            <input type="password" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn-default">Sign Up</button>
                    </form>
                </div>
                <div class="signup-box-footer">
                    <div class="bottom-text">
                        If you have an account <a class="btn-read-more" href="{{ asset('signin') }}"><span>Sign In</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sign up Area  -->

@endsection