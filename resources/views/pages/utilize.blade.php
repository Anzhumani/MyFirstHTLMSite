@extends('layout.layout4')

@php
$headTitle = 'Наши преимущества';
$header = 'header2';
@endphp

@section('content')

<div class="rbt-utilize-area rainbow-section-gap-big">
    <div class="container">
        <div class="utilize-inner">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="rbt-default-sidebar sticky-top rbt-shadow-box">
                        <div class="inner">
                            <div class="content-item-content">
                                <div class="rbt-default-sidebar-wrapper">
                                    <nav class="mainmenu-nav">
                                        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                            <li class="has-submenu d-block"><a class="collapse-btn" data-bs-toggle="collapse" href="#tech-advantages" role="button" aria-expanded="true" aria-controls="tech-advantages"><span>Технические преимущества</span></a>
                                                <div class="show" id="tech-advantages">
                                                    <ul class="submenu rbt-default-sidebar-list">
                                                        <li>
                                                            <a href="#gpt-models">
                                                                <span>Современные GPT-модели</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#voice-cloning"><span>Клонирование голоса</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#speech-recognition">
                                                                <span>Точное распознавание речи</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#intent-detection">
                                                                <span>Распознавание намерений</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-submenu d-block">
                                                <a class="collapse-btn collapsed" data-bs-toggle="collapse" href="#func-advantages" role="button" aria-expanded="false" aria-controls="func-advantages"><span>Функциональные преимущества</span></a>
                                                <div class="collapse" id="func-advantages">
                                                    <ul class="submenu rbt-default-sidebar-list">
                                                        <li>
                                                            <a href="#omnichannel">
                                                                <span>Омниканальность</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#integration"><span>Интеграция под ключ</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 inner-content pl--0">

                    <!-- Технические преимущества -->
                    <div id="tech-advantages-section" class="single-inner-box">
                        <h3 class="section-title">Технические преимущества</h3>
                        <div id="gpt-models" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Заголовок Современные GPT-модели</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/utilize-img/ut-image-01.png') }}" alt="">
                                    </div>
                                    <p class="b1">Описание Современные GPT-модели</p>
                                </div>
                            </div>
                        </div>
                        <div id="voice-cloning" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Заголовок Клонирование голоса</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/utilize-img/ut-image-02.png') }}" alt="">
                                    </div>
                                    <p class="b1">Описание Клонирование голоса</p>
                                </div>
                            </div>
                        </div>
                        <div id="speech-recognition" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Заголовок Точное распознавание речи</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/utilize-img/ut-image-03.png') }}" alt="">
                                    </div>
                                    <p class="b1">Описание Точное распознавание речи</p>
                                </div>
                            </div>
                        </div>
                        <div id="intent-detection" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Заголовок Распознавание намерений</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/utilize-img/ut-image-01.png') }}" alt="">
                                    </div>
                                    <p class="b1">Описание Распознавание намерений</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Функциональные преимущества -->
                    <div id="func-advantages-section" class="single-inner-box">
                        <h3 class="section-title">Функциональные преимущества</h3>
                        <div id="omnichannel" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Заголовок Омниканальность</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/utilize-img/ut-image-02.png') }}" alt="">
                                    </div>
                                    <p class="b1">Описание Омниканальность</p>
                                </div>
                            </div>
                        </div>
                        <div id="integration" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Заголовок Интеграция под ключ</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/utilize-img/ut-image-03.png') }}" alt="">
                                    </div>
                                    <p class="b1">Описание Интеграция под ключ</p>
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
