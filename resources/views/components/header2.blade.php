<!-- Start Header Area  -->
<header class="rainbow-header header-default header-not-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center row--0">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="ChatBot Logo">
                        <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Corporate Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-6 position-static">
                <div class="header-right">

                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li><a href="{{ route('index') }}">Главная</a></li>
                            <li class="with-megamenu has-menu-child-item position-relative"><a href="#">О нас</a>
                                <div class="rainbow-megamenu right-align with-mega-item-2 small">
                                    <div class="wrapper p-0">
                                        <div class="row row--0">
                                            <div class="col-lg-12 single-mega-item">
                                                <ul class="mega-menu-item">
                                                    <h3 class="rbt-short-title">Компания</h3>
                                                    <li>
                                                        <a href="{{ route('styleGuide') }}">
                                                            <span>О компании</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('blog') }}">
                                                            <span>Миссия</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('blogDetails') }}">
                                                            <span>Команда</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <h3 class="rbt-short-title"></h3>
                                                    <h3 class="rbt-short-title">Сотрудничество</h3>
                                                    
                                                    <li>
                                                        <a href="{{ route('termsPolicy') }}">
                                                            <span>Партнерам</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('privacyPolicy') }}">
                                                            <span>Вакансии</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="with-megamenu has-menu-child-item position-relative"><a href="#">Наши преимущества</a>
                                <div class="rainbow-megamenu right-align with-mega-item-2">
                                    <div class="wrapper p-0">
                                        <div class="row row--0">
                                            <div class="col-lg-6 single-mega-item">
                                                <ul class="mega-menu-item">
                                                    <h3 class="rbt-short-title">Технологии</h3>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#textgenerator-sec">
                                                            <span>Нейросетевые модели</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#pernalized-sec">
                                                            <span>Клонирование голоса</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#engage-sec">
                                                            <span>Распознавание речи</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#example1">
                                                            <span>Распознавание намерений</span>
                                                        </a>
                                                    </li>
                                                    <h3 class="rbt-short-title"></h3>
                                                    <h3 class="rbt-short-title">Возможности</h3>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#example2">
                                                            <span>Антиспам</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#example3">
                                                            <span>Интеграции</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('utilize') }}#pricing_two">
                                                            <span>Проектная работа</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                            <div class="col-lg-6 single-mega-item">
                                                <div class="header-menu-img">
                                                    <img src="{{ asset('assets/images/menu-img/menu-img-2.png') }}" alt="Menu Split Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('pricing') }}">Цены</a></li>
                            <li><a href="{{ route('contact') }}">Контакты</a></li>
                        </ul>
                    </nav>

                    <!-- Start Header Btn  -->
                    <div class="header-btn">
                        <a class="btn-default btn-small round" target="_blank" href="{{ route('signin') }}">Панель управления</a>
                    </div>
                    <!-- End Header Btn  -->

                    

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End  header -->