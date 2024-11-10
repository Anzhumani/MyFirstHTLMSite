@extends('layout.layout4')

@php
$headTitle = 'Pricing';
$header = 'header2';
@endphp

@section('content')

<!-- Start Theme Style  -->
<div>
    <div class="rainbow-gradient-circle"></div>
    <div class="rainbow-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->

<!-- Start Pricing Area  -->
<div class="main-content">
    <!-- Start Pricing Style-2  -->
    <div class="rainbow-pricing-area rainbow-section-gap rainbow-section-gapTop-big">
        <div class="container">

            <!-- Pricing Part -->
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Pricing</span>
                            </h4>
                            <h2 class="title w-600 mb--20">
                                Commence Content Journey with AI
                            </h2>
                            <p class="description b1">
                                Collaborate with AI to generate content that resonates.
                            </p>
                        </div>

                        <nav class="chatenai-tab">
                            <div class="tab-btn-grp nav nav-tabs mb-3 text-center justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    Monthly
                                </button>
                                <button class="nav-link with-badge" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    Yearly
                                    <span class="rainbow-badge-card badge-border">20% Off</span>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="tab-content p-0 bg-transparent border-0 border bg-light" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row row--15 mt_dec--30">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Free</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">$</span><span class="price">0</span>
                                                    </div>
                                                    <span class="subtitle">USD Per Month</span>
                                                </div>
                                                <div class="separator-animated mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 7,700
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 6+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 5+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Try it now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai active">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Business</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">$</span><span class="price">50</span>
                                                    </div>
                                                    <span class="subtitle">USD Per Month</span>
                                                </div>
                                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 80,000
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 6+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 5+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default" href="#">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai active">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Advanced</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">$</span><span class="price">100</span>
                                                    </div>
                                                    <span class="subtitle">USD Per Month</span>
                                                </div>
                                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 280,000
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 6+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 5+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default" href="#">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Enterprise</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="price sm-text">Let's Talk</span>
                                                    </div>
                                                    <span class="subtitle">Forever</span>
                                                </div>
                                                <div class="separator-animated mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 3,580,000
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 15+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 8+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Contact Sales</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row row--15">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="rainbow-pricing style-chatenai">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Free</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">$</span><span class="price">0</span>
                                                    </div>
                                                    <span class="subtitle">USD Per Month</span>
                                                </div>
                                                <div class="separator-animated mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 7,700
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 6+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 5+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Try it now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="rainbow-pricing style-chatenai active">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Business</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">$</span><span class="price">300</span>
                                                    </div>
                                                    <span class="subtitle">USD Per Year</span>
                                                </div>
                                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 80,000
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 6+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 5+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default" href="#">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="rainbow-pricing style-chatenai active">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Advanced</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">$</span><span class="price">500</span>
                                                    </div>
                                                    <span class="subtitle">USD Per Year</span>
                                                </div>
                                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 280,000
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 6+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 5+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default" href="#">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="rainbow-pricing style-chatenai">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Enterprise</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="price sm-text">Let's Talk</span>
                                                    </div>
                                                    <span class="subtitle">Per Year</span>
                                                </div>
                                                <div class="separator-animated mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> 3,580,000
                                                        Words
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 15+
                                                        Templates
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 8+
                                                        Languages
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> AI Blog
                                                        generate
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Advance
                                                        Editor Tool
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i>
                                                        Consistent support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Contact Sales</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Pricing Compare Detailed  -->
            <div class="rainbow-pricing-detailed-area mt--30 rainbow-section-gapTop">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left mb--30" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h3 class="title w-600 mb--0">Detailed Compare</h3>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    <div class="col-lg-12">
                        <div class="rainbow-compare-table style-1">
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="sm-radius-top-left">Free</th>
                                        <th class="style-prymary">Creator</th>
                                        <th class="style-prymary">Business</th>
                                        <th class="style-prymary sm-radius-top-right">
                                            Enterprise
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="heading-row">
                                        <td>
                                            <h6>Price & Credits</h6>
                                        </td>
                                        <td>
                                            <h6>Price & Credits</h6>
                                        </td>
                                        <td>
                                            <h6>Price & Credits</h6>
                                        </td>
                                        <td>
                                            <h6>Price & Credits</h6>
                                        </td>
                                        <td>
                                            <h6>Price & Credits</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Photo Avatar</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Instant Avatar</td>
                                        <td>Paid Add-On</td>
                                        <td>Paid Add-On</td>
                                        <td>Paid Add-On</td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Price</td>
                                        <td>Free</td>
                                        <td>$2 / Credit Monthly</td>
                                        <td>$3 / Credit Monthly</td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr>
                                        <td>Credit Plans</td>
                                        <td>1 Credit</td>
                                        <td>15, 30, 60, 90, 120 / Month</td>
                                        <td>30, 60, 120, 180, 300 / Month</td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr>
                                        <td>Switch/Cancel Anytime</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Price</td>
                                        <td>Free</td>
                                        <td>$2 / Credit Monthly</td>
                                        <td>$3 / Credit Monthly</td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr class="heading-row">
                                        <td>
                                            <h6>Avatars</h6>
                                        </td>
                                        <td>
                                            <h6>Avatars</h6>
                                        </td>
                                        <td>
                                            <h6>Avatars</h6>
                                        </td>
                                        <td>
                                            <h6>Avatars</h6>
                                        </td>
                                        <td>
                                            <h6>Avatars</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Public Avatars</td>
                                        <td>Free</td>
                                        <td>100+ Premium Avatars</td>
                                        <td>100+ Premium Avatars</td>
                                        <td>100+ Premium Avatars</td>
                                    </tr>
                                    <tr>
                                        <td>Photo Avatar</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Instant Avatar</td>
                                        <td>Paid Add-On</td>
                                        <td>Paid Add-On</td>
                                        <td>Paid Add-On</td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr>
                                        <td>Studio Avatar</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr class="heading-row">
                                        <td>
                                            <h6>All Features</h6>
                                        </td>
                                        <td>
                                            <h6>All Features</h6>
                                        </td>
                                        <td>
                                            <h6>All Features</h6>
                                        </td>
                                        <td>
                                            <h6>All Features</h6>
                                        </td>
                                        <td>
                                            <h6>All Features</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Avatar FaceSwap</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Photo Avatar Generation</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Text2Image</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GPT4 Script Writer</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AI Matting</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>URL To Video</td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr class="heading-row">
                                        <td>
                                            <h6>Team Collaboration</h6>
                                        </td>
                                        <td>
                                            <h6>Team Collaboration</h6>
                                        </td>
                                        <td>
                                            <h6>Team Collaboration</h6>
                                        </td>
                                        <td>
                                            <h6>Team Collaboration</h6>
                                        </td>
                                        <td>
                                            <h6>Team Collaboration</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Space Seats</td>
                                        <td>2 Seats</td>
                                        <td>3 Seats</td>
                                        <td>5 Seats</td>
                                        <td>Customizable</td>
                                    </tr>
                                    <tr>
                                        <td>Credit Control</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Role Control</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Usage Report</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brand Kit</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Access Control</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SSO</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr class="heading-row">
                                        <td>
                                            <h6>Video Creation</h6>
                                        </td>
                                        <td>
                                            <h6>Video Creation</h6>
                                        </td>
                                        <td>
                                            <h6>Video Creation</h6>
                                        </td>
                                        <td>
                                            <h6>Video Creation</h6>
                                        </td>
                                        <td>
                                            <h6>Video Creation</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio Input</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Video Duration</td>
                                        <td>1-Min Max Duration</td>
                                        <td>5-Min Max Duration</td>
                                        <td>20-Min Max Duration</td>
                                        <td>60-Min Max Duration</td>
                                    </tr>
                                    <tr>
                                        <td>Video Templates</td>
                                        <td>400+</td>
                                        <td>400+</td>
                                        <td>400+</td>
                                        <td>400+</td>
                                    </tr>
                                    <tr>
                                        <td>Stock Elements</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio Recording</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Import PPT/PDF</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image/Video Background</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Background Music</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stock Library</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Video Animation</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1080P Export</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio Input</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Priority Process</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>API Integration</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4K Export</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Auto Captions</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SRT Download</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr class="heading-row">
                                        <td>
                                            <h6>Video Share</h6>
                                        </td>
                                        <td>
                                            <h6>Video Share</h6>
                                        </td>
                                        <td>
                                            <h6>Video Share</h6>
                                        </td>
                                        <td>
                                            <h6>Video Share</h6>
                                        </td>
                                        <td>
                                            <h6>Video Share</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio Input</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stock Elements</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio Recording</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Import PPT/PDF</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image/Video Background</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Background Music</td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon bg-dark"><i class="feather-x"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                        <td>
                                            <span class="icon"><i class="feather-check"></i></span>
                                        </td>
                                    </tr>

                                    <tr class="submit-btn-row">
                                        <td></td>
                                        <td>
                                            <a class="btn-default btn-border" href="#">Enjoy now</a>
                                        </td>
                                        <td>
                                            <a class="btn-default" href="#">Get started</a>
                                        </td>
                                        <td>
                                            <a class="btn-default" href="#">Get started</a>
                                        </td>
                                        <td>
                                            <a class="btn-default btn-border" href="#">Contact Sales</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Pricing Style-2  -->
</div>
<!-- Start Pricing Area  -->

@endsection