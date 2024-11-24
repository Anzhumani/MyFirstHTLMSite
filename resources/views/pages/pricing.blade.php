@extends('layout.layout4')

@php
$headTitle = 'Цены';
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
                                <span class="theme-gradient">Цены</span>
                            </h4>
                            <h2 class="title w-600 mb--20">
                                Гибкие тарифы для любого бюджета
                            </h2>
                            <p class="description b1">
                                Выберите оптимальный план для автоматизации общения с клиентами
                            </p>
                        </div>

                        <nav class="chatenai-tab">
                            <div class="tab-btn-grp nav nav-tabs mb-3 text-center justify-content-center" id="nav-tab" role="tablist">
                                <!-- Вкладка для текстовых ботов -->
                                <button class="nav-link active" id="nav-text-tab" data-bs-toggle="tab" data-bs-target="#nav-text" type="button" role="tab" aria-controls="nav-text" aria-selected="true">
                                    Текстовые боты
                                </button>
                                <!-- Вкладка для входящих вызовов -->
                                <button class="nav-link" id="nav-incoming-tab" data-bs-toggle="tab" data-bs-target="#nav-incoming" type="button" role="tab" aria-controls="nav-incoming" aria-selected="false">
                                    Входящие вызовы
                                </button>
                                <!-- Вкладка для исходящих вызовов -->
                                <button class="nav-link" id="nav-outgoing-tab" data-bs-toggle="tab" data-bs-target="#nav-outgoing" type="button" role="tab" aria-controls="nav-outgoing" aria-selected="false">
                                    Исходящие вызовы
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="tab-content p-0 bg-transparent border-0 bg-light" id="nav-tabContent">
                    <!-- Контент для текстовых ботов -->
                    <div class="tab-pane fade active show" id="nav-text" role="tabpanel" aria-labelledby="nav-text-tab">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row row--15 mt_dec--30">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Минимальный</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">от</span><span class="price">0.15</span><span class="currency">₽</span>
                                                    </div>
                                                    <span class="subtitle">За 4000 символов</span>
                                                </div>
                                                <div class="separator-animated mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> Для рассылки уведомлений
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> SMS и мессенджеры
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Простое управление
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> Без нейросетей
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> Только исходящие сообщения
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> Ограниченная поддержка
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Выбрать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai active">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Стандартный</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">от</span><span class="price">0.35</span><span class="currency">₽</span>
                                                    </div>
                                                    <span class="subtitle">За 4000 символов</span>
                                                </div>
                                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> Для рассылки уведомлений
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Для ответов на вопросы
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Простая нейросеть GPT
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 1400 символов контекста
                                                    </li>
                                                    <li>
                                                        <i class="feather-minus-circle"></i> Недоступна интеграция
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default" href="#">Выбрать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai active">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Расширенный</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">от</span><span class="price">0.45</span><span class="currency">₽</span>
                                                    </div>
                                                    <span class="subtitle">За 4000 символов</span>
                                                </div>
                                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> Виджет для сайта
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Обработка диалогов
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Продвинутая нейросеть GPT
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 2500 символов контекста
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Понимание сложных запросов
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Полная интеграция 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default" href="#">Выбрать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt--30">
                                <div class="rainbow-pricing style-chatenai">
                                    <div class="pricing-table-inner bg-flashlight">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <h4 class="title">Максимальный</h4>
                                                <div class="pricing">
                                                    <div class="price-wrapper">
                                                        <span class="currency">от</span><span class="price">0.55</span><span class="currency">₽</span>
                                                    </div>
                                                    <span class="subtitle">За 4000 символов</span>
                                                </div>
                                                <div class="separator-animated mt--30 mb--30"></div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="list-style--1">
                                                    <li>
                                                        <i class="feather-check-circle"></i> Виджет для сайта
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Обработка диалогов
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Для порталов поддержки
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Передовая нейросеть GPT
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> 4125 символов контекста
                                                    </li>
                                                    <li>
                                                        <i class="feather-check-circle"></i> Полная интеграция
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Выбрать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Контент для входящих вызовов -->
                    <div class="tab-pane fade" id="nav-incoming" role="tabpanel" aria-labelledby="nav-incoming-tab">
                        <!-- Добавьте контент для входящих вызовов здесь -->
                    </div>
                    <!-- Контент для исходящих вызовов -->
                    <div class="tab-pane fade" id="nav-outgoing" role="tabpanel" aria-labelledby="nav-outgoing-tab">
                        <!-- Добавьте контент для исходящих вызовов здесь -->
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