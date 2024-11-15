<!DOCTYPE html>
<html lang="en">

<x-head headTitle='Home'/>

<body>
    
    <main class="page-wrapper">
        
        <!-- Start Header Top Area  -->
        <x-headertop />
        <x-header2 />
        <!-- End Header Top Area  -->

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <img src="{{ asset('assets/images/light/switch/sun-01.svg') }}" alt="Sun images"><span title="Light Mode"> Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <img src="{{ asset('assets/images/light/switch/vector.svg') }}" alt="Vector Images"><span title="Dark Mode">
                            Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        

        <!-- start mobilemenu -->
        <x-mobilemenu />
        <!-- End  mobilemenu -->

        <!-- start Preloader -->
        <x-preloader />
        <!-- End Preloader -->

        <!-- Start Slider Area  -->
        <div class="slider-area slider-style-1 variation-default slider-bg-image bg-banner1" data-black-overlay="1">
            <!-- <div class="bg-blend-top bg_dot-mask"></div> -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="inner text-center mt--60">
                            <h1 class="title display-one">Технологии будущего<br>
                                <span class="theme-gradient cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper" style="width: 100%;">
                                        <b class="theme-gradient is-visible">Автоматизация</b>
                                        <b class="theme-gradient is-hidden">Экономия</b>
                                        <b class="theme-gradient is-hidden">Оптимизация</b>
                                        <b class="theme-gradient is-hidden">Эффективность</b>
                                        <b class="theme-gradient is-hidden">Надежность</b>
                                        <b class="theme-gradient is-hidden">Масштабируемость</b>
                                        <b class="theme-gradient is-hidden">Поддержка</b>
                                    </span>
                                </span><br><span class="color-off">Настоящего</span>
                            </h1>
                            <p class="b1 desc-text">Контактный центр нового поколения для вашего бизнеса</p>
                            <div class="button-group">
                                <a class="btn-default bg-light-gradient btn-large" href="{{ asset('textgenerator') }}">
                                    <div class="has-bg-light"></div>
                                    <span>Попробовать бесплатно</span>
                                </a>
                            </div>
                            <p class="color-gray mt--5">💳 Без предоплаты и договоров!</p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-xl-10 order-1 order-lg-2">
                        <div class="frame-image frame-image-bottom bg-flashlight video-popup icon-center">
                            <img src="{{ asset('assets/images/banner/banner-image-03.png') }}" alt="Banner Images">
                            <div class="video-icon">
                                <a class="btn-default rounded-player popup-video border bg-white-dropshadow" href="{{ asset('https://www.youtube.com/watch?v=tj9-MGHCs38') }}">
                                    <span><i class="feather-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chatenai-separator has-position-bottom">
                <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
                <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
            </div>
        </div>
        <!-- End Slider Area  -->

        <!-- Start Service__Style--1 Area  -->
        <div class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle">
                                <span class="theme-gradient">ЧТО МЫ ПРЕДЛАГАЕМ</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Решения, которые заменяют штат операторов и обеспечивают стабильность 24/7</h2>
                            <p class="description b1">Гибкие текстовые и голосовые решения, которые легко интегрируются и адаптируются</p>
                        </div>
                    </div>
                </div>

                <div class="row row--15 service-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <i class="feather-message-circle"></i>
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="#">Ассистенты для сайта</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Чат-боты на основе нейросетей, которые понимают любые формулировки запросов</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <i class="feather-mail"></i>
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="#">Мессенджеры и SMS</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Чат-боты для мессенджеров и SMS, которые могут продавать, бронировать и обрабатывать заказы</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <i class="feather-phone-outgoing"></i>
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="#">Исходящие вызовы</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Передовые технологии распознавания речи и клонирования голоса, которые заменяют операторов</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <i class="feather-phone-incoming"></i>
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="#">Входящие вызовы</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Одновременная обработка любых входящих вызовов без очередей и ожидания оператора</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <i class="feather-link"></i>
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="#">Гибкие интеграции</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Интегрируем решения с вашей инфраструктурой, учитывая все особенности бизнес-процессов</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <i class="feather-cpu"></i>
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="#">Передовые технологии</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">ИИ-технологии, которые меняют представление о возможностях виртуальных ассистентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service__Style--1 Area  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Timeline-Style-Four  -->
        <div class="rainbow-timeline-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">ПРОЕКТ ЗА НЕСКОЛЬКО ШАГОВ</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Быстро. Легко. Индивидуально.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 mt--30">
                        <div class="timeline-style-two bg-flashlight bg-color-blackest">
                            <div class="row row--0">
                                <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                                    <div class="rainbow-timeline">
                                        <h6 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">1.Разработка скрипта</h6>
                                        <div class="progress-line">
                                            <div class="line-inner"></div>
                                        </div>
                                        <div class="progress-dot">
                                            <div class="dot-level">
                                                <div class="dot-inner"></div>
                                            </div>
                                        </div>
                                        <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Разрабатываем скрипт,  учитывая ваши уникальные требования</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                                    <div class="rainbow-timeline">
                                        <h6 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">2.Интеграция с системой</h6>
                                        <div class="progress-line">
                                            <div class="line-inner"></div>
                                        </div>
                                        <div class="progress-dot">
                                            <div class="dot-level">
                                                <div class="dot-inner"></div>
                                            </div>
                                        </div>
                                        <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Интегрируем решения в вашу существующую систему, учитывая все особенности</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                                    <div class="rainbow-timeline">
                                        <h6 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">3.Тестирование и запуск</h6>
                                        <div class="progress-line">
                                            <div class="line-inner"></div>
                                        </div>
                                        <div class="progress-dot">
                                            <div class="dot-level">
                                                <div class="dot-inner"></div>
                                            </div>
                                        </div>
                                        <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Проводим тестирование и обеспечиваем быстрый запуск проекта</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-group mt--50 text-center">
                            <a class="btn-default btn-large" href="{{ asset('textgenerator') }}">Прочитать как это работает</a>
                            <a class="btn-default btn-large btn-border popup-video" href="{{ asset('https://www.youtube.com/watch?v=tj9-MGHCs38') }}"><span>
                                    <i class="feather-play"></i>
                                </span>Посмотреть как это работает</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Timeline-Style-Four  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-bottom.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-bottom.svg') }}" alt="separator">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Split Style-1 Area  -->
        <div class="rainbow-split-area rainbow-section-gap">
            <div class="container">
                <div class="rainbow-splite-style">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="thumbnail">
                                    <img class="radius" src="{{ asset('assets/images/split/split-8.png') }}" alt="split Images">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="split-inner">
                                    <h4 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Создаем будущее общения с клиентами</h4>
                                    <p class="description" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Этот проект появился из стремления сделать общение с клиентами проще, быстрее и доступнее для всех. Мы верим, что инновации могут не только улучшать процессы, но и приносить реальную пользу бизнесу</p>
                                    <ul class="split-list" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                        <li>- Искусственный интеллект, который работает</li>
                                        <li>- Голосовые и текстовые решения для всех</li>
                                        <li>- Экономия времени и расходов на персонал</li>
                                    </ul>
                                    <div class="view-more-button mt--35" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                        <a class="btn-default" href="{{ asset('contact') }}">Обсудим ваш проект?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Split Style-1 Area  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Pricing Area  -->
        <div class="rainbow-pricing-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle "><span class="theme-gradient">Цены</span></h4>
                            <h2 class="title w-600 mb--20">Запускайте проекты с минимальными затратами</h2>
                            <p class="description b1">Гибкие тарифы для старта и индивидуальные решения</p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rainbow-pricing style-2">
                            <div class="pricing-table-inner bg-flashlight">
                                <div class="pricing-header">
                                    <h4 class="title">Basic</h4>
                                    <div class="pricing">
                                        <div class="price-wrapper"><span class="price">Free</span></div><span class="subtitle">Forever</span>
                                    </div>
                                </div>
                                <div class="separator-animated mt--30 mb--30"></div>
                                <div class="pricing-body">
                                    <ul class="list-style--1">
                                        <li><i class="feather-check-circle"></i> 7,700 Words</li>
                                        <li><i class="feather-check-circle"></i> 6+ Templates</li>
                                        <li><i class="feather-check-circle"></i> 5+ Languages</li>
                                        <li><i class="feather-minus-circle"></i> AI Blog generate</li>
                                        <li><i class="feather-minus-circle"></i> Advance Editor Tool</li>
                                        <li><i class="feather-minus-circle"></i> Consistent support</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer"><a class="btn-default btn-border" href="#">Try it now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rainbow-pricing style-2 active">
                            <div class="pricing-table-inner bg-flashlight">
                                <div class="pricing-header">
                                    <h4 class="title">Business</h4>
                                    <div class="pricing">
                                        <div class="price-wrapper"><span class="currency">$</span><span class="price">50</span></div><span class="subtitle">USD Per
                                            Month</span>
                                    </div>
                                </div>
                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                <div class="pricing-body">
                                    <ul class="list-style--1">
                                        <li><i class="feather-check-circle"></i> 80,000 Words</li>
                                        <li><i class="feather-check-circle"></i> 6+ Templates</li>
                                        <li><i class="feather-check-circle"></i> 5+ Languages</li>
                                        <li><i class="feather-check-circle"></i> AI Blog generate</li>
                                        <li><i class="feather-check-circle"></i> Advance Editor Tool</li>
                                        <li><i class="feather-check-circle"></i> Consistent support</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer"><a class="btn-default" href="#">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rainbow-pricing style-2">
                            <div class="pricing-table-inner bg-flashlight">
                                <div class="pricing-header">
                                    <h4 class="title">Advanced</h4>
                                    <div class="pricing">
                                        <div class="price-wrapper"><span class="currency">$</span><span class="price">100</span></div><span class="subtitle">USD Per
                                            Month</span>
                                    </div>
                                </div>
                                <div class="separator-animated mt--30 mb--30"></div>
                                <div class="pricing-body">
                                    <ul class="list-style--1">
                                        <li><i class="feather-check-circle"></i> 80,000 Words</li>
                                        <li><i class="feather-check-circle"></i> 6+ Templates</li>
                                        <li><i class="feather-check-circle"></i> 5+ Languages</li>
                                        <li><i class="feather-check-circle"></i> AI Blog generate</li>
                                        <li><i class="feather-check-circle"></i> Advance Editor Tool</li>
                                        <li><i class="feather-check-circle"></i> Consistent support</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer"><a class="btn-default btn-border" href="#">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-group mt--50 text-center">
                    <a class="btn-default btn-large btn-border" href="{{ asset('pricing') }}">View Comparision</a>
                </div>
            </div>
        </div>
        <!-- End Pricing Area  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Accordion-2 Area  -->
        <div class="rainbow-accordion-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Accordion</span></h4>
                            <h2 class="title w-600 mb--20">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--35 row--20">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="rainbow-accordion-style  accordion">
                            <div class="accordion" id="accordionExamplea">
                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is ChatenAI ? How does it work?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            ChatenAI is an AI-powered messaging platform that understands and responds to your natural language queries. Ask anything you'd typically ask a human assistant—get weather updates, news, restaurant recommendations, and more!
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What kind of questions can I ask ChatenAI?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            ChatenAI, an AI-driven messaging platform, adeptly communicates with users using natural language understanding. It delivers helpful responses to your inquiries and requests.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can I get update regularly and For how long do I get updates?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Yes, We will get update the ChatenAI. And you can get it any time. Next
                                            time we will comes with more feature. You can be get update for
                                            unlimited times. Our dedicated team works for update.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How can I get the customer support?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            After purchasing the product need you any support you can be share with
                                            us with sending mail to rainbowit10@gmail.com.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            HIs my data safe with ChatenAI?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Feel free to toss any questions at chatenAI, just like you would with a human helper—whether it's about the weather, the latest news, restaurant suggestions, or anything else you fancy!
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Is ChatenAI available in multiple languages?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Yes, ChatenAI is designed to support multiple languages, offering a versatile and inclusive communication experience for users worldwide.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion-2 Area  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Brands Area -->
        <div class="rainbow-brand-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Our Awesome Client</span></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt--10">
                        <ul class="brand-list brand-style-2">
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-01.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-02.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-03.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-04.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-05.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-06.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-07.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-08.png') }}" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/brand-01.png') }}" alt="Brand Image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brands Area -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Call TO Action Area  -->
        <div class="rainbow-callto-action-area">
            <div class="wrapper">
                <div class="rainbow-callto-action clltoaction-style-default rainbow-section-gap">
                    <div class="container">
                        <div class="row row--0">
                            <div class="col-lg-12">
                                <div class="align-items-center content-wrapper">
                                    <div class="inner">
                                        <div class="content text-center">
                                            <span class="theme-gradient b2 mb--30 d-inline-block">Boost your writing productivity</span>
                                            <h2 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Overcome Writer's Block Today</h2>
                                            <p class="description" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Gain Access to a Team of Copywriting Experts.</p>
                                            <div class="call-to-btn" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                                <a class="btn-default bg-light-gradient btn-large" href="{{ asset('textgenerator') }}">
                                                    <div class="has-bg-light"></div>
                                                    <span>Start writing for free</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fancy-genearate-section">
                    <div class="container">
                        <div class="genarator-section">
                            <ul class="genarator-card-group full-width-list ">
                                <li>
                                    <a href="{{ route('textGenerator') }}" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <img src="{{ asset('assets/images/generator-icon/text_line.png') }}" alt="AI Generator">
                                                </div>
                                                <h5 class="title">Text Generator</h5>
                                                <span class="rainbow-demo-btn">Try It Now Free</span>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('imageEditor') }}" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <img src="{{ asset('assets/images/generator-icon/photo-editor_line.png') }}" alt="AI Generator">
                                                </div>
                                                <h5 class="title">Photo Editor</h5>
                                                <span class="rainbow-demo-btn">Try It Now Free</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('vedioGenerator') }}" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <img src="{{ asset('assets/images/generator-icon/video-camera_line.png') }}" alt="AI Generator">
                                                </div>
                                                <h5 class="title">Vedio Generator</h5>
                                                <span class="rainbow-demo-btn">Try It Now Free</span>
                                                <span class="rainbow-badge-card ml--10">Hot</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('emailGenerator') }}" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <img src="{{ asset('assets/images/generator-icon/email_line.png') }}" alt="AI Generator">
                                                </div>
                                                <h5 class="title">Email Writer</h5>
                                                <span class="rainbow-demo-btn">Try It Now Free</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('codeGenerator') }}" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <img src="{{ asset('assets/images/generator-icon/code-editor_line.png') }}" alt="AI Generator">
                                                </div>
                                                <h5 class="title">Code Generator</h5>
                                                <span class="rainbow-demo-btn">Try It Now Free</span>
                                                <span class="rainbow-badge-card ml--10">Hot</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Call TO Action Area  -->

        <!-- Start Footer Area  -->
        <x-footer />
        <!-- End Footer Area  -->

        <!-- Start Copy Right Area  -->
        <x-copyright />
        <!-- End Copy Right Area  -->

        <div class="rn-progress-parent">
            <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
            </svg>
        </div>

        <!--back to top -->
        <x-backtotop />

    </main>

    <!-- All Scripts  -->
    <x-script />

</body>

</html>