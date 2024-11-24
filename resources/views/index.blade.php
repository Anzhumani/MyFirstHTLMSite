<!DOCTYPE html>
<html lang="en">

<x-head headTitle='Главная'/>

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
                                        <b class="theme-gradient is-hidden">Цифровизация</b>
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
                                <a class="btn-default rounded-player popup-video border bg-white-dropshadow" href="{{ asset('https://rutube.ru/play/embed/ef1ea10aed568ee793f2a2af0bb55b00/') }}">
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
                            <h2 class="title w-600 mb--20">Инновации, которые заменяют штат операторов</h2>
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
                                        <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Интегрируем решения в вашу существующую систему</p>
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
                                        <li>- Нейросети, которые понимают с полуслова</li>
                                        <li>- Голосовые и текстовые решения для всех</li>
                                        <li>- Уменьшение расходов и эффективность</li>
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
                                    <h4 class="title">Текстовые каналы</h4>
                                    <div class="pricing">
                                        <div class="price-wrapper">
                                            <span class="currency">от</span>
                                            <span class="price">0,15</span>
                                            <span class="currency">₽</span>
                                        </div><span class="subtitle">За 1000 символов
                                    </div>
                                </div>
                                <div class="separator-animated mt--30 mb--30"></div>
                                <div class="pricing-body">
                                    <ul class="list-style--1">
                                        <li><i class="feather-check-circle"></i> Консультации по услугам</li>
                                        <li><i class="feather-check-circle"></i> Продажи в мессенджерах</li>
                                        <li><i class="feather-check-circle"></i> Запись на прием</li>
                                        <li><i class="feather-check-circle"></i> Бронирование услуг</li>
                                        <li><i class="feather-check-circle"></i> Портал поддержки</li>
                                        <li><i class="feather-check-circle"></i> Виджет для сайта</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rainbow-pricing style-2 active">
                            <div class="pricing-table-inner bg-flashlight">
                                <div class="pricing-header">
                                    <h4 class="title">Входящие вызовы</h4>
                                    <div class="pricing">
                                        <div class="price-wrapper">
                                            <span class="currency">от</span>
                                            <span class="price">2,49</span>
                                            <span class="currency">₽</span>
                                        </div><span class="subtitle">За минуту разговора
                                    </div>
                                </div>
                                <div class="separator-animated animated-true mt--30 mb--30"></div>
                                <div class="pricing-body">
                                    <ul class="list-style--1">
                                        <li><i class="feather-check-circle"></i> Горячая линия</li>
                                        <li><i class="feather-check-circle"></i> Прием заказов</li>
                                        <li><i class="feather-check-circle"></i> Консультации клиентов</li>
                                        <li><i class="feather-check-circle"></i> Техническая поддержка</li>
                                        <li><i class="feather-check-circle"></i> Запись на прием</li>
                                        <li><i class="feather-check-circle"></i> Разгрузка операторов</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rainbow-pricing style-2">
                            <div class="pricing-table-inner bg-flashlight">
                                <div class="pricing-header">
                                    <h4 class="title">Исходящие вызовы</h4>
                                    <div class="pricing">
                                        <div class="price-wrapper">
                                            <span class="currency">от</span>
                                            <span class="price">3,99</span>
                                            <span class="currency">₽</span>
                                        </div><span class="subtitle">За минуту разговора
                                    </div>
                                </div>
                                <div class="separator-animated mt--30 mb--30"></div>
                                <div class="pricing-body">
                                    <ul class="list-style--1">
                                        <li><i class="feather-check-circle"></i> Холодные продажи</li>
                                        <li><i class="feather-check-circle"></i> Напоминания о записи</li>
                                        <li><i class="feather-check-circle"></i> Проведение опросов</li>
                                        <li><i class="feather-check-circle"></i> Анонсы акций</li>
                                        <li><i class="feather-check-circle"></i> Персональные уведомления</li>
                                        <li><i class="feather-check-circle"></i> Информирование о долгах</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-group mt--50 text-center">
                    <a class="btn-default btn-large btn-border" href="{{ asset('pricing') }}">Все тарифы и технологии</a>
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
                            <h4 class="subtitle "><span class="theme-gradient">FAQ</span></h4>
                            <h2 class="title w-600 mb--20">Часто задаваемые вопросы</h2>
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
                                            Сколько времени займёт запуск проекта с нуля?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Простые проекты можно запустить за 1-3 дня, используя готовые шаблоны и базовую настройку. Более сложные решения, такие как интеграции с API, настройка транков или разработка кастомных сценариев, могут занять до 1-2 недель, в зависимости от сложности задач.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Какая конверсия у ИИ по сравнению с оператором?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            ИИ при хорошем сценарии способен дать результаты, сравнимые с оператором, а иногда даже лучше. В идеальном случае выгода может составлять от 2 до 5 раз по сравнению с затратами на операторов. Однако важно помнить,
                                             что повышение качества сценария после определенной точки будет приводить к увеличению расходов, и выгодность такого улучшения нужно тщательно анализировать.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Можно ли протестировать бота до покупки?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Да, бота можно протестировать через обратный звонок на сайте. Типовые сценарии доступны бесплатно, но интеграции и доработки требуют оплаты. В ряде случаев мы готовы предложить демо-версию перед заключением договора.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Можно ли интегрировать бота с нашим сайтом?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Самый быстрый и простой способ интеграции — это использование JS-виджета, который можно добавить на сайт за несколько минут. Для более сложных интеграций с вашей инфраструктурой или внешними системами мы предлагаем решение через API и другие кастомизируемые подходы.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Насколько естественно звучит голос вашего бота?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Мы используем клонирование голоса: бот обучается на тысячах минут записей диктора, чтобы воспроизводить переменные с естественной интонацией и акцентом. Фразы звучат так, будто их произнёс человек.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card bg-flashlight">
                                    <h2 class="accordion-header card-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Может ли бот выполнить переадресацию вызова?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplea">
                                        <div class="accordion-body card-body">
                                            Бот может переадресовать вызов на любой номер телефона или SIP-транк. Кроме того, он может отправить SMS, перейти в мессенджер или настроить повторный вызов в удобное для клиента время.
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
            <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-bottom.svg') }}" alt="separator">
            <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-bottom.svg') }}" alt="separator">
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
                                            <span class="theme-gradient b2 mb--30 d-inline-block">АВТОМАТИЗИРУЙТЕ СВОЙ БИЗНЕС</span>
                                            <h2 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Ваш путь к успеху начинается с простого шага</h2>
                                            <p class="description" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Мы подберем оптимальное решение для вашего бизнеса</p>
                                            <div class="call-to-btn" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                                <a class="btn-default bg-light-gradient btn-large" href="{{ asset('textgenerator') }}">
                                                    <div class="has-bg-light"></div>
                                                    <span>Связаться с нами</span>
                                                </a>
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
        <!-- End Call TO Action Area  -->

        <!-- Start Footer Area  -->
        <x-footer />
        <!-- End Footer Area  -->

        <!-- Start Copy Right Area  -->
        <x-copyright />
        <!-- End Copy Right Area  -->

        

        <!--back to top -->
        <x-backtotop />

    </main>

    <!-- All Scripts  -->
    <x-script />

</body>

</html>