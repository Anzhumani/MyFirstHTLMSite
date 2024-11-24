@extends('layout.layout4')

@php
$headTitle = 'Авторизация';
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
                    <h4 class="title">С возвращением!</h4>
                    
                    <div class="text-social-area">
                        <hr>
                        <span>Авторизация</span>
                        <hr>
                    </div>
                    <form>
                        <div class="input-section mail-section">
                            <div class="icon"><i class="feather-mail"></i></div>
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="input-section password-section">
                            <div class="icon"><i class="feather-lock"></i></div>
                            <input type="password" placeholder="Пароль">
                        </div>
                        <button type="submit" class="btn-default">Войти</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Sign up Area  -->

@endsection