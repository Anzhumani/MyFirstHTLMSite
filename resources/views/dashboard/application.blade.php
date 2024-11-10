@extends('layout.layout1')

@php
$headTitle = 'Settings';
$header = 'header';
@endphp

@section('content')

<!-- Main content -->
<div class="rbt-main-content mr--0 mb--0">
    <div class="rbt-daynamic-page-content center-width">

        <!-- Dashboard Center Content -->
        <div class="rbt-dashboard-content">
            <div class="banner-area">
                <!-- ChatenAI small Slider -->
                <div class="settings-area">
                    <h3 class="title">Applications</h3>
                    <ul class="user-nav">
                        <li>
                            <a href="{{ route('profileDetails') }}">
                                <span>Profile Details</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('notification') }}">
                                <span>Notification</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('chatExport') }}">
                                <span>Chat Export</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('appearance') }}">
                                <span>Apperance</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('plansBilling') }}">
                                <span>Plans and Billing</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sessions') }}">
                                <span>Sessions</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('application') }}">
                                <span>Application</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-page pb--50">
                <div class="chat-box-list">

                    <!-- ChatenAI Notification Section -->
                    <div class="single-settings-box sessions-box top-flashlight light-xl leftside overflow-hidden">
                        <div class="section-title d-flex justify-content-between">
                            <h4 class="title">Application</h4>
                            <button class="btn-default btn-small round">Add apps <i class="feather-plus"></i></button>
                        </div>
                        <div class="rbt-sm-separator mt-0"></div>
                        <div class="list-card-grp">
                            <div class="toolbar d-flex">
                                <div class="icon"><i class="feather-info"></i></div>
                                <p class="desc">You accessed the system from two distinct devices utilizing separate web browsers...</p>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/letter-m.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">Midjourney</h6>
                                            <p class="b4">vesion 3.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/vk.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">Vikings</h6>
                                            <p class="b4">vesion 3.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/chat-gpt.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">ChatGPT</h6>
                                            <p class="b4">vesion 3.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/figma.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">Figma</h6>
                                            <p class="b4">vesion 4.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/photoshop.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">Photoshop</h6>
                                            <p class="b4">vesion 2.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/letter-m.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">Midjourney</h6>
                                            <p class="b4">vesion 3.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-card style-two">
                                <div class="inner">
                                    <div class="left-content">
                                        <div class="img-section">
                                            <img src="{{ asset('assets/images/icons/vk.png') }}" alt="Browser Icon">
                                        </div>
                                        <div class="content-section">
                                            <h6 class="title">Vikings</h6>
                                            <p class="b4">vesion 3.3</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <button class="btn-default btn-border round">
                                            <i class="feather-trash-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection